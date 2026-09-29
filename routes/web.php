<?php
// routes/web.php
use App\Models\Setting;
use App\Models\Service;
use App\Models\Team;
use App\Models\Faq;

$router->get('/', function() {
    // Dynamic integration with Database
    $hero_heading = Setting::get('hero_heading', 'Build once.<br>Change anything.');
    $hero_subheading = Setting::get('hero_subheading', 'We build websites, apps, CRM and ERP systems around your business — with an admin panel that lets your team manage the system without waiting on a developer for every small change.');
    $hero_eyebrow = Setting::get('hero_eyebrow', 'CUSTOM SOFTWARE · WEBSITES · APPS · ERP · CRM');
    
    $services = Service::all();
    if (empty($services)) {
        // Fallback for UI if DB is empty
        $services = [
            ['title' => 'ADMIN PANEL + BUSINESS SYSTEM', 'description' => 'The central hub for all your business operations.', 'is_large' => 1],
            ['title' => 'CRM', 'description' => 'Customer relationship management.', 'is_large' => 0],
            ['title' => 'ERP', 'description' => 'Enterprise resource planning.', 'is_large' => 0],
            ['title' => 'Websites', 'description' => 'Includes admin panel.', 'is_large' => 0],
            ['title' => 'Mobile Apps', 'description' => 'Native and cross-platform.', 'is_large' => 0],
            ['title' => 'Custom Software', 'description' => 'Built for your workflow.', 'is_large' => 0]
        ];
    }

    
    require_once __DIR__ . '/../views/public/home.php';
});
