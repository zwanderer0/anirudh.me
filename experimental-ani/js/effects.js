/* Entrance stagger + scroll reveal */
(function () {
  /* Nav cascade indices */
  var navItems = document.querySelectorAll('.nav__item, .nav__category');
  navItems.forEach(function (el, i) {
    el.style.setProperty('--i', i);
  });

  /* Grid card stagger indices */
  document.querySelectorAll('.grid__card').forEach(function (card, i) {
    card.style.setProperty('--card-i', i);
  });

  /* Scroll reveal — only elements below the fold */
  var selectors = [
    '.project__media',
    '.project__aside',
    '.project__results',
    '.project__citation',
    '.project__section',
    '.project__details',
    '.project__body > p',
    '.project__nav'
  ];

  var els = document.querySelectorAll(selectors.join(','));
  var viewH = window.innerHeight;

  if (!('IntersectionObserver' in window)) {
    return; /* no observer = everything stays visible */
  }

  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('reveal--visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.08,
    rootMargin: '0px 0px -32px 0px'
  });

  els.forEach(function (el) {
    var rect = el.getBoundingClientRect();
    if (rect.top > viewH * 0.85) {
      el.classList.add('reveal');
      observer.observe(el);
    }
  });
})();
