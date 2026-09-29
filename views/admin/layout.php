<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard' ?> - RITIverse Admin</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body>
    <div class="admin-wrapper">
        <aside class="admin-sidebar">
            <div class="sidebar-brand">RITIverse Admin</div>
            <nav class="sidebar-nav">
                <a href="/admin">Dashboard</a>
                <a href="/admin/pages">Pages</a>
                <a href="/admin/services">Services</a>
                <a href="/admin/projects">Projects</a>
                <a href="/admin/team">Team</a>
                <a href="/admin/faqs">FAQ</a>
                <a href="/admin/media">Media</a>
                <a href="/admin/users">Users</a>
                <a href="/admin/settings">Settings</a>
            </nav>
            <div class="sidebar-bottom">
                <a href="/admin/logout">Logout</a>
            </div>
        </aside>
        <main class="admin-main">
            <header class="admin-topbar">
                <h2><?= $title ?? 'Dashboard' ?></h2>
                <div class="topbar-actions">
                    <a href="/" target="_blank" class="btn-sm" style="text-decoration:none; background:var(--background); padding:0.5rem 1rem; border-radius:8px; color:var(--foreground); border:1px solid var(--border);">View Site ↗</a>
                </div>
            </header>
            <div class="admin-content">
                <?= $content ?? '' ?>
            </div>
        </main>
    </div>
</body>
</html>
