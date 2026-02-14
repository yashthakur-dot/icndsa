<?php
$json = file_get_contents('config/committee.json');
$data = json_decode($json, true);
?>

<style>
/* ===============================
   COMMITTEE PAGE – PROFESSIONAL
   =============================== */

.committee-section {
  margin-bottom: 3rem;
}

.committee-title {
  font-size: 1.6rem;
  font-weight: 700;
  color: #003b5c;
  margin-bottom: 1.5rem;
  border-left: 5px solid #1a73e8;
  background-color: #9bbbff44;
  padding: 5px 6px;
}

@media (max-width: 576px) {
  .committee-title {
    font-size: 1.2rem;
    border-left: 3px solid #1a73e8;
    padding: 4px 6px;
    margin-bottom: 1rem;
  }
}

.subcommittee-title {
  font-size: 1.2rem;
  font-weight: 600;
  color: #111827;
  margin: 2rem 0 1rem;
  border-bottom: 1px solid #e5eaf0;
  padding-bottom: 6px;
}

.member-card {
  border: 1px solid #e5eaf0;
  border-radius: 8px;
  padding: 1.5rem 1rem;
  text-align: center;
  height: 100%;
  transition: 0.25s ease;

  /* Professional subtle gradient */
  background: linear-gradient(
    135deg,
    #eef6fc 0%,      /* very light blue (top-left) */
    #ffffff 50%,     /* white center */
    #f0f7ff 100%     /* very soft blue (bottom-right) */
  );
}

.member-card:hover {
  border-color: #cddff0;
  transform: translateY(-3px);
  box-shadow: 0 6px 18px rgba(26, 115, 232, 0.08);
}

.member-img {
  width: 90px;
  height: 120px;
  object-fit: cover;
  border-radius: 5%;
  margin-bottom: 1rem;
  border: 3px solid #f0f4f8;
}

.member-name {
  font-weight: 600;
  font-size: 1rem;
  color: #111827;
}

.member-designation {
  font-size: 0.85rem;
  color: #4462a1;
  font-weight: 500;
  margin-bottom: 0.3rem;
}

.member-affiliation {
  font-size: 0.8rem;
  color: #6b7280;
  line-height: 1.4;
}
</style>

<div class="container">

  <h1 class="mb-5 fw-bold ieee-text">Organizing Committee</h1>

  <?php foreach ($data['committee'] as $section): ?>
    
    <div id="<?= $section['id']; ?>" class="committee-section">

      <div class="committee-title text-ieee">
        <?= $section['title']; ?>
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
                if (empty($imagePath) || !file_exists($imagePath)) {
                    $imagePath = "assets/images/organizing-committee/default.png";
                }
                ?>

                <img src="<?= $imagePath; ?>"
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
            <?= $subSection['title']; ?>
          </div>

          <div class="row g-4">

            <?php foreach ($subSection['members'] as $member): ?>

              <div class="col-md-4 col-lg-3">
                <div class="member-card">

                  <?php
                  $imagePath = $member['image'] ?? '';
                  if (empty($imagePath) || !file_exists($imagePath)) {
                      $imagePath = "assets/images/organizing-committee/default.png";
                  }
                  ?>

                  <img src="<?= $imagePath; ?>"
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