<?php
use App\Middleware\Auth;

// Auth Routes
$router->get('/admin/login', 'AuthController@login');
$router->post('/admin/login', 'AuthController@login');
$router->get('/admin/logout', 'AuthController@logout');

// Protected Admin Routes
$router->get('/admin', function() {
    Auth::check();
    $title = "Dashboard";
    ob_start();
    ?>
    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Pages</h3>
            <p class="value">8</p>
        </div>
        <div class="stat-card">
            <h3>Services</h3>
            <p class="value">6</p>
        </div>
        <div class="stat-card">
            <h3>Projects</h3>
            <p class="value">12</p>
        </div>
    </div>
    
    <div class="card">
        <h3>Recent Activity</h3>
        <p style="color:var(--muted)">No recent activity to display.</p>
    </div>
    <?php
    $content = ob_get_clean();
    require_once __DIR__ . '/../views/admin/layout.php';
});
