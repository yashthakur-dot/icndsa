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

<!-- =========================
     NEWS TICKER STYLES
========================= -->
<style>
.news-ticker {
  font-size: 0.95rem;
  white-space: nowrap;
  border-bottom: 1px solid rgba(255,255,255,0.3);
}

.ticker-track {
  width: max-content;
  animation: ticker-scroll 30s linear infinite;
}

.ticker-item {
  padding-right: 4rem;
  font-weight: 500;
}

/* Animation */
@keyframes ticker-scroll {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}
</style>

<!-- =========================
     OPTIONAL UX: PAUSE ON HOVER
========================= -->
<script>
document.querySelectorAll('.news-ticker').forEach(ticker => {
  const track = ticker.querySelector('.ticker-track');
  ticker.addEventListener('mouseenter', () => {
    track.style.animationPlayState = 'paused';
  });
  ticker.addEventListener('mouseleave', () => {
    track.style.animationPlayState = 'running';
  });
});
</script>
<?php endif; ?>