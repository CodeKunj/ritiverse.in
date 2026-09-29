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

    <!-- RIGHT: Dual-column infinite auto-scroll (Vertical UI Anatomy Cards) -->
    <div class="hero-right">
        <div class="scroll-stage">

            <!-- Column 1 — JS scrolls UP -->
            <div class="scroll-col">
                <div class="scroll-col-inner" data-dir="up">

                    <!-- Card 1: Fashion Store -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">E-Commerce</span>
                            <h4>Fashion Store</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar accent" style="height:10px;margin-bottom:8px;border-radius:4px;"></div>
                                    <div class="anatomy-grid-2x2">
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Restaurant Chain -->
                    <div class="anatomy-card anatomy-card--b">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Admin Panel</span>
                            <h4>Restaurant Chain</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div class="anatomy-bar accent" style="height:8px;width:75%;margin-bottom:6px;"></div>
                                    <div class="dash-stat-row">
                                        <div class="stat-pill"></div>
                                        <div class="stat-pill"></div>
                                    </div>
                                    <div class="table-skeleton">
                                        <div class="table-row"><span></span><span></span></div>
                                        <div class="table-row"><span></span><span></span></div>
                                        <div class="table-row"><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Wholesale Distributor -->
                    <div class="anatomy-card anatomy-card--c">
                        <div class="anatomy-card-label">
                            <span class="work-tag">ERP System</span>
                            <h4>Wholesale Distributor</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-terminal">
                                <div class="mini-term-line" style="color:#10B981;">▶ INVENTORY SYNC ✓</div>
                                <div class="mini-term-line" style="color:#FD6D00;">● Orders: 1,284</div>
                                <div class="mini-term-line" style="color:#C4BCAF;">● Ledger: ₹48.2L</div>
                                <div class="mini-term-line" style="color:#10B981;">▶ REPORT READY ✓</div>
                                <div class="mini-term-line" style="color:#8C8476;">● 48,200 SKUs MATCH</div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Clinic Management -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Booking System</span>
                            <h4>Clinic Management</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar" style="height:9px;margin-bottom:8px;background:rgba(253,109,0,0.35);border-radius:3px;"></div>
                                    <div class="calendar-grid">
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: HR Management -->
                    <div class="anatomy-card anatomy-card--d">
                        <div class="anatomy-card-label">
                            <span class="work-tag">SaaS Platform</span>
                            <h4>HR Management</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar" style="background:rgba(253,109,0,0.08);border-color:rgba(253,109,0,0.12);"></div>
                                <div class="mini-content">
                                    <div class="anatomy-bar" style="background:rgba(253,109,0,0.35);height:8px;width:70%;"></div>
                                    <div class="anatomy-bar short" style="background:rgba(253,109,0,0.18);height:7px;"></div>
                                    <div class="chart-bars-skeleton">
                                        <span style="height:40%;"></span>
                                        <span style="height:75%;"></span>
                                        <span style="height:55%;"></span>
                                        <span style="height:90%;background:#FD6D00;"></span>
                                        <span style="height:65%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicates for seamless loop -->
                    <!-- Card 1 Duplicate -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">E-Commerce</span>
                            <h4>Fashion Store</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar accent" style="height:10px;margin-bottom:8px;border-radius:4px;"></div>
                                    <div class="anatomy-grid-2x2">
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                        <div class="anatomy-prod-cell"><div class="prod-thumb"></div><div class="anatomy-bar short"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 Duplicate -->
                    <div class="anatomy-card anatomy-card--b">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Admin Panel</span>
                            <h4>Restaurant Chain</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div class="anatomy-bar accent" style="height:8px;width:75%;margin-bottom:6px;"></div>
                                    <div class="dash-stat-row">
                                        <div class="stat-pill"></div>
                                        <div class="stat-pill"></div>
                                    </div>
                                    <div class="table-skeleton">
                                        <div class="table-row"><span></span><span></span></div>
                                        <div class="table-row"><span></span><span></span></div>
                                        <div class="table-row"><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 Duplicate -->
                    <div class="anatomy-card anatomy-card--c">
                        <div class="anatomy-card-label">
                            <span class="work-tag">ERP System</span>
                            <h4>Wholesale Distributor</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-terminal">
                                <div class="mini-term-line" style="color:#10B981;">▶ INVENTORY SYNC ✓</div>
                                <div class="mini-term-line" style="color:#FD6D00;">● Orders: 1,284</div>
                                <div class="mini-term-line" style="color:#C4BCAF;">● Ledger: ₹48.2L</div>
                                <div class="mini-term-line" style="color:#10B981;">▶ REPORT READY ✓</div>
                                <div class="mini-term-line" style="color:#8C8476;">● 48,200 SKUs MATCH</div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 Duplicate -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Booking System</span>
                            <h4>Clinic Management</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar" style="height:9px;margin-bottom:8px;background:rgba(253,109,0,0.35);border-radius:3px;"></div>
                                    <div class="calendar-grid">
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot active"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                        <div class="cal-slot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 Duplicate -->
                    <div class="anatomy-card anatomy-card--d">
                        <div class="anatomy-card-label">
                            <span class="work-tag">SaaS Platform</span>
                            <h4>HR Management</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar" style="background:rgba(253,109,0,0.08);border-color:rgba(253,109,0,0.12);"></div>
                                <div class="mini-content">
                                    <div class="anatomy-bar" style="background:rgba(253,109,0,0.35);height:8px;width:70%;"></div>
                                    <div class="anatomy-bar short" style="background:rgba(253,109,0,0.18);height:7px;"></div>
                                    <div class="chart-bars-skeleton">
                                        <span style="height:40%;"></span>
                                        <span style="height:75%;"></span>
                                        <span style="height:55%;"></span>
                                        <span style="height:90%;background:#FD6D00;"></span>
                                        <span style="height:65%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Column 2 — JS scrolls DOWN -->
            <div class="scroll-col">
                <div class="scroll-col-inner" data-dir="down">

                    <!-- Card 6: Real Estate CRM -->
                    <div class="anatomy-card anatomy-card--b">
                        <div class="anatomy-card-label">
                            <span class="work-tag">CRM System</span>
                            <h4>Real Estate CRM</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-crm">
                                <div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(253,109,0,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-warm">Warm</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(99,102,241,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-cold">Cold</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(16,185,129,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Won</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7: Delivery Tracker -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Mobile App</span>
                            <h4>Delivery Tracker</h4>
                        </div>
                        <div class="anatomy-visual" style="display:flex;justify-content:center;padding:0.4rem;">
                            <div class="mini-mobile">
                                <div class="mini-mobile-notch"></div>
                                <div class="mini-mobile-screen">
                                    <div style="background:rgba(16,185,129,0.14);border-radius:4px;padding:4px;margin-bottom:6px;">
                                        <div style="font-size:0.52rem;color:#059669;font-weight:700;">● On the way</div>
                                        <div style="font-size:0.48rem;color:#6E6659;">ETA: 12 min</div>
                                    </div>
                                    <div style="height:32px;background:#EDE6D8;border-radius:4px;margin-bottom:5px;"></div>
                                    <div style="height:12px;background:rgba(253,109,0,0.4);border-radius:3px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8: Retail Chain POS -->
                    <div class="anatomy-card anatomy-card--c">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Inventory</span>
                            <h4>Retail Chain POS</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-pos">
                                <div class="mini-pos-row"><span>Product A</span><span>₹299</span></div>
                                <div class="mini-pos-row"><span>Product B</span><span>₹149</span></div>
                                <div class="mini-pos-row"><span>Product C</span><span>₹599</span></div>
                                <div class="mini-pos-total">Total: ₹1,047</div>
                                <div class="mini-pos-btn">Confirm Sale</div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9: SaaS Startup -->
                    <div class="anatomy-card anatomy-card--d">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Landing Page</span>
                            <h4>SaaS Startup</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar accent" style="height:24px;margin-bottom:6px;border-radius:4px;"></div>
                                    <div class="anatomy-bar" style="background:#E5DFD4;height:9px;margin-bottom:5px;width:75%;"></div>
                                    <div class="anatomy-bar" style="background:#FD6D00;height:12px;border-radius:20px;width:40%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 10: Business Dashboard -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Analytics</span>
                            <h4>Business Dashboard</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div style="display:flex;gap:4px;margin-bottom:6px;">
                                        <div style="flex:1;height:18px;background:rgba(253,109,0,0.18);border-radius:3px;"></div>
                                        <div style="flex:1;height:18px;background:#EDE6D8;border-radius:3px;"></div>
                                    </div>
                                    <div style="height:44px;background:linear-gradient(to top,rgba(253,109,0,0.18),rgba(253,109,0,0.02));border-radius:3px;border-bottom:2px solid #FD6D00;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicates for seamless loop -->
                    <!-- Card 6 Duplicate -->
                    <div class="anatomy-card anatomy-card--b">
                        <div class="anatomy-card-label">
                            <span class="work-tag">CRM System</span>
                            <h4>Real Estate CRM</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-crm">
                                <div class="mini-crm-row"><div class="mini-avatar"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Hot</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(253,109,0,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-warm">Warm</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(99,102,241,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-cold">Cold</span></div>
                                <div class="mini-crm-row"><div class="mini-avatar" style="background:rgba(16,185,129,0.3);"></div><div class="mini-crm-info"><span></span><span></span></div><span class="mini-badge badge-hot">Won</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 7 Duplicate -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Mobile App</span>
                            <h4>Delivery Tracker</h4>
                        </div>
                        <div class="anatomy-visual" style="display:flex;justify-content:center;padding:0.4rem;">
                            <div class="mini-mobile">
                                <div class="mini-mobile-notch"></div>
                                <div class="mini-mobile-screen">
                                    <div style="background:rgba(16,185,129,0.14);border-radius:4px;padding:4px;margin-bottom:6px;">
                                        <div style="font-size:0.52rem;color:#059669;font-weight:700;">● On the way</div>
                                        <div style="font-size:0.48rem;color:#6E6659;">ETA: 12 min</div>
                                    </div>
                                    <div style="height:32px;background:#EDE6D8;border-radius:4px;margin-bottom:5px;"></div>
                                    <div style="height:12px;background:rgba(253,109,0,0.4);border-radius:3px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 8 Duplicate -->
                    <div class="anatomy-card anatomy-card--c">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Inventory</span>
                            <h4>Retail Chain POS</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-pos">
                                <div class="mini-pos-row"><span>Product A</span><span>₹299</span></div>
                                <div class="mini-pos-row"><span>Product B</span><span>₹149</span></div>
                                <div class="mini-pos-row"><span>Product C</span><span>₹599</span></div>
                                <div class="mini-pos-total">Total: ₹1,047</div>
                                <div class="mini-pos-btn">Confirm Sale</div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 9 Duplicate -->
                    <div class="anatomy-card anatomy-card--d">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Landing Page</span>
                            <h4>SaaS Startup</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-browser">
                                <div class="mini-browser-bar"><span></span><span></span><span></span></div>
                                <div class="mini-screen">
                                    <div class="anatomy-bar accent" style="height:24px;margin-bottom:6px;border-radius:4px;"></div>
                                    <div class="anatomy-bar" style="background:#E5DFD4;height:9px;margin-bottom:5px;width:75%;"></div>
                                    <div class="anatomy-bar" style="background:#FD6D00;height:12px;border-radius:20px;width:40%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 10 Duplicate -->
                    <div class="anatomy-card">
                        <div class="anatomy-card-label">
                            <span class="work-tag">Analytics</span>
                            <h4>Business Dashboard</h4>
                        </div>
                        <div class="anatomy-visual">
                            <div class="mini-dash">
                                <div class="mini-sidebar"></div>
                                <div class="mini-content">
                                    <div style="display:flex;gap:4px;margin-bottom:6px;">
                                        <div style="flex:1;height:18px;background:rgba(253,109,0,0.18);border-radius:3px;"></div>
                                        <div style="flex:1;height:18px;background:#EDE6D8;border-radius:3px;"></div>
                                    </div>
                                    <div style="height:44px;background:linear-gradient(to top,rgba(253,109,0,0.18),rgba(253,109,0,0.02));border-radius:3px;border-bottom:2px solid #FD6D00;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

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

                <!-- ══════════════════════════════════════════
                     SET 1 (Cards 1 to 6)
                ══════════════════════════════════════════ -->
                <!-- Card 1: Live Pricing & Catalog -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                    </div>
                                    <span class="tech-index">// SYS.01</span>
                                </div>
                                <span class="tech-badge live"><span class="hardware-led green"></span>AUTO-SYNC</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-catalog-engine">
                                    <div class="meta-row">
                                        <span class="sku-tag">SKU: RTV-8820 · SURAT</span>
                                        <span class="stock-pill">24 IN STOCK</span>
                                    </div>
                                    <div class="product-spec">
                                        <div class="item-title">Drop-Shoulder Heavy Tee</div>
                                        <div class="item-sub">Apparel · SS26 Drop</div>
                                    </div>
                                    <div class="pricing-matrix">
                                        <div class="price-col">
                                            <span class="m-label">MSRP</span>
                                            <span class="price-val strike">₹2,499</span>
                                        </div>
                                        <div class="price-col">
                                            <span class="m-label">LIVE PRICE</span>
                                            <span class="price-val active">₹1,799</span>
                                        </div>
                                        <span class="discount-chip">-28% FLASH</span>
                                    </div>
                                    <div class="sync-footer">
                                        <div class="toggle-control">
                                            <span class="mini-toggle active"></span>
                                            <span class="toggle-text">Storefront Sync: Active</span>
                                        </div>
                                        <span class="commit-time">Synced 2s ago</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Live Pricing &amp; Catalog</h3>
                                <p>Update inventory, adjust flash-sale discounts, and publish catalog items across web and app in seconds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 01 · REAL-TIME COMMERCE</div>
                </div>

                <!-- Card 2: Granular Access Matrix -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                    </div>
                                    <span class="tech-index">// PERM.02</span>
                                </div>
                                <span class="tech-badge security">RBAC MATRIX</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-access-matrix">
                                    <div class="user-row">
                                        <div class="u-avatar super">DK</div>
                                        <div class="u-meta">
                                            <span class="u-name">Dhrumil (Founder)</span>
                                            <span class="u-scope">Superadmin · Full Access</span>
                                        </div>
                                        <span class="role-chip super">OWNER</span>
                                    </div>
                                    <div class="user-row">
                                        <div class="u-avatar finance">RK</div>
                                        <div class="u-meta">
                                            <span class="u-name">Rajesh K. (Accounts)</span>
                                            <span class="u-scope">Finance &amp; GST Invoicing</span>
                                        </div>
                                        <span class="role-chip finance">FINANCE</span>
                                    </div>
                                    <div class="hairline-perms">
                                        <div class="perm-rule allow"><span>✓</span> Export GST &amp; P&amp;L Statements</div>
                                        <div class="perm-rule allow"><span>✓</span> Approve Vendor Disbursements</div>
                                        <div class="perm-rule deny"><span>✕</span> Delete Customer Master DB 🔒</div>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Granular Access Matrix</h3>
                                <p>Define exactly who can edit prices, view financial statements, or publish content — from managers to accountants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 02 · ENTERPRISE SECURITY</div>
                </div>

                <!-- Card 3: Side-by-Side Staging -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                                    </div>
                                    <span class="tech-index">// STAGE.03</span>
                                </div>
                                <span class="tech-badge staging"><span class="hardware-led orange"></span>8ms SYNC</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-staging-env">
                                    <div class="viewport-selector-bar">
                                        <span class="v-tab">Desktop 1440</span>
                                        <span class="v-tab active">iPhone 15 Pro</span>
                                    </div>
                                    <div class="rendered-mini-phone">
                                        <div class="phone-notch"></div>
                                        <div class="phone-screen-content">
                                            <span class="phone-eyebrow">RITIVERSE / MONSOON</span>
                                            <div class="phone-headline">Flash Drop is Live.</div>
                                            <div class="phone-btn">Explore Drop →</div>
                                        </div>
                                    </div>
                                    <div class="staging-tag-pill">● STAGING PREVIEW · NOT YET LIVE</div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Side-by-Side Staging</h3>
                                <p>Inspect how layout, banner, and typography edits render on mobile and desktop viewports before pushing live.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 03 · RESPONSIVE STAGING</div>
                </div>

                <!-- Card 4: Activity Log & Rollback -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"/></svg>
                                    </div>
                                    <span class="tech-index">// AUDIT.04</span>
                                </div>
                                <span class="tech-badge audit">TAMPER-PROOF</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-audit-trail">
                                    <div class="audit-item">
                                        <span class="a-time">19:42:10</span>
                                        <div class="a-info">
                                            <span class="a-title">Price Override · ₹2,899</span>
                                            <span class="a-author">by Dhrumil (ID: 001)</span>
                                        </div>
                                        <button class="btn-rollback" type="button">Rollback ↺</button>
                                    </div>
                                    <div class="audit-item">
                                        <span class="a-time">18:15:04</span>
                                        <div class="a-info">
                                            <span class="a-title">Tax Rule · IGST 18%</span>
                                            <span class="a-author">by Rajesh K.</span>
                                        </div>
                                        <span class="a-verified">Verified ✓</span>
                                    </div>
                                    <div class="audit-footer">
                                        <span class="hash-tag">SHA-256: 9b2d...f74a</span>
                                        <span class="chain-status">Immutable</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Activity Log &amp; 1-Click Undo</h3>
                                <p>Every price tweak, permission change, and order modification is logged with IP, timestamp, and instant undo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 04 · IMMUTABLE LOGS</div>
                </div>

                <!-- Card 5: Financials & Direct Exports -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                                    </div>
                                    <span class="tech-index">// METR.05</span>
                                </div>
                                <span class="tech-badge metrics">+31.4% MoM</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-finance-export">
                                    <div class="fin-header">
                                        <div>
                                            <span class="fin-label">OCTOBER GROSS GMV</span>
                                            <div class="fin-amount">₹38,42,800</div>
                                        </div>
                                        <span class="growth-tag">▲ ₹9.1L</span>
                                    </div>
                                    <div class="stepped-bars">
                                        <div class="s-bar" style="height:42%"><span>W1</span></div>
                                        <div class="s-bar" style="height:60%"><span>W2</span></div>
                                        <div class="s-bar" style="height:52%"><span>W3</span></div>
                                        <div class="s-bar" style="height:78%"><span>W4</span></div>
                                        <div class="s-bar peak" style="height:96%"><span>W5</span></div>
                                    </div>
                                    <div class="export-actions">
                                        <span class="exp-tag">GSTR-1 .CSV</span>
                                        <span class="exp-tag">TALLY XML</span>
                                        <span class="exp-tag">AUDIT .PDF</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Reports &amp; Direct Exports</h3>
                                <p>Generate GST reports, sales ledgers, and inventory valuations in one click. Hand clean spreadsheets straight to your CA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 05 · FINANCIAL EXPORTS</div>
                </div>

                <!-- Card 6: One Unified Architecture -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="6" height="6" rx="1"/><path d="M12 2v7"/><path d="M12 15v7"/><path d="M2 12h7"/><path d="M15 12h7"/></svg>
                                    </div>
                                    <span class="tech-index">// SYNC.06</span>
                                </div>
                                <span class="tech-badge sync">SINGLE SOURCE</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-headless-hub">
                                    <div class="hub-orchestrator-core">
                                        <span class="hardware-led orange"></span>
                                        <span class="core-text">RITIVERSE CORE ENGINE</span>
                                    </div>
                                    <div class="satellite-grid">
                                        <div class="sat-node"><span class="hardware-led green"></span>Webstore · 14ms</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>iOS &amp; Android v3.4</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>WhatsApp CRM Leads</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>Warehouse ERP DB</div>
                                    </div>
                                    <div class="hub-note">1 Database · 4 Frontends · 0 Discrepancy</div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>One Unified Architecture</h3>
                                <p>Your website, mobile apps, WhatsApp CRM leads, and warehouse ERP all read and write to the same single database.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 06 · UNIFIED ENGINE</div>
                </div>


                <!-- ══════════════════════════════════════════
                     SET 2 (Infinite Wrapping Clones)
                ══════════════════════════════════════════ -->
                <!-- Card 1 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                                    </div>
                                    <span class="tech-index">// SYS.01</span>
                                </div>
                                <span class="tech-badge live"><span class="hardware-led green"></span>AUTO-SYNC</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-catalog-engine">
                                    <div class="meta-row">
                                        <span class="sku-tag">SKU: RTV-8820 · SURAT</span>
                                        <span class="stock-pill">24 IN STOCK</span>
                                    </div>
                                    <div class="product-spec">
                                        <div class="item-title">Drop-Shoulder Heavy Tee</div>
                                        <div class="item-sub">Apparel · SS26 Drop</div>
                                    </div>
                                    <div class="pricing-matrix">
                                        <div class="price-col">
                                            <span class="m-label">MSRP</span>
                                            <span class="price-val strike">₹2,499</span>
                                        </div>
                                        <div class="price-col">
                                            <span class="m-label">LIVE PRICE</span>
                                            <span class="price-val active">₹1,799</span>
                                        </div>
                                        <span class="discount-chip">-28% FLASH</span>
                                    </div>
                                    <div class="sync-footer">
                                        <div class="toggle-control">
                                            <span class="mini-toggle active"></span>
                                            <span class="toggle-text">Storefront Sync: Active</span>
                                        </div>
                                        <span class="commit-time">Synced 2s ago</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Live Pricing &amp; Catalog</h3>
                                <p>Update inventory, adjust flash-sale discounts, and publish catalog items across web and app in seconds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 01 · REAL-TIME COMMERCE</div>
                </div>

                <!-- Card 2 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                                    </div>
                                    <span class="tech-index">// PERM.02</span>
                                </div>
                                <span class="tech-badge security">RBAC MATRIX</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-access-matrix">
                                    <div class="user-row">
                                        <div class="u-avatar super">DK</div>
                                        <div class="u-meta">
                                            <span class="u-name">Dhrumil (Founder)</span>
                                            <span class="u-scope">Superadmin · Full Access</span>
                                        </div>
                                        <span class="role-chip super">OWNER</span>
                                    </div>
                                    <div class="user-row">
                                        <div class="u-avatar finance">RK</div>
                                        <div class="u-meta">
                                            <span class="u-name">Rajesh K. (Accounts)</span>
                                            <span class="u-scope">Finance &amp; GST Invoicing</span>
                                        </div>
                                        <span class="role-chip finance">FINANCE</span>
                                    </div>
                                    <div class="hairline-perms">
                                        <div class="perm-rule allow"><span>✓</span> Export GST &amp; P&amp;L Statements</div>
                                        <div class="perm-rule allow"><span>✓</span> Approve Vendor Disbursements</div>
                                        <div class="perm-rule deny"><span>✕</span> Delete Customer Master DB 🔒</div>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Granular Access Matrix</h3>
                                <p>Define exactly who can edit prices, view financial statements, or publish content — from managers to accountants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 02 · ENTERPRISE SECURITY</div>
                </div>

                <!-- Card 3 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                                    </div>
                                    <span class="tech-index">// STAGE.03</span>
                                </div>
                                <span class="tech-badge staging"><span class="hardware-led orange"></span>8ms SYNC</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-staging-env">
                                    <div class="viewport-selector-bar">
                                        <span class="v-tab">Desktop 1440</span>
                                        <span class="v-tab active">iPhone 15 Pro</span>
                                    </div>
                                    <div class="rendered-mini-phone">
                                        <div class="phone-notch"></div>
                                        <div class="phone-screen-content">
                                            <span class="phone-eyebrow">RITIVERSE / MONSOON</span>
                                            <div class="phone-headline">Flash Drop is Live.</div>
                                            <div class="phone-btn">Explore Drop →</div>
                                        </div>
                                    </div>
                                    <div class="staging-tag-pill">● STAGING PREVIEW · NOT YET LIVE</div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Side-by-Side Staging</h3>
                                <p>Inspect how layout, banner, and typography edits render on mobile and desktop viewports before pushing live.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 03 · RESPONSIVE STAGING</div>
                </div>

                <!-- Card 4 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"/></svg>
                                    </div>
                                    <span class="tech-index">// AUDIT.04</span>
                                </div>
                                <span class="tech-badge audit">TAMPER-PROOF</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-audit-trail">
                                    <div class="audit-item">
                                        <span class="a-time">19:42:10</span>
                                        <div class="a-info">
                                            <span class="a-title">Price Override · ₹2,899</span>
                                            <span class="a-author">by Dhrumil (ID: 001)</span>
                                        </div>
                                        <button class="btn-rollback" type="button">Rollback ↺</button>
                                    </div>
                                    <div class="audit-item">
                                        <span class="a-time">18:15:04</span>
                                        <div class="a-info">
                                            <span class="a-title">Tax Rule · IGST 18%</span>
                                            <span class="a-author">by Rajesh K.</span>
                                        </div>
                                        <span class="a-verified">Verified ✓</span>
                                    </div>
                                    <div class="audit-footer">
                                        <span class="hash-tag">SHA-256: 9b2d...f74a</span>
                                        <span class="chain-status">Immutable</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Activity Log &amp; 1-Click Undo</h3>
                                <p>Every price tweak, permission change, and order modification is logged with IP, timestamp, and instant undo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 04 · IMMUTABLE LOGS</div>
                </div>

                <!-- Card 5 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                                    </div>
                                    <span class="tech-index">// METR.05</span>
                                </div>
                                <span class="tech-badge metrics">+31.4% MoM</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-finance-export">
                                    <div class="fin-header">
                                        <div>
                                            <span class="fin-label">OCTOBER GROSS GMV</span>
                                            <div class="fin-amount">₹38,42,800</div>
                                        </div>
                                        <span class="growth-tag">▲ ₹9.1L</span>
                                    </div>
                                    <div class="stepped-bars">
                                        <div class="s-bar" style="height:42%"><span>W1</span></div>
                                        <div class="s-bar" style="height:60%"><span>W2</span></div>
                                        <div class="s-bar" style="height:52%"><span>W3</span></div>
                                        <div class="s-bar" style="height:78%"><span>W4</span></div>
                                        <div class="s-bar peak" style="height:96%"><span>W5</span></div>
                                    </div>
                                    <div class="export-actions">
                                        <span class="exp-tag">GSTR-1 .CSV</span>
                                        <span class="exp-tag">TALLY XML</span>
                                        <span class="exp-tag">AUDIT .PDF</span>
                                    </div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>Reports &amp; Direct Exports</h3>
                                <p>Generate GST reports, sales ledgers, and inventory valuations in one click. Hand clean spreadsheets straight to your CA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 05 · FINANCIAL EXPORTS</div>
                </div>

                <!-- Card 6 Duplicate -->
                <div class="curved-card-container">
                    <div class="curved-card">
                        <div class="card-glass-glow"></div>
                        <div class="curved-card-inner">
                            <div class="curved-card-top">
                                <div class="card-top-left">
                                    <div class="tech-icon-pill">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="6" height="6" rx="1"/><path d="M12 2v7"/><path d="M12 15v7"/><path d="M2 12h7"/><path d="M15 12h7"/></svg>
                                    </div>
                                    <span class="tech-index">// SYNC.06</span>
                                </div>
                                <span class="tech-badge sync">SINGLE SOURCE</span>
                            </div>

                            <div class="card-micro-preview">
                                <div class="preview-headless-hub">
                                    <div class="hub-orchestrator-core">
                                        <span class="hardware-led orange"></span>
                                        <span class="core-text">RITIVERSE CORE ENGINE</span>
                                    </div>
                                    <div class="satellite-grid">
                                        <div class="sat-node"><span class="hardware-led green"></span>Webstore · 14ms</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>iOS &amp; Android v3.4</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>WhatsApp CRM Leads</div>
                                        <div class="sat-node"><span class="hardware-led green"></span>Warehouse ERP DB</div>
                                    </div>
                                    <div class="hub-note">1 Database · 4 Frontends · 0 Discrepancy</div>
                                </div>
                            </div>

                            <div class="curved-card-body">
                                <h3>One Unified Architecture</h3>
                                <p>Your website, mobile apps, WhatsApp CRM leads, and warehouse ERP all read and write to the same single database.</p>
                            </div>
                        </div>
                    </div>
                    <div class="curved-card-label">// 06 · UNIFIED ENGINE</div>
                </div>

            </div>
        </div>

        <button class="carousel-nav-btn next" id="carouselNext" aria-label="Next card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </button>
    </div>
</section>

<!-- ══════════════════════════════════════════
     WHY RiTiVERSE (WITH ANIMATED LIGHT STREAM)
══════════════════════════════════════════ -->
<!-- ══════════════════════════════════════════
     WHY RiTiVERSE (TOP-TO-BOTTOM LIGHT STREAM TREE)
══════════════════════════════════════════ -->
<section class="differentiator-section" id="solutions">
    <div class="differentiator-content container">
        <div class="section-header reveal">
            <span class="diff-eyebrow">// ARCHITECTURAL ADVANTAGE</span>
            <h2>Why businesses choose <span class="gradient-text">RiTiVERSE</span></h2>
            <p>Not a template. Not a generic CMS. A custom business system engineered around your exact operations.</p>
        </div>

        <!-- ══════════════════════════════════════════
             VERTICAL LIGHT STREAM TREE (TOP-TO-BOTTOM)
        ══════════════════════════════════════════ -->
        <div class="diff-tree-wrapper">
            <!-- Central Vertical Spine with Downward Light Stream -->
            <div class="diff-tree-spine" aria-hidden="true">
                <div class="spine-base-line"></div>
                <div class="spine-photon-beam"></div>
                <div class="spine-ambient-glow"></div>
            </div>

            <!-- Alternating Cards Tree Rows -->
            <div class="diff-tree-rows">

                <!-- Row 01: Right Side -->
                <div class="diff-tree-row right-side reveal" data-delay="100">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                            </div>
                            <span class="diff-index">// 01</span>
                        </div>
                        <h3>Fit over features</h3>
                        <p>Software designed around your specific workflow rather than forcing your team into rigid, generic templates.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">100% BESPOKE ARCHITECTURE</span>
                        </div>
                    </div>
                </div>

                <!-- Row 02: Left Side -->
                <div class="diff-tree-row left-side reveal" data-delay="150">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                            </div>
                            <span class="diff-index">// 02</span>
                        </div>
                        <h3>Business-controlled</h3>
                        <p>Manage content, catalogs, pricing rules, and access control from a clean admin panel — zero developer tickets required.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">ZERO CODE DEPENDENCY</span>
                        </div>
                    </div>
                </div>

                <!-- Row 03: Right Side -->
                <div class="diff-tree-row right-side reveal" data-delay="200">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/><polyline points="13 14 16 11 19 14"/></svg>
                            </div>
                            <span class="diff-index">// 03</span>
                        </div>
                        <h3>Connected systems</h3>
                        <p>Website, mobile application, CRM pipeline, and warehouse ERP share real-time synchronized data without discrepancies.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">REAL-TIME DATA SYNC</span>
                        </div>
                    </div>
                </div>

                <!-- Row 04: Left Side -->
                <div class="diff-tree-row left-side reveal" data-delay="250">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
                            </div>
                            <span class="diff-index">// 04</span>
                        </div>
                        <h3>Built for evolution</h3>
                        <p>Modular architecture engineered to expand effortlessly as your product catalog, order volume, and branches multiply.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">MODULAR EXPANSION</span>
                        </div>
                    </div>
                </div>

                <!-- Row 05: Right Side -->
                <div class="diff-tree-row right-side reveal" data-delay="300">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                            </div>
                            <span class="diff-index">// 05</span>
                        </div>
                        <h3>Full ownership</h3>
                        <p>Your server, your database, your proprietary source code. Zero third-party lock-in and zero monthly platform taxes.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">100% PROPRIETARY IP</span>
                        </div>
                    </div>
                </div>

                <!-- Row 06: Left Side -->
                <div class="diff-tree-row left-side reveal" data-delay="350">
                    <div class="diff-tree-branch">
                        <div class="branch-node"></div>
                        <div class="branch-line"></div>
                        <div class="branch-pulse"></div>
                    </div>
                    <div class="diff-card">
                        <div class="diff-card-header">
                            <div class="diff-icon-box">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            </div>
                            <span class="diff-index">// 06</span>
                        </div>
                        <h3>Ongoing support</h3>
                        <p>Direct access to dedicated engineering founders throughout architecture, deployment, and ongoing post-launch scaling.</p>
                        <div class="diff-card-footer">
                            <span class="diff-tag">FOUNDER-LED PARTNERSHIP</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
