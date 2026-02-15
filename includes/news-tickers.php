<?php
/* =========================
   NEWS TICKER CONFIG
   ========================= */

$newsItems = [
    "Accepted papers will be submitted for inclusion into IEEE Xplore subject to meeting IEEE Xplore’s scope and quality requirements.",
    "Early bird registration closes on 10 March 2026.",
    "Conference will be held at CHRIST (Deemed to be University), Delhi NCR Campus, India."
];
?>

<?php if (!empty($newsItems)): ?>
<!-- =========================
     NEWS TICKER MARKUP
========================= -->
<div class="news-ticker bg-footer text-white py-2">
  <div class="container-fluid overflow-hidden">
    <div class="ticker-track d-flex align-items-center">
      <?php foreach ($newsItems as $item): ?>
        <span class="ticker-item">
          <?= htmlspecialchars($item) ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php endif; ?>