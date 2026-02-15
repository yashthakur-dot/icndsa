<?php
declare(strict_types=1);

$jsonPath = __DIR__ . '/../config/national-advisory.json';
$json = is_file($jsonPath) ? file_get_contents($jsonPath) : false;
$data = is_string($json) ? json_decode($json, true) : null;

if (!is_array($data) || !isset($data['members']) || !is_array($data['members'])) {
  $data = ['title' => 'National Advisory Committee', 'members' => []];
}
?>

<div class="container py-5 advisory-section page-advisory">

  <div class="advisory-title">
    <?= htmlspecialchars($data['title']); ?>
  </div>

  <ul class="advisory-list">
    <?php foreach ($data['members'] as $member): ?>
      <li>
        <div class="member-name">
          <?= htmlspecialchars($member['name']); ?>
        </div>
        <div class="member-affiliation">
          <?= htmlspecialchars($member['affiliation']); ?>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>

</div>