<?php
$json = file_get_contents('config/speakers.json');
$data = json_decode($json, true);
?>

<style>
/* ===============================
   KEYNOTE SPEAKERS – IEEE STYLE
   =============================== */

.speaker-section {
  margin-bottom: 3rem;
}

.speaker-card {
  border-bottom: 1px solid #e5eaf0;
  padding: 2rem 0;
}

.speaker-img {
  width: 160px;
  height: 200px;
  object-fit: cover;
  border-radius: 6px;
  border: 3px solid #f0f4f8;
}

.speaker-name {
  font-size: 1.4rem;
  font-weight: 700;
  color: #003b5c;
}

.speaker-designation {
  font-size: 0.95rem;
  color: #21487b;
  margin-bottom: 0.6rem;
}

.speaker-title {
  font-weight: 600;
  margin-bottom: 0.8rem;
}

/* Clean 3-line clamp */
.profile-text {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  line-height: 1.7;
  color: #374151;
}

.profile-text.expanded {
  -webkit-line-clamp: unset;
  display: block;
}

.read-more-btn {
  background: none;
  border: none;
  color: #1a73e8;
  font-weight: 600;
  padding: 0;
  margin-top: 8px;
  cursor: pointer;
}

.read-more-btn:hover {
  text-decoration: underline;
}
</style>

<div class="container speaker-section">

  <h2 class="mb-5 fw-bold text-ieee">Guest Speaker/ Keynote</h2>

  <?php foreach ($data['speakers'] as $speaker): ?>

    <div class="row speaker-card align-items-start">

      <!-- Speaker Image -->
      <div class="col-md-3 text-center mb-3 mb-md-0">

        <?php
        $imagePath = $speaker['image'] ?? '';
        if (empty($imagePath) || !file_exists($imagePath)) {
            $imagePath = "assets/images/organizing-committee/default.png";
        }
        ?>

        <img src="<?= $imagePath; ?>"
             alt="<?= htmlspecialchars($speaker['name']); ?>"
             class="speaker-img"
             onerror="this.src='assets/images/default-speaker.png'">

      </div>

      <!-- Speaker Content -->
      <div class="col-md-9">

        <div class="speaker-name">
          <?= htmlspecialchars($speaker['name']); ?>
        </div>

        <div class="speaker-designation">
          <?= htmlspecialchars($speaker['designation']); ?>
        </div>

        <div class="speaker-title">
          Talk: <?= htmlspecialchars($speaker['title']); ?>
        </div>

        <div class="profile-text"
             id="profile-<?= $speaker['id']; ?>">
          <?= nl2br(htmlspecialchars($speaker['profile'])); ?>
        </div>

        <button class="read-more-btn"
                onclick="toggleProfile(<?= $speaker['id']; ?>)">
          Read More
        </button>

      </div>

    </div>

  <?php endforeach; ?>

</div>

<script>
function toggleProfile(id) {
  const profile = document.getElementById("profile-" + id);
  const btn = profile.nextElementSibling;

  profile.classList.toggle("expanded");

  if (profile.classList.contains("expanded")) {
    btn.innerText = "Read Less";
  } else {
    btn.innerText = "Read More";
  }
}
</script>