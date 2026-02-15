<?php
declare(strict_types=1);

$requestedPage = (string)($_GET['page'] ?? 'home');

// Allow only known slugs that map to real files in /pages.
$availablePages = array_map(
    static fn(string $path): string => basename($path, '.php'),
    glob(__DIR__ . '/pages/*.php') ?: []
);

// Never allow direct access to a 404 slug.
$availablePages = array_values(array_diff($availablePages, ['404']));

$page = in_array($requestedPage, $availablePages, true) ? $requestedPage : '404';
$file = __DIR__ . '/pages/' . $page . '.php';

// Derive a human-friendly title from menu config.
$pageTitle = 'IEEE ICNDSA 2026';
$menuPath = __DIR__ . '/config/menu.json';
$menuJson = is_file($menuPath) ? file_get_contents($menuPath) : false;
$menuData = is_string($menuJson) ? json_decode($menuJson, true) : null;
if (is_array($menuData) && isset($menuData['menu']) && is_array($menuData['menu'])) {
    foreach ($menuData['menu'] as $item) {
        if (!is_array($item)) continue;
        if (isset($item['page']) && (string)$item['page'] === $page && isset($item['title'])) {
            $pageTitle = (string)$item['title'];
            break;
        }
        if (isset($item['children']) && is_array($item['children'])) {
            foreach ($item['children'] as $child) {
                if (!is_array($child)) continue;
                if (isset($child['page']) && (string)$child['page'] === $page && isset($child['title'])) {
                    $pageTitle = (string)$child['title'];
                    break 2;
                }
            }
        }
    }
}

$canonicalUrl = 'index.php?page=' . rawurlencode($page);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?> | IEEE ICNDSA 2026</title>
    <meta name="description" content="IEEE ICNDSA 2026 — International Conference on NextGen Data Science and Analytics.">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/pages.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <div class="page-wrapper">

        <?php include 'includes/header.php'; ?>

        <div>
            <?php include 'includes/news-tickers.php'; ?>
        </div>

        <!-- ===============================
     MOBILE OFFCANVAS MENU
=============================== -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu"
            aria-labelledby="mobileMenuLabel">

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="mobileMenuLabel">
                    Menu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body p-0">
                <?php include 'includes/menu.php'; ?>
            </div>
        </div>

        <div class="app-layout">
            <aside class="sidebar">
                <?php include 'includes/menu.php'; ?>
            </aside>

            <main class="content">
                <?php include $file; ?>
            </main>

            <aside class="dates">
                <?php include 'includes/dates.php'; ?>
            </aside>
        </div>

        <?php include 'includes/footer.php'; ?>

    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script defer src="assets/js/app.js"></script>
</body>

</html>