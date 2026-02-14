<?php
$menuData = json_decode(
    file_get_contents(__DIR__ . '/../config/menu.json'),
    true
);

$currentPage = $_GET['page'] ?? 'home';
?>

<nav class="border-end vh-100">
    <div class="list-group list-group-flush">

        <?php foreach ($menuData['menu'] as $index => $item): ?>

            <?php if (isset($item['children'])):
                $isOpen = in_array($currentPage, array_column($item['children'], 'page'));
                ?>
                <!-- Parent -->
                <button
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?= $isOpen ? 'active' : '' ?>"
                    data-bs-toggle="collapse" data-bs-target="#submenu-<?= $index ?>"
                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>">
                    <span class="d-flex align-items-center gap-2 py-2">
                        <?php if (!empty($item['icon'])): ?>
                            <i class="bi bi-<?= $item['icon'] ?>"></i>
                        <?php endif; ?>
                        <?= htmlspecialchars($item['title']) ?>
                    </span>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <!-- Submenu -->
                <div class="collapse <?= $isOpen ? 'show' : '' ?>" id="submenu-<?= $index ?>">
                    <?php foreach ($item['children'] as $child): ?>
                        <a href="index.php?page=<?= $child['page'] ?>"
                            class="list-group-item list-group-item-action ps-5 <?= $currentPage === $child['page'] ? 'submenu-active' : '' ?>"
                            <?php if (!empty($child['icon'])): ?>
                                <i class="bi bi-<?= $child['icon'] ?> me-2"></i>
                            <?php endif; ?>
                            <?= htmlspecialchars($child['title']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <!-- Single item -->
                <a href="index.php?page=<?= $item['page'] ?>"
                    class="list-group-item list-group-item-action <?= $currentPage === $item['page'] ? 'active' : '' ?>">
                    <span class="d-flex align-items-center gap-2 py-2">
                        <?php if (!empty($item['icon'])): ?>
                            <i class="bi bi-<?= $item['icon'] ?>"></i>
                        <?php endif; ?>
                        <?= htmlspecialchars($item['title']) ?>
                    </span>
                </a>
            <?php endif; ?>

        <?php endforeach; ?>

    </div>
</nav>