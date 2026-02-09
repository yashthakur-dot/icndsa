<?php
$page = $_GET['page'] ?? 'home';
$file = "pages/$page.php";
if (!file_exists($file)) {
    $file = "pages/404.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IEEE ICNDSA 2026</title>

  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/pages.css">
  <link rel="stylesheet" href="assets/css/layout.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<div class="page-wrapper">

  <?php include 'includes/header.php'; ?>

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

<script src="assets/js/app.js"></script>
</body>
</html>