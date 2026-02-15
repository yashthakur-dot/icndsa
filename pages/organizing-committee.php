<?php
declare(strict_types=1);

$jsonPath = __DIR__ . '/../config/committee.json';
$json = is_file($jsonPath) ? file_get_contents($jsonPath) : false;
$data = is_string($json) ? json_decode($json, true) : null;

if (!is_array($data) || !isset($data['committee']) || !is_array($data['committee'])) {
  $data = ['committee' => []];
}

$projectRoot = dirname(__DIR__);
?>

<div class="container page-organizing-committee">

  <h1 class="mb-5 fw-bold ieee-text">Organizing Committee</h1>

  <?php foreach ($data['committee'] as $section): ?>
    
    <?php
      $sectionId = isset($section['id']) ? (string)$section['id'] : '';
      // Keep IDs safe for HTML attributes.
      $sectionId = preg_replace('/[^a-zA-Z0-9_-]/', '', $sectionId) ?: 'section';
      $sectionTitle = isset($section['title']) ? (string)$section['title'] : '';
    ?>

    <div id="<?= htmlspecialchars($sectionId, ENT_QUOTES, 'UTF-8'); ?>" class="committee-section">

      <div class="committee-title text-ieee">
        <?= htmlspecialchars($sectionTitle, ENT_QUOTES, 'UTF-8'); ?>
      </div>

      <?php
      // CASE 1: Simple sections (Chief Patron, Patrons, etc.)
      if (isset($section['members'])):
      ?>

        <div class="row g-4">
          <?php foreach ($section['members'] as $member): ?>

            <div class="col-md-4 col-lg-3">
              <div class="member-card">

                <?php
                $imagePath = $member['image'] ?? '';
                $imageFsPath = is_string($imagePath) && $imagePath !== ''
                  ? $projectRoot . '/' . ltrim($imagePath, '/')
                  : '';
                if (empty($imagePath) || $imageFsPath === '' || !file_exists($imageFsPath)) {
                    $imagePath = "assets/images/organizing-committee/default.png";
                }
                ?>

                <img src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"
                     alt="<?= htmlspecialchars($member['name']); ?>"
                     class="member-img">

                <div class="member-name">
                  <?= htmlspecialchars($member['name']); ?>
                </div>

                <?php if (!empty($member['designation'])): ?>
                  <div class="member-designation">
                    <?= htmlspecialchars($member['designation']); ?>
                  </div>
                <?php endif; ?>

                <div class="member-affiliation">
                  <?= htmlspecialchars($member['affiliation']); ?>
                </div>

              </div>
            </div>

          <?php endforeach; ?>
        </div>

      <?php
      // CASE 2: Organizing Committee with Subsections
      elseif (isset($section['sections'])):
      ?>

        <?php foreach ($section['sections'] as $subSection): ?>

          <div class="subcommittee-title text-ieee">
            <?= htmlspecialchars((string)($subSection['title'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>
          </div>

          <div class="row g-4">

            <?php foreach (($subSection['members'] ?? []) as $member): ?>

              <div class="col-md-4 col-lg-3">
                <div class="member-card">

                  <?php
                    $imagePath = $member['image'] ?? '';
                    $imageFsPath = is_string($imagePath) && $imagePath !== ''
                      ? $projectRoot . '/' . ltrim($imagePath, '/')
                      : '';
                    if (empty($imagePath) || $imageFsPath === '' || !file_exists($imageFsPath)) {
                      $imagePath = "assets/images/organizing-committee/default.png";
                  }
                  ?>

                    <img src="<?= htmlspecialchars($imagePath, ENT_QUOTES, 'UTF-8'); ?>"
                       alt="<?= htmlspecialchars($member['name']); ?>"
                       class="member-img">

                  <div class="member-name">
                    <?= htmlspecialchars($member['name']); ?>
                  </div>

                  <?php if (!empty($member['designation'])): ?>
                    <div class="member-designation">
                      <?= htmlspecialchars($member['designation']); ?>
                    </div>
                  <?php endif; ?>

                  <div class="member-affiliation">
                    <?= htmlspecialchars($member['affiliation']); ?>
                  </div>

                </div>
              </div>

            <?php endforeach; ?>

          </div>

        <?php endforeach; ?>

      <?php endif; ?>

    </div>

  <?php endforeach; ?>

</div>