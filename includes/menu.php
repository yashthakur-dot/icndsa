<?php
declare(strict_types=1);

$menuPath = __DIR__ . '/../config/menu.json';
$menuJson = is_file($menuPath) ? file_get_contents($menuPath) : false;
$menuData = is_string($menuJson) ? json_decode($menuJson, true) : null;

if (!is_array($menuData) || !isset($menuData['menu']) || !is_array($menuData['menu'])) {
    $menuData = ['menu' => []];
}

$currentPage = (string)($_GET['page'] ?? 'home');
?>

<nav class="border-end h-100">
    <div class="list-group list-group-flush">

        <?php foreach ($menuData['menu'] as $index => $item): ?>

            <?php if (isset($item['children']) && is_array($item['children'])):
                $childPages = array_values(array_filter(
                    array_map(static fn($child) => is_array($child) ? (string)($child['page'] ?? '') : '', $item['children']),
                    static fn(string $p): bool => $p !== ''
                ));
                $isOpen = in_array($currentPage, $childPages, true);
                ?>
                <!-- Parent -->
                <button
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center <?= $isOpen ? 'active' : '' ?>"
                    data-bs-toggle="collapse" data-bs-target="#submenu-<?= $index ?>"
                    aria-expanded="<?= $isOpen ? 'true' : 'false' ?>">
                    <span class="d-flex align-items-center gap-2 py-1">
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
                        <?php if (!is_array($child)) continue; ?>
                        <a href="index.php?page=<?= rawurlencode((string)$child['page']) ?>"
                            class="list-group-item list-group-item-action ps-5 <?= $currentPage === $child['page'] ? 'submenu-active' : '' ?>">
                            <?php if (!empty($child['icon'])): ?>
                                <i class="bi bi-<?= $child['icon'] ?> me-2"></i>
                            <?php endif; ?>
                            <?= htmlspecialchars($child['title']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <!-- Single item -->
                <a href="index.php?page=<?= rawurlencode((string)$item['page']) ?>"
                    class="list-group-item list-group-item-action <?= $currentPage === $item['page'] ? 'active' : '' ?>">
                    <span class="d-flex align-items-center gap-2 py-1">
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