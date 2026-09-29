<?php
$title = "RITIverse | Build once. Change anything.";
ob_start();
?>

<!-- Hero Section -->
<section class="hero-section container">
    <div class="hero-content">
        <span class="eyebrow"><?= htmlspecialchars($hero_eyebrow) ?></span>
        <h1 id="live-hero-heading"><?= $hero_heading ?></h1>
        <p><?= htmlspecialchars($hero_subheading) ?></p>
        <div class="hero-ctas">
            <a href="#demo" class="btn btn-primary">Try the Admin Demo</a>
            <a href="#work" class="btn btn-secondary">See Our Work</a>
        </div>
    </div>
    
    <!-- Signature Admin Demo UI -->
    <div class="hero-visual admin-demo-container" id="demo">
        <div class="demo-admin-panel">
            <div class="panel-header">
                <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                <span class="panel-title">RITIVERSE ADMIN</span>
            </div>
            <div class="panel-body">
                <label>Hero Heading</label>
                <input type="text" id="demo-heading-input" value="Build once. Change anything.">
                
                <label>Price</label>
                <input type="text" value="₹1,499">
                
                <button id="demo-publish-btn" class="btn btn-primary btn-sm mt-4">Publish Changes</button>
            </div>
        </div>
        
        <div class="demo-live-preview">
            <div class="preview-badge">LIVE PREVIEW</div>
            <h2 id="demo-live-heading">Build once.<br>Change anything.</h2>
            <button class="btn btn-primary btn-sm">Book a Demo</button>
            <div class="floating-cards">
                <div class="float-card" id="toast-notification">✓ Heading updated</div>
            </div>
        </div>
    </div>
</section>

<!-- Capability Marquee -->
<section class="marquee-section">
    <div class="marquee-content">
        <span>Edit anything</span> • <span>Roles & permissions</span> • <span>Live preview</span> • <span>Activity log</span> • <span>Reports & exports</span> • <span>One control layer</span> •
        <span>Edit anything</span> • <span>Roles & permissions</span> • <span>Live preview</span> • <span>Activity log</span> • <span>Reports & exports</span> • <span>One control layer</span> •
    </div>
</section>

<!-- Admin Panel Deep Dive -->
<section class="admin-deep-dive container" id="admin-panel">
    <div class="section-header">
        <h2>Everything on your site, editable by you.</h2>
        <p>Change content, prices, users, menus and business data from one control panel — without depending on a developer for every small update.</p>
    </div>
    <div class="capability-grid">
        <div class="cap-card">
            <h3>Edit anything</h3>
            <p>Pages, prices, banners, menus, products and content.</p>
        </div>
        <div class="cap-card">
            <h3>Roles & permissions</h3>
            <p>Control who can view and change what.</p>
        </div>
        <div class="cap-card">
            <h3>Live preview</h3>
            <p>See changes before publishing.</p>
        </div>
        <div class="cap-card">
            <h3>Activity log</h3>
            <p>Track changes and identify who changed what.</p>
        </div>
        <div class="cap-card">
            <h3>Reports & exports</h3>
            <p>Keep business data accessible and exportable.</p>
        </div>
        <div class="cap-card">
            <h3>One control layer</h3>
            <p>Manage your website, app, CRM and ERP from connected systems.</p>
        </div>
    </div>
</section>

<!-- Why RITIverse -->
<section class="differentiator-section container">
    <div class="diff-grid">
        <div class="diff-card">
            <h3>Fit over features</h3>
            <p>Software designed around the client's workflow instead of forcing the business into a generic template.</p>
        </div>
        <div class="diff-card">
            <h3>Business-controlled</h3>
            <p>The client can manage content and business information from the admin panel.</p>
        </div>
        <div class="diff-card">
            <h3>Connected systems</h3>
            <p>Website, CRM, ERP and business operations can share connected data.</p>
        </div>
        <div class="diff-card">
            <h3>Built for evolution</h3>
            <p>The system can continue to evolve after launch.</p>
        </div>
    </div>
</section>

<!-- Services Bento -->
<section class="services-bento container" id="solutions">
    <div class="bento-grid">
        <?php foreach($services as $service): ?>
        <div class="bento-item <?= !empty($service['is_large']) ? 'bento-large' : '' ?>">
            <h3><?= htmlspecialchars($service['title']) ?></h3>
            <p><?= htmlspecialchars($service['description']) ?></p>
            <?php if(!empty($service['is_large'])): ?>
            <div class="mini-product-preview"></div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Process -->
<section class="process-section container" id="process">
    <div class="section-header">
        <h2>How we build</h2>
        <p>The relationship does not end when the website goes live.</p>
    </div>
    <div class="process-timeline">
        <div class="process-step"><span>01</span> Understand</div>
        <div class="process-step"><span>02</span> Define</div>
        <div class="process-step"><span>03</span> Design</div>
        <div class="process-step"><span>04</span> Build</div>
        <div class="process-step"><span>05</span> Test</div>
        <div class="process-step"><span>06</span> Go Live</div>
        <div class="process-step"><span>07</span> Evolve</div>
    </div>
</section>

<!-- Final CTA -->
<section class="final-cta container" id="contact">
    <h2>Your business.<br>Your software.<br>Your control.</h2>
    <p>Have a business process that should work better? Let's design the system around it.</p>
    <div class="hero-ctas">
        <a href="#demo" class="btn btn-primary">Try the Admin Demo</a>
        <a href="#contact" class="btn btn-secondary">Book a Discovery Call</a>
    </div>
</section>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
