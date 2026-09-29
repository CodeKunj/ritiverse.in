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
