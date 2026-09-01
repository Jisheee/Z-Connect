(function () {
  'use strict';

  function init() {
    if (!document.body.classList.contains('home-page')) return;

    var cards = Array.from(document.querySelectorAll('.js-gallery-card'));
    if (!cards.length) return;

    var galleries = {};
    cards.forEach(function (card) {
      var galleryName = card.dataset.gallery;
      if (!galleries[galleryName]) galleries[galleryName] = [];
      galleries[galleryName].push(card);
    });

    var lightbox = document.createElement('div');
    lightbox.className = 'achievement-lightbox';
    lightbox.setAttribute('role', 'dialog');
    lightbox.setAttribute('aria-modal', 'true');
    lightbox.setAttribute('aria-label', 'Achievement gallery');
    lightbox.innerHTML = '' +
      '<button class="achievement-lightbox__close" type="button" aria-label="Close gallery">&times;</button>' +
      '<button class="achievement-lightbox__previous" type="button" aria-label="Previous item">&#8249;</button>' +
      '<div class="achievement-lightbox__card-stage"></div>' +
      '<button class="achievement-lightbox__next" type="button" aria-label="Next item">&#8250;</button>' +
      '<div class="achievement-lightbox__counter" aria-live="polite"></div>';
    document.body.appendChild(lightbox);

    var cardStage = lightbox.querySelector('.achievement-lightbox__card-stage');
    var counter = lightbox.querySelector('.achievement-lightbox__counter');
    var activeGallery = [];
    var activeIndex = 0;
    var lastFocusedCard = null;

    function fitCardToViewport() {
      var card = cardStage.firstElementChild;
      if (!card) return;

      card.style.transform = 'none';
      var availableWidth = window.innerWidth - 140;
      var availableHeight = window.innerHeight - 160;
      var scale = Math.min(1.12, availableWidth / card.offsetWidth, availableHeight / card.offsetHeight);
      card.style.transform = 'scale(' + Math.max(0.1, scale) + ')';
    }

    function showItem(index) {
      activeIndex = (index + activeGallery.length) % activeGallery.length;
      var card = activeGallery[activeIndex];
      var enlargedCard = card.cloneNode(true);
      enlargedCard.classList.remove('js-gallery-card');
      enlargedCard.removeAttribute('data-gallery');
      enlargedCard.removeAttribute('data-gallery-src');
      enlargedCard.removeAttribute('role');
      enlargedCard.removeAttribute('tabindex');
      enlargedCard.removeAttribute('aria-pressed');
      cardStage.replaceChildren(enlargedCard);
      counter.textContent = (activeIndex + 1) + ' / ' + activeGallery.length;
      requestAnimationFrame(fitCardToViewport);
    }

    function open(card) {
      activeGallery = galleries[card.dataset.gallery];
      lastFocusedCard = card;
      showItem(activeGallery.indexOf(card));
      lightbox.classList.add('is-open');
      document.body.classList.add('achievement-lightbox-open');
      lightbox.querySelector('.achievement-lightbox__close').focus();
    }

    function close() {
      lightbox.classList.remove('is-open');
      document.body.classList.remove('achievement-lightbox-open');
      cardStage.replaceChildren();
      if (lastFocusedCard) lastFocusedCard.focus();
    }

    cards.forEach(function (card) {
      card.addEventListener('click', function () { open(card); });
      card.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          open(card);
        }
      });
    });

    lightbox.querySelector('.achievement-lightbox__close').addEventListener('click', close);
    lightbox.querySelector('.achievement-lightbox__previous').addEventListener('click', function () {
      showItem(activeIndex - 1);
    });
    lightbox.querySelector('.achievement-lightbox__next').addEventListener('click', function () {
      showItem(activeIndex + 1);
    });
    lightbox.addEventListener('click', function (event) {
      if (event.target === lightbox) close();
    });
    document.addEventListener('keydown', function (event) {
      if (!lightbox.classList.contains('is-open')) return;
      if (event.key === 'Escape') close();
      if (event.key === 'ArrowLeft') showItem(activeIndex - 1);
      if (event.key === 'ArrowRight') showItem(activeIndex + 1);
    });
    window.addEventListener('resize', function () {
      if (lightbox.classList.contains('is-open')) fitCardToViewport();
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
