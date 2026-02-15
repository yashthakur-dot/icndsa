<?php
declare(strict_types=1);

$jsonPath = __DIR__ . '/../config/speakers.json';
$json = is_file($jsonPath) ? file_get_contents($jsonPath) : false;
$data = is_string($json) ? json_decode($json, true) : null;

if (!is_array($data) || !isset($data['speakers']) || !is_array($data['speakers'])) {
  $data = ['speakers' => []];
}

$projectRoot = dirname(__DIR__);
?>

<div class="container speaker-section page-keynote-speaker">

  <h2 class="mb-5 fw-bold text-ieee">Guest Speaker/ Keynote</h2>

  <?php foreach ($data['speakers'] as $speaker): ?>

    <?php
      $speakerId = isset($speaker['id']) ? (int)$speaker['id'] : 0;
      $speakerName = (string)($speaker['name'] ?? '');
      $speakerDesignation = (string)($speaker['designation'] ?? '');
      $speakerTitle = (string)($speaker['title'] ?? '');
      $speakerProfile = (string)($speaker['profile'] ?? '');
    ?>

    <div class="row speaker-card align-items-start">

      <!-- Speaker Image -->
      <div class="col-md-3 text-center mb-3 mb-md-0">

        <?php
        $imagePath = $speaker['image'] ?? '';
        $imageFsPath = is_string($imagePath) && $imagePath !== ''
          ? $projectRoot . '/' . ltrim($imagePath, '/')
          : '';
        if (empty($imagePath) || $imageFsPath === '' || !file_exists($imageFsPath)) {
            $imagePath = "assets/images/organizing-committee/default.png";
        }
        ?>

           <img src="<?= htmlspecialchars($imagePath); ?>"
             alt="<?= htmlspecialchars($speakerName, ENT_QUOTES, 'UTF-8'); ?>"
             class="speaker-img"
             width="160"
             height="200"
             onerror="this.onerror=null;this.src='assets/images/organizing-committee/default.png'">

      </div>

      <!-- Speaker Content -->
      <div class="col-md-9">

        <div class="speaker-name">
          <?= htmlspecialchars($speakerName, ENT_QUOTES, 'UTF-8'); ?>
        </div>

        <div class="speaker-designation">
          <?= htmlspecialchars($speakerDesignation, ENT_QUOTES, 'UTF-8'); ?>
        </div>

        <div class="speaker-title">
          Talk: <?= htmlspecialchars($speakerTitle, ENT_QUOTES, 'UTF-8'); ?>
        </div>

        <div class="profile-text"
             id="profile-<?= $speakerId; ?>">
          <?= nl2br(htmlspecialchars($speakerProfile, ENT_QUOTES, 'UTF-8')); ?>
        </div>

        <button class="read-more-btn"
          onclick="toggleProfile(<?= $speakerId; ?>)">
          Read More
        </button>

      </div>

    </div>

  <?php endforeach; ?>

</div>