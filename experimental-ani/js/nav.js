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

  // Hover captions — short scientific one-liners
  var captions = {
    'lechal': 'Haptic wearable satellite navigation',
    'jackboy': 'Modular audio-jack sensor platform',
    'air-synth': 'Electrochemical CO\u2082-to-ethanol reactor',
    'air-ink': 'Carbon capture to pigment upcycling',
    'glassified': 'AR pen-stroke sensing on transparent OLED',
    'chalkaat': 'AR-guided laser fabrication',
    'mozart': 'Multimodal gesture-driven 3D CAD',
    'ballshooter': 'IR laser-plane multitouch surface',
    'zixel': '2.5D pin-actuated tactile display',
    'heartbeat': 'Acoustic cardiac signal processing',
    'tessellations': 'Kinematic tessellation casting',
    'nostalgia': 'Algorithmic affective environment',
    'soundscape': 'Embodied waveform sound sculpture',
    'in-toilet': 'In-situ urinalysis advisory system'
  };
  links.forEach(function (link) {
    var href = link.getAttribute('href') || '';
    var keys = Object.keys(captions);
    for (var i = 0; i < keys.length; i++) {
      if (href.indexOf(keys[i]) !== -1) {
        link.setAttribute('data-caption', captions[keys[i]]);
        break;
      }
    }
  });
})();
