<?php
$menuData = json_decode(
    file_get_contents(__DIR__ . '/../config/menu.json'),
    true
);

$currentPage = $_GET['page'] ?? 'home';
?>

<nav class="ieee-menu">
  <ul class="menu-list">

    <?php foreach ($menuData['menu'] as $item): ?>

      <?php if (isset($item['children'])): ?>
        <li class="menu-group">
          <button class="menu-toggle">
            <span><?= htmlspecialchars($item['title']) ?></span>
            <span class="caret"></span>
          </button>

          <ul class="submenu">
            <?php foreach ($item['children'] as $child): ?>
              <li>
                <a
                  href="index.php?page=<?= $child['page'] ?>"
                  class="<?= $currentPage === $child['page'] ? 'active' : '' ?>"
                >
                  <?= htmlspecialchars($child['title']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>

      <?php else: ?>
        <li>
          <a
            href="index.php?page=<?= $item['page'] ?>"
            class="menu-link <?= $currentPage === $item['page'] ? 'active' : '' ?>"
          >
            <?= htmlspecialchars($item['title']) ?>
          </a>
        </li>
      <?php endif; ?>

    <?php endforeach; ?>

  </ul>
</nav>