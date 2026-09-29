<?php
$title = "RiTiVERSE | Build once. Change anything.";
ob_start();
?>

<!-- ══════════════════════════════════════════
     HERO — Text left, Infinite scroll columns right
══════════════════════════════════════════ -->
<section class="hero-section" id="home">

    <!-- LEFT: Copy -->
    <div class="hero-left">
        <span class="eyebrow">⚡ Admin-powered websites &amp; apps</span>
        <h1><?= $hero_heading ?></h1>
        <p class="hero-sub"><?= htmlspecialchars($hero_subheading) ?></p>
        <div class="hero-ctas">
            <a href="#admin-panel" class="btn btn-primary">See the Admin Panel</a>
            <a href="#solutions"   class="btn btn-secondary">Our Services →</a>
        </div>
    </div>

    <!-- RIGHT: Dual-column infinite auto-scroll (Webild-style) -->
    <div class="hero-right">
        <div class="scroll-stage">

            <!-- Column 1 — JS scrolls UP -->
            <div class="scroll-col">
                <div class="scroll-col-inner" data-dir="up">

                    <div class="work-card">
                        <div class="work-card-label">
                            <span class="work-tag">E-Commerce</span>
                            <h4>Fashion Store</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="mini-bar accent" style="height:8px;margin-bottom:7px;"></div>
                                    <div class="mini-bar" style="height:32px;margin-bottom:5px;"></div>
                                    <div style="display:flex;gap:5px;">
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card work-card--b">
                        <div class="work-card-label">
                            <span class="work-tag">Admin Panel</span>
                            <h4>Restaurant Chain</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div class="mini-bar accent"></div>
                                    <div class="mini-bar short"></div>
                                    <div class="mini-bar tall"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card work-card--c">
                        <div class="work-card-label">
                            <span class="work-tag">ERP System</span>
                            <h4>Wholesale Distributor</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-terminal">
                                <div class="mini-term-line" style="color:#10B981;">▶ INVENTORY SYNC ✓</div>
                                <div class="mini-term-line" style="color:#FD6D00;">● Orders: 1,284</div>
                                <div class="mini-term-line" style="color:#8C8476;">● Revenue: ₹48.2L</div>
                                <div class="mini-term-line" style="color:#10B981;">▶ REPORT READY ✓</div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card">
                        <div class="work-card-label">
                            <span class="work-tag">Booking System</span>
                            <h4>Clinic Management</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="mini-bar" style="height:9px;margin-bottom:7px;background:rgba(253,109,0,0.35);"></div>
                                    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:3px;">
                                        <div style="height:12px;background:rgba(253,109,0,0.5);border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                        <div style="height:12px;background:rgba(253,109,0,0.5);border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                        <div style="height:12px;background:#E5DFD4;border-radius:2px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card work-card--d">
                        <div class="work-card-label">
                            <span class="work-tag">SaaS Platform</span>
                            <h4>HR Management</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar" style="background:rgba(253,109,0,0.08);border-color:rgba(253,109,0,0.1);"></div>
                                <div class="mini-content">
                                    <div class="mini-bar" style="background:rgba(253,109,0,0.35);"></div>
                                    <div class="mini-bar short" style="background:rgba(253,109,0,0.2);"></div>
                                    <div class="mini-bar tall" style="background:rgba(253,109,0,0.1);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicates for seamless loop -->
                    <div class="work-card">
                        <div class="work-card-label"><span class="work-tag">E-Commerce</span><h4>Fashion Store</h4></div>
                        <div class="work-card-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="mini-bar accent" style="height:8px;margin-bottom:7px;"></div>
                                    <div class="mini-bar" style="height:32px;margin-bottom:5px;"></div>
                                    <div style="display:flex;gap:5px;">
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                        <div class="mini-bar" style="flex:1;height:42px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="work-card work-card--b">
                        <div class="work-card-label"><span class="work-tag">Admin Panel</span><h4>Restaurant Chain</h4></div>
                        <div class="work-card-visual"><div class="mini-dash"><div class="mini-sidebar"></div><div class="mini-content"><div class="mini-bar accent"></div><div class="mini-bar short"></div><div class="mini-bar tall"></div></div></div></div>
                    </div>
                    <div class="work-card work-card--c">
                        <div class="work-card-label"><span class="work-tag">ERP System</span><h4>Wholesale Distributor</h4></div>
                        <div class="work-card-visual"><div class="mini-terminal"><div class="mini-term-line" style="color:#10B981;">▶ INVENTORY SYNC ✓</div><div class="mini-term-line" style="color:#FD6D00;">● Orders: 1,284</div><div class="mini-term-line" style="color:#8C8476;">● Revenue: ₹48.2L</div><div class="mini-term-line" style="color:#10B981;">▶ REPORT READY ✓</div></div></div>
                    </div>
                    <div class="work-card"><div class="work-card-label"><span class="work-tag">Booking System</span><h4>Clinic Management</h4></div><div class="work-card-visual"><div class="mini-browser"><div class="mini-browser-bar"><span></span><span></span><span></span></div><div class="mini-screen"><div class="mini-bar" style="height:9px;margin-bottom:7px;background:rgba(253,109,0,0.35);"></div><div style="display:grid;grid-template-columns:repeat(4,1fr);gap:3px;"><div style="height:12px;background:rgba(253,109,0,0.5);border-radius:2px;"></div><div style="height:12px;background:#E5DFD4;border-radius:2px;"></div><div style="height:12px;background:#E5DFD4;border-radius:2px;"></div><div style="height:12px;background:#E5DFD4;border-radius:2px;"></div></div></div></div></div></div>
                    <div class="work-card work-card--d"><div class="work-card-label"><span class="work-tag">SaaS Platform</span><h4>HR Management</h4></div><div class="work-card-visual"><div class="mini-dash"><div class="mini-sidebar" style="background:rgba(253,109,0,0.08);"></div><div class="mini-content"><div class="mini-bar" style="background:rgba(253,109,0,0.35);"></div><div class="mini-bar short"></div><div class="mini-bar tall"></div></div></div></div></div>

                </div>
            </div>

            <!-- Column 2 — JS scrolls DOWN -->
            <div class="scroll-col">
                <div class="scroll-col-inner" data-dir="down">

                    <div class="work-card work-card--b">
                        <div class="work-card-label">
                            <span class="work-tag">CRM System</span>
                            <h4>Real Estate CRM</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-crm">
                                <div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(253,109,0,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-warm">Warm</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(99,102,241,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-cold">Cold</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card">
                        <div class="work-card-label">
                            <span class="work-tag">Mobile App</span>
                            <h4>Delivery Tracker</h4>
                        </div>
                        <div class="work-card-visual" style="display:flex;justify-content:center;padding:0.5rem;">
                            <div class="mini-mobile">
                                <div class="mini-mobile-notch"></div>
                                <div class="mini-mobile-screen">
                                    <div style="background:rgba(16,185,129,0.12);border-radius:4px;padding:4px;margin-bottom:4px;">
                                        <div style="font-size:0.52rem;color:#10B981;font-weight:700;">● On the way</div>
                                        <div style="font-size:0.48rem;color:#6E6659;">ETA: 12 min</div>
                                    </div>
                                    <div style="height:26px;background:#E5DFD4;border-radius:3px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card work-card--c">
                        <div class="work-card-label">
                            <span class="work-tag">Inventory</span>
                            <h4>Retail Chain POS</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-pos">
                                <div class="mini-pos-row"><span>Product A</span><span>₹299</span></div>
                                <div class="mini-pos-row"><span>Product B</span><span>₹149</span></div>
                                <div class="mini-pos-row"><span>Product C</span><span>₹599</span></div>
                                <div class="mini-pos-total">Total: ₹1,047</div>
                                <div class="mini-pos-btn">Confirm Sale</div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card work-card--d">
                        <div class="work-card-label">
                            <span class="work-tag">Landing Page</span>
                            <h4>SaaS Startup</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="mini-bar" style="background:rgba(253,109,0,0.5);height:28px;margin-bottom:6px;border-radius:4px;"></div>
                                    <div class="mini-bar" style="background:#E5DFD4;height:12px;margin-bottom:5px;width:70%;border-radius:2px;"></div>
                                    <div class="mini-bar" style="background:#FD6D00;height:16px;border-radius:20px;width:38%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="work-card">
                        <div class="work-card-label">
                            <span class="work-tag">Analytics</span>
                            <h4>Business Dashboard</h4>
                        </div>
                        <div class="work-card-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div style="display:flex;gap:4px;margin-bottom:5px;">
                                        <div style="flex:1;height:20px;background:rgba(253,109,0,0.18);border-radius:3px;"></div>
                                        <div style="flex:1;height:20px;background:#E5DFD4;border-radius:3px;"></div>
                                        <div style="flex:1;height:20px;background:#E5DFD4;border-radius:3px;"></div>
                                    </div>
                                    <div style="height:38px;background:linear-gradient(to top,rgba(253,109,0,0.15),rgba(253,109,0,0.02));border-radius:3px;border-bottom:2px solid #FD6D00;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicates for seamless loop -->
                    <div class="work-card work-card--b"><div class="work-card-label"><span class="work-tag">CRM System</span><h4>Real Estate CRM</h4></div><div class="work-card-visual"><div class="mini-crm"><div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div><div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(253,109,0,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-warm">Warm</span></div><div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(99,102,241,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-cold">Cold</span></div><div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div></div></div></div>
                    <div class="work-card"><div class="work-card-label"><span class="work-tag">Mobile App</span><h4>Delivery Tracker</h4></div><div class="work-card-visual" style="display:flex;justify-content:center;padding:0.5rem;"><div class="mini-mobile"><div class="mini-mobile-notch"></div><div class="mini-mobile-screen"><div style="background:rgba(16,185,129,0.12);border-radius:4px;padding:4px;margin-bottom:4px;"><div style="font-size:0.52rem;color:#10B981;font-weight:700;">● On the way</div><div style="font-size:0.48rem;color:#6E6659;">ETA: 12 min</div></div><div style="height:26px;background:#E5DFD4;border-radius:3px;"></div></div></div></div></div>
                    <div class="work-card work-card--c"><div class="work-card-label"><span class="work-tag">Inventory</span><h4>Retail Chain POS</h4></div><div class="work-card-visual"><div class="mini-pos"><div class="mini-pos-row"><span>Product A</span><span>₹299</span></div><div class="mini-pos-row"><span>Product B</span><span>₹149</span></div><div class="mini-pos-row"><span>Product C</span><span>₹599</span></div><div class="mini-pos-total">Total: ₹1,047</div><div class="mini-pos-btn">Confirm Sale</div></div></div></div>
                    <div class="work-card work-card--d"><div class="work-card-label"><span class="work-tag">Landing Page</span><h4>SaaS Startup</h4></div><div class="work-card-visual"><div class="mini-browser"><div class="mini-browser-bar"><span></span><span></span><span></span></div><div class="mini-screen"><div class="mini-bar" style="background:rgba(253,109,0,0.5);height:28px;margin-bottom:6px;border-radius:4px;"></div><div class="mini-bar" style="background:#E5DFD4;height:12px;margin-bottom:5px;width:70%;"></div><div class="mini-bar" style="background:#FD6D00;height:16px;border-radius:20px;width:38%;"></div></div></div></div></div>
                    <div class="work-card"><div class="work-card-label"><span class="work-tag">Analytics</span><h4>Business Dashboard</h4></div><div class="work-card-visual"><div class="mini-dash"><div class="mini-sidebar"></div><div class="mini-content"><div style="display:flex;gap:4px;margin-bottom:5px;"><div style="flex:1;height:20px;background:rgba(253,109,0,0.18);border-radius:3px;"></div><div style="flex:1;height:20px;background:#E5DFD4;border-radius:3px;"></div><div style="flex:1;height:20px;background:#E5DFD4;border-radius:3px;"></div></div><div style="height:38px;background:linear-gradient(to top,rgba(253,109,0,0.15),rgba(253,109,0,0.02));border-radius:3px;border-bottom:2px solid #FD6D00;"></div></div></div></div></div>

                </div>
            </div>

        </div><!-- /.scroll-stage -->
    </div><!-- /.hero-right -->

</section>

<!-- Toast notification (global) -->
<div class="float-card" id="toast-notification">✓ Changes published live</div>

<!-- ══════════════════════════════════════════
     MARQUEE
══════════════════════════════════════════ -->
<section class="marquee-section">
    <div class="marquee-content">
        <span>Edit anything</span>&nbsp;•&nbsp;
        <span>Roles &amp; permissions</span>&nbsp;•&nbsp;
        <span>Live preview</span>&nbsp;•&nbsp;
        <span>Activity log</span>&nbsp;•&nbsp;
        <span>Reports &amp; exports</span>&nbsp;•&nbsp;
        <span>One control layer</span>&nbsp;•&nbsp;
        <span>Custom workflows</span>&nbsp;•&nbsp;
        <span>No-code editing</span>&nbsp;•&nbsp;
        <span>Edit anything</span>&nbsp;•&nbsp;
        <span>Roles &amp; permissions</span>&nbsp;•&nbsp;
        <span>Live preview</span>&nbsp;•&nbsp;
        <span>Activity log</span>&nbsp;•&nbsp;
        <span>Reports &amp; exports</span>&nbsp;•&nbsp;
        <span>One control layer</span>&nbsp;•&nbsp;
        <span>Custom workflows</span>&nbsp;•&nbsp;
        <span>No-code editing</span>&nbsp;•&nbsp;
    </div>
</section>

<!-- ══════════════════════════════════════════
     STATS ROW
══════════════════════════════════════════ -->
<div class="stats-row reveal stagger">
    <div class="stat-item">
        <div class="stat-number" data-target="150" data-suffix="+">150+</div>
        <div class="stat-label">Projects delivered</div>
    </div>
    <div class="stat-item">
        <div class="stat-number" data-target="98" data-suffix="%">98%</div>
        <div class="stat-label">Client satisfaction</div>
    </div>
    <div class="stat-item">
        <div class="stat-number" data-target="5" data-suffix="x">5x</div>
        <div class="stat-label">Faster content updates</div>
    </div>
    <div class="stat-item">
        <div class="stat-number" data-target="24" data-suffix="/7">24/7</div>
        <div class="stat-label">Admin panel uptime</div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     ADMIN DEEP DIVE
══════════════════════════════════════════ -->
<section class="admin-curved-showcase" id="admin-panel">
    <div class="section-header reveal">
        <span class="curved-section-pill">⚡ THE ADMIN ADVANTAGE</span>
        <h2>Everything on your site,<br><span class="gradient-text">editable by you.</span></h2>
        <p>Change content, prices, users, menus and business data from one control panel — without depending on a developer.</p>
    </div>

    <!-- 3D Curved Carousel Wrapper -->
    <div class="curved-carousel-wrapper" id="curvedCarousel">
        <div class="curved-edge-gradient left"></div>
        <div class="curved-edge-gradient right"></div>

        <button class="carousel-nav-btn prev" id="carouselPrev" aria-label="Previous card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        </button>

        <div class="curved-carousel-stage" id="curvedStage">
            <div class="curved-carousel-track" id="curvedTrack">

                <!-- SET 1 -->
                <!-- Card 1: Edit Anything -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">✏️</div>
                                <span class="card-live-badge"><span class="pulse-dot"></span>LIVE CMS</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-cms">
                                    <div class="preview-row">
                                        <span class="p-label">Headline:</span>
                                        <div class="p-input">Summer Sale · 30% Off<span class="blink-cursor">|</span></div>
                                    </div>
                                    <div class="preview-row split">
                                        <div>
                                            <span class="p-label">Price:</span>
                                            <div class="p-tag strike">₹4,999</div>
                                        </div>
                                        <div>
                                            <span class="p-label">Live Price:</span>
                                            <div class="p-tag active">₹3,499</div>
                                        </div>
                                    </div>
                                    <div class="p-action-bar">
                                        <span class="p-status">Status: <b>Published</b></span>
                                        <button class="p-btn-mini" type="button">Update ⚡</button>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Edit anything</h3>
                                <p>Pages, prices, banners, menus, products and content — from a clean admin dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">CONTENT &amp; MEDIA CMS</div>
                </div>

                <!-- Card 2: Roles & Permissions -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">🔐</div>
                                <span class="card-live-badge role-badge">ACCESS MATRIX</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-roles">
                                    <div class="role-user-item">
                                        <div class="role-avatar admin">DK</div>
                                        <div class="role-info"><span class="r-name">Admin (You)</span><span class="r-sub">Full access</span></div>
                                        <span class="role-pill p-owner">Owner</span>
                                    </div>
                                    <div class="role-user-item">
                                        <div class="role-avatar editor">SA</div>
                                        <div class="role-info"><span class="r-name">Sarah A.</span><span class="r-sub">Content only</span></div>
                                        <span class="role-pill p-editor">Editor</span>
                                    </div>
                                    <div class="permissions-checklist">
                                        <div class="perm-item checked"><span>✓</span> Edit pages &amp; prices</div>
                                        <div class="perm-item checked"><span>✓</span> Publish banners</div>
                                        <div class="perm-item locked"><span>🔒</span> Delete database records</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Roles &amp; permissions</h3>
                                <p>Control who can view and change what — from manager to editor to viewer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">ROLE-BASED ACCESS</div>
                </div>

                <!-- Card 3: Live Preview -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">👁</div>
                                <span class="card-live-badge live-mode">SYNC 12ms</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-viewport">
                                    <div class="viewport-header">
                                        <div class="view-dots"><span></span><span></span><span></span></div>
                                        <div class="device-switch">
                                            <span class="dev-item active">Desktop</span>
                                            <span class="dev-item">Mobile</span>
                                        </div>
                                    </div>
                                    <div class="viewport-canvas">
                                        <div class="canvas-bar hero"></div>
                                        <div class="canvas-grid-mock">
                                            <div class="c-tile accent"></div>
                                            <div class="c-tile"></div>
                                        </div>
                                        <div class="canvas-badge">Preview Mode: Active</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Live preview</h3>
                                <p>See exactly how your changes look before they go live on the site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">REAL-TIME PREVIEW</div>
                </div>

                <!-- Card 4: Activity Log -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">📋</div>
                                <span class="card-live-badge audit-badge">AUDIT TRAIL</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-log">
                                    <div class="log-entry">
                                        <span class="log-time">14:32</span>
                                        <div class="log-desc"><b>Banner updated</b> · "Diwali Offer"</div>
                                        <button class="log-undo" type="button">Undo</button>
                                    </div>
                                    <div class="log-entry">
                                        <span class="log-time">14:15</span>
                                        <div class="log-desc"><b>Price changed</b> · ₹3,499</div>
                                        <button class="log-undo" type="button">Undo</button>
                                    </div>
                                    <div class="log-entry">
                                        <span class="log-time">13:50</span>
                                        <div class="log-desc"><b>Staff role changed</b> · Editor</div>
                                        <span class="log-saved">Saved ✓</span>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Activity log</h3>
                                <p>Track every change and identify who changed what and when.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">AUDIT &amp; UNDO LOGS</div>
                </div>

                <!-- Card 5: Reports & Exports -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">📊</div>
                                <span class="card-live-badge stat-badge">+34.8% GROWTH</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-reports">
                                    <div class="report-stats">
                                        <div><span class="r-label">Monthly Volume</span><div class="r-val">₹14.8L</div></div>
                                        <div class="r-tag">+28.4%</div>
                                    </div>
                                    <div class="report-bars">
                                        <div class="bar" style="height:35%"></div>
                                        <div class="bar" style="height:55%"></div>
                                        <div class="bar" style="height:45%"></div>
                                        <div class="bar" style="height:75%"></div>
                                        <div class="bar accent" style="height:95%"></div>
                                    </div>
                                    <div class="export-pills">
                                        <span class="exp-btn">.CSV ↓</span>
                                        <span class="exp-btn">.PDF ↓</span>
                                        <span class="exp-btn">.XLSX ↓</span>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Reports &amp; exports</h3>
                                <p>Keep business data accessible and exportable in formats you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">METRICS &amp; EXPORTS</div>
                </div>

                <!-- Card 6: One Control Layer -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">🔗</div>
                                <span class="card-live-badge hub-badge">ALL-IN-ONE HUB</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-hub">
                                    <div class="hub-center">
                                        <span class="flame-ico">🔥</span>
                                        <span class="hub-title">RiTiVERSE CORE</span>
                                    </div>
                                    <div class="hub-connectors">
                                        <div class="hub-node"><span class="node-dot"></span>Website</div>
                                        <div class="hub-node"><span class="node-dot"></span>Mobile App</div>
                                        <div class="hub-node"><span class="node-dot"></span>CRM System</div>
                                        <div class="hub-node"><span class="node-dot"></span>ERP Operations</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>One control layer</h3>
                                <p>Manage your website, app, CRM and ERP from connected systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">UNIFIED ARCHITECTURE</div>
                </div>

                <!-- SET 2 (Duplicate for Seamless Infinite Wrapping) -->
                <!-- Card 1 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">✏️</div>
                                <span class="card-live-badge"><span class="pulse-dot"></span>LIVE CMS</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-cms">
                                    <div class="preview-row">
                                        <span class="p-label">Headline:</span>
                                        <div class="p-input">Summer Sale · 30% Off<span class="blink-cursor">|</span></div>
                                    </div>
                                    <div class="preview-row split">
                                        <div>
                                            <span class="p-label">Price:</span>
                                            <div class="p-tag strike">₹4,999</div>
                                        </div>
                                        <div>
                                            <span class="p-label">Live Price:</span>
                                            <div class="p-tag active">₹3,499</div>
                                        </div>
                                    </div>
                                    <div class="p-action-bar">
                                        <span class="p-status">Status: <b>Published</b></span>
                                        <button class="p-btn-mini" type="button">Update ⚡</button>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Edit anything</h3>
                                <p>Pages, prices, banners, menus, products and content — from a clean admin dashboard.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">CONTENT &amp; MEDIA CMS</div>
                </div>

                <!-- Card 2 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">🔐</div>
                                <span class="card-live-badge role-badge">ACCESS MATRIX</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-roles">
                                    <div class="role-user-item">
                                        <div class="role-avatar admin">DK</div>
                                        <div class="role-info"><span class="r-name">Admin (You)</span><span class="r-sub">Full access</span></div>
                                        <span class="role-pill p-owner">Owner</span>
                                    </div>
                                    <div class="role-user-item">
                                        <div class="role-avatar editor">SA</div>
                                        <div class="role-info"><span class="r-name">Sarah A.</span><span class="r-sub">Content only</span></div>
                                        <span class="role-pill p-editor">Editor</span>
                                    </div>
                                    <div class="permissions-checklist">
                                        <div class="perm-item checked"><span>✓</span> Edit pages &amp; prices</div>
                                        <div class="perm-item checked"><span>✓</span> Publish banners</div>
                                        <div class="perm-item locked"><span>🔒</span> Delete database records</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Roles &amp; permissions</h3>
                                <p>Control who can view and change what — from manager to editor to viewer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">ROLE-BASED ACCESS</div>
                </div>

                <!-- Card 3 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">👁</div>
                                <span class="card-live-badge live-mode">SYNC 12ms</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-viewport">
                                    <div class="viewport-header">
                                        <div class="view-dots"><span></span><span></span><span></span></div>
                                        <div class="device-switch">
                                            <span class="dev-item active">Desktop</span>
                                            <span class="dev-item">Mobile</span>
                                        </div>
                                    </div>
                                    <div class="viewport-canvas">
                                        <div class="canvas-bar hero"></div>
                                        <div class="canvas-grid-mock">
                                            <div class="c-tile accent"></div>
                                            <div class="c-tile"></div>
                                        </div>
                                        <div class="canvas-badge">Preview Mode: Active</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Live preview</h3>
                                <p>See exactly how your changes look before they go live on the site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">REAL-TIME PREVIEW</div>
                </div>

                <!-- Card 4 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">📋</div>
                                <span class="card-live-badge audit-badge">AUDIT TRAIL</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-log">
                                    <div class="log-entry">
                                        <span class="log-time">14:32</span>
                                        <div class="log-desc"><b>Banner updated</b> · "Diwali Offer"</div>
                                        <button class="log-undo" type="button">Undo</button>
                                    </div>
                                    <div class="log-entry">
                                        <span class="log-time">14:15</span>
                                        <div class="log-desc"><b>Price changed</b> · ₹3,499</div>
                                        <button class="log-undo" type="button">Undo</button>
                                    </div>
                                    <div class="log-entry">
                                        <span class="log-time">13:50</span>
                                        <div class="log-desc"><b>Staff role changed</b> · Editor</div>
                                        <span class="log-saved">Saved ✓</span>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Activity log</h3>
                                <p>Track every change and identify who changed what and when.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">AUDIT &amp; UNDO LOGS</div>
                </div>

                <!-- Card 5 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">📊</div>
                                <span class="card-live-badge stat-badge">+34.8% GROWTH</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-reports">
                                    <div class="report-stats">
                                        <div><span class="r-label">Monthly Volume</span><div class="r-val">₹14.8L</div></div>
                                        <div class="r-tag">+28.4%</div>
                                    </div>
                                    <div class="report-bars">
                                        <div class="bar" style="height:35%"></div>
                                        <div class="bar" style="height:55%"></div>
                                        <div class="bar" style="height:45%"></div>
                                        <div class="bar" style="height:75%"></div>
                                        <div class="bar accent" style="height:95%"></div>
                                    </div>
                                    <div class="export-pills">
                                        <span class="exp-btn">.CSV ↓</span>
                                        <span class="exp-btn">.PDF ↓</span>
                                        <span class="exp-btn">.XLSX ↓</span>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>Reports &amp; exports</h3>
                                <p>Keep business data accessible and exportable in formats you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">METRICS &amp; EXPORTS</div>
                </div>

                <!-- Card 6 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-icon-pill">🔗</div>
                                <span class="card-live-badge hub-badge">ALL-IN-ONE HUB</span>
                            </div>
                            <div class="card-micro-preview">
                                <div class="preview-hub">
                                    <div class="hub-center">
                                        <span class="flame-ico">🔥</span>
                                        <span class="hub-title">RiTiVERSE CORE</span>
                                    </div>
                                    <div class="hub-connectors">
                                        <div class="hub-node"><span class="node-dot"></span>Website</div>
                                        <div class="hub-node"><span class="node-dot"></span>Mobile App</div>
                                        <div class="hub-node"><span class="node-dot"></span>CRM System</div>
                                        <div class="hub-node"><span class="node-dot"></span>ERP Operations</div>
                                    </div>
                                </div>
                            </div>
                            <div class="curved-card-body">
                                <h3>One control layer</h3>
                                <p>Manage your website, app, CRM and ERP from connected systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">UNIFIED ARCHITECTURE</div>
                </div>

            </div>
        </div>

        <button class="carousel-nav-btn next" id="carouselNext" aria-label="Next card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </button>
    </div>
</section>

<!-- ══════════════════════════════════════════
     WHY RiTiVERSE
══════════════════════════════════════════ -->
<section class="differentiator-section container" id="solutions">
    <div class="section-header reveal">
        <h2>Why businesses choose <span class="gradient-text">RiTiVERSE</span></h2>
        <p>Not a template. Not a generic CMS. A system built around your exact business workflow.</p>
    </div>
    <div class="diff-grid stagger reveal">
        <div class="diff-card"><h3>Fit over features</h3><p>Software designed around the client's workflow instead of forcing the business into a generic template.</p></div>
        <div class="diff-card"><h3>Business-controlled</h3><p>The client can manage content and business information from the admin panel — no developer needed.</p></div>
        <div class="diff-card"><h3>Connected systems</h3><p>Website, CRM, ERP and business operations can share connected data seamlessly.</p></div>
        <div class="diff-card"><h3>Built for evolution</h3><p>The system continues to evolve after launch — growing as your business grows.</p></div>
        <div class="diff-card"><h3>Full ownership</h3><p>Your data, your server, your code. No lock-in to third-party platforms.</p></div>
        <div class="diff-card"><h3>Ongoing support</h3><p>The relationship doesn't end at launch — we stay with you through every phase.</p></div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     WHAT WE BUILD (3D ROTATING SERVICES)
══════════════════════════════════════════ -->
<section class="services-bento container" id="work">
    <div class="shader-frame reveal" id="gallery-heading-host">
        <canvas id="gallery-heading-canvas" class="gallery-heading-canvas" aria-label="What we build — interactive 3D canvas animation"></canvas>
    </div>
</section>

<!-- ══════════════════════════════════════════
     PROCESS
══════════════════════════════════════════ -->
<section class="process-section container" id="process">
    <div class="section-header reveal">
        <h2>How we <span class="gradient-text">build</span></h2>
        <p>The relationship does not end when the website goes live.</p>
    </div>
    <div class="process-timeline stagger reveal">
        <div class="process-step"><span>01</span>Understand</div>
        <div class="process-step"><span>02</span>Define</div>
        <div class="process-step"><span>03</span>Design</div>
        <div class="process-step"><span>04</span>Build</div>
        <div class="process-step"><span>05</span>Test</div>
        <div class="process-step"><span>06</span>Go Live</div>
        <div class="process-step"><span>07</span>Evolve</div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FINAL CTA
══════════════════════════════════════════ -->
<section class="final-cta container" id="contact">
    <div class="reveal">
        <h2>Your business.<br>Your software.<br><span class="gradient-text">Your control.</span></h2>
        <p>Have a business process that should work better? Let's design the system around it.</p>
        <div class="hero-ctas">
            <a href="#admin-panel" class="btn btn-primary">See the Admin Panel</a>
            <a href="#contact"     class="btn btn-secondary">Book a Discovery Call</a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
