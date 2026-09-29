<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?= $title ?? 'RITIverse - Technology that fits your business' ?></title>
    <meta name="description" content="<?= $meta_description ?? 'RITIverse builds custom software around how a business works — and gives the business owner a control panel to manage and change the system.' ?>">
    <meta property="og:title" content="<?= $title ?? 'RITIverse - Technology that fits your business' ?>">
    <meta property="og:description" content="<?= $meta_description ?? 'RITIverse builds custom software.' ?>">
    <meta property="og:type" content="website">
    
    <link rel="stylesheet" href="/assets/css/style.css">
    
    <!-- Accessibility -->
    <style>
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
        :focus-visible {
            outline: 3px solid var(--accent);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
    <?php require_once 'partials/navbar.php'; ?>
    
    <main>
        <?= $content ?? '' ?>
    </main>

    <?php require_once 'partials/footer.php'; ?>
    
    <script src="/assets/js/main.js"></script>
</body>
</html>
