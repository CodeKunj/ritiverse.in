/* =========================================================
   RiTiVERSE — Motion Engine v3
   • Hero dual-column infinite scroll (JS rAF — UP & DOWN)
   • Scroll-reveal (IntersectionObserver)
   • Header scroll state
   • Animated counters
   • Card hover tilt
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    /* ─── 0. HEADER STATE ─── */
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', () => {
        if (header) header.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });


    /* ─── 1. HERO ENTRY ANIMATION ─── */
    const heroLeft = document.querySelector('.hero-left');
    if (heroLeft) {
        // Small delay so fonts are loaded
        setTimeout(() => heroLeft.classList.add('animated'), 80);
    }


    /* ─── 2. DUAL-COLUMN INFINITE SCROLL ─── */
    /*
        Each column's inner div has [data-dir="up"] or [data-dir="down"].
        We translate them by ±speed px per frame using rAF.
        When the strip has scrolled half its height, reset to 0 — seamless loop.
        Cards are duplicated in HTML so the visual is always full.
    */
    const COL_SPEED = 0.5; // px per frame — slow & premium

    const cols = document.querySelectorAll('.scroll-col-inner');
    const colStates = [];

    cols.forEach(col => {
        colStates.push({
            el: col,
            dir: col.dataset.dir === 'down' ? 1 : -1, // -1 = UP, +1 = DOWN
            pos: col.dataset.dir === 'down' ? -col.scrollHeight / 2 : 0,
            paused: false,
        });
    });

    // Pause when hovering the hero right panel
    const heroRight = document.querySelector('.hero-right');
    if (heroRight) {
        heroRight.addEventListener('mouseenter', () => colStates.forEach(s => s.paused = true));
        heroRight.addEventListener('mouseleave', () => colStates.forEach(s => s.paused = false));
    }

    function tickScroll() {
        colStates.forEach(s => {
            if (s.paused) return;

            s.pos += s.dir * COL_SPEED;

            const half = s.el.scrollHeight / 2;

            // UP direction: when we've moved up by half height, snap back to 0
            if (s.dir === -1 && s.pos <= -half) {
                s.pos = 0;
            }

            // DOWN direction: when we've moved down to 0, snap back to -half
            if (s.dir === 1 && s.pos >= 0) {
                s.pos = -half;
            }

            s.el.style.transform = `translateY(${s.pos}px)`;
        });

        requestAnimationFrame(tickScroll);
    }

    requestAnimationFrame(tickScroll);


    /* ─── 3. SCROLL-REVEAL ─── */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const delay = parseInt(el.dataset.delay || 0, 10);
            setTimeout(() => el.classList.add('in-view'), delay);
            revealObserver.unobserve(el);
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.reveal, .stagger').forEach(el => revealObserver.observe(el));


    /* ─── 4. ANIMATED COUNTERS ─── */
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const target = parseInt(el.dataset.target, 10);
            const suffix = el.dataset.suffix || '';
            const dur = 1500;
            const start = performance.now();

            function tick(now) {
                const p = Math.min((now - start) / dur, 1);
                const ease = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.round(ease * target) + suffix;
                if (p < 1) requestAnimationFrame(tick);
            }
            requestAnimationFrame(tick);
            counterObserver.unobserve(el);
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-target]').forEach(el => counterObserver.observe(el));


    /* ─── 5. CARD 3D TILT ─── */
    document.querySelectorAll('.cap-card, .diff-card, .bento-item').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const dx = (e.clientX - rect.left - rect.width / 2) / (rect.width / 2);
            const dy = (e.clientY - rect.top - rect.height / 2) / (rect.height / 2);
            card.style.transform = `perspective(800px) rotateY(${dx * 5}deg) rotateX(${-dy * 4}deg) translateY(-5px)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });


    /* ─── 6. MOUSE SPOTLIGHT on hero left ─── */
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.addEventListener('mousemove', e => {
            const rect = heroSection.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width * 100).toFixed(1);
            const y = ((e.clientY - rect.top) / rect.height * 100).toFixed(1);
            heroSection.style.setProperty('--mx', `${x}%`);
            heroSection.style.setProperty('--my', `${y}%`);
        });
    }


    /* ─── 7. GALLERY HEADING INTERACTION HANDSHAKE ─── */
    const galleryFrame = document.getElementById('gallery-heading-frame');
    if (galleryFrame) {
        let inside = false;

        const leave = () => {
            if (!inside) return;
            inside = false;
            try {
                galleryFrame.contentWindow?.postMessage({ threeuiRuntime: { hover: 0 } }, '*');
            } catch (e) {}
        };

        const onMessage = (event) => {
            if (event.source === galleryFrame.contentWindow && event.data?.threeuiPointerOver) {
                inside = true;
            }
        };

        const onPointerMove = (event) => {
            if (!inside) return;
            const bounds = galleryFrame.getBoundingClientRect();
            const outside = event.clientX < bounds.left || event.clientX > bounds.right
                || event.clientY < bounds.top || event.clientY > bounds.bottom;
            if (outside) leave();
        };

        window.addEventListener('message', onMessage);
        window.addEventListener('pointermove', onPointerMove, true);
        galleryFrame.addEventListener('pointerleave', leave);
        document.addEventListener('mouseleave', leave);
        window.addEventListener('blur', leave);

        galleryFrame.addEventListener('load', () => {
            galleryFrame.classList.add('is-ready');
            try {
                galleryFrame.contentWindow?.postMessage({
                    threeuiRuntime: {
                        font: '"Helvetica Neue",Helvetica,"Inter",Arial,system-ui,sans-serif',
                        weight: '400',
                        headlineSize: 1.15,
                        headline: ['WHAT WE', 'BUILD']
                    }
                }, '*');
            } catch (e) {}
        });

        if (galleryFrame.contentDocument?.readyState === 'complete') {
            galleryFrame.classList.add('is-ready');
        }
    }

});
