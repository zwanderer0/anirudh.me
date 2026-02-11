/* Hamburger toggle + active state highlighting */
(function () {
  const toggle = document.querySelector('.nav__toggle');
  const nav = document.querySelector('.nav');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    const isOpen = nav.classList.toggle('nav--open');
    toggle.classList.toggle('nav__toggle--open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen);
  });

  // Close nav on backdrop click (mobile)
  nav.addEventListener('click', function (e) {
    if (e.target === nav && nav.classList.contains('nav--open')) {
      nav.classList.remove('nav--open');
      toggle.classList.remove('nav__toggle--open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // Highlight active link based on current page
  const currentPath = window.location.pathname;
  const links = document.querySelectorAll('.nav__link');
  links.forEach(function (link) {
    const href = link.getAttribute('href');
    if (!href) return;
    // Normalize paths for comparison
    const linkPath = new URL(href, window.location.origin).pathname;
    if (linkPath === currentPath ||
        (currentPath.endsWith('/') && linkPath === currentPath + 'index.html') ||
        currentPath.endsWith(linkPath.split('/').pop())) {
      link.classList.add('nav__link--active');
    }
  });
})();
