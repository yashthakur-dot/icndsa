document.querySelectorAll('#mobileMenu a').forEach(link => {
  link.addEventListener('click', () => {
    const offcanvas = bootstrap.Offcanvas.getInstance(
      document.getElementById('mobileMenu')
    );
    if (offcanvas) offcanvas.hide();
  });
});