document.addEventListener('DOMContentLoaded', () => {
  // Close mobile offcanvas when a menu item is clicked.
  document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
      const mobileMenu = document.getElementById('mobileMenu');
      if (!mobileMenu || typeof bootstrap === 'undefined') return;

      const offcanvas = bootstrap.Offcanvas.getInstance(mobileMenu);
      if (offcanvas) offcanvas.hide();
    });
  });

  // News ticker: pause animation on hover.
  document.querySelectorAll('.news-ticker').forEach(ticker => {
    const track = ticker.querySelector('.ticker-track');
    if (!track) return;

    ticker.addEventListener('mouseenter', () => {
      track.style.animationPlayState = 'paused';
    });
    ticker.addEventListener('mouseleave', () => {
      track.style.animationPlayState = 'running';
    });
  });
});

// Keynote speaker page: keep existing inline onclick="toggleProfile(id)" working.
window.toggleProfile = (id) => {
  const profile = document.getElementById('profile-' + id);
  if (!profile) return;

  const btn = profile.nextElementSibling;
  profile.classList.toggle('expanded');

  if (btn && btn.tagName === 'BUTTON') {
    btn.innerText = profile.classList.contains('expanded') ? 'Read Less' : 'Read More';
  }
};