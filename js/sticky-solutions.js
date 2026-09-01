/**
 * Sticky Solutions — Scroll-driven step controller
 *
 * Uses JS-based positioning instead of CSS position:sticky
 * because body { overflow-x: hidden } in main-LTR.css
 * breaks native sticky behavior.
 *
 * How it works:
 * 1. On scroll, calculates if the section is in view
 * 2. When in view, switches media-sticky to position:fixed
 * 3. When scrolled past, pins it at the bottom
 * 4. IntersectionObserver cross-fades images based on active step
 */
(function () {
  'use strict';

  function init() {
    if (document.body.classList.contains('home-page')) {
      initHomeFlipCards();
      return;
    }

    var section = document.querySelector('.sticky-solutions');
    if (!section) return;

    var steps = Array.from(section.querySelectorAll('.sticky-solutions__step'));
    var images = Array.from(section.querySelectorAll('.sticky-solutions__media-img'));
    var partners = Array.from(section.querySelectorAll('.sticky-solutions__partners-layer'));
    var mediaCol = section.querySelector('.sticky-solutions__media-col');
    var mediaStickyEl = section.querySelector('.sticky-solutions__media-sticky');

    if (!steps.length || !images.length || !mediaCol || !mediaStickyEl) return;

    // --- Activate a step by index ---
    function activate(index) {
      for (var i = 0; i < steps.length; i++) {
        if (i === index) {
          steps[i].classList.add('is-active');
        } else {
          steps[i].classList.remove('is-active');
        }
      }
      for (var j = 0; j < images.length; j++) {
        if (j === index) {
          images[j].classList.add('is-active');
        } else {
          images[j].classList.remove('is-active');
        }
      }
      for (var p = 0; p < partners.length; p++) {
        if (p === index) {
          partners[p].classList.add('is-active');
        } else {
          partners[p].classList.remove('is-active');
        }
      }
    }

    activate(0);

    // --- Mobile: skip everything, show all ---
    function isMobile() {
      return window.innerWidth <= 991;
    }

    if (isMobile()) {
      for (var k = 0; k < steps.length; k++) {
        steps[k].classList.add('is-active');
      }
      return;
    }

    // --- Scroll-driven activation for sticky stacked cards ---
    function updateActiveStep() {
      if (isMobile()) return;
      var viewH = window.innerHeight;
      var baseOffset = viewH * 0.2; // 20vh

      // Iterate backwards to find the topmost card that has reached its sticky position
      var activeIndex = 0;
      for (var i = steps.length - 1; i >= 0; i--) {
        var rect = steps[i].getBoundingClientRect();
        var stickyOffset = baseOffset + (i * 30);
        // If the card is at or above its sticky offset (allowing 2px for rounding)
        if (rect.top <= stickyOffset + 2) {
          activeIndex = i;
          break;
        }
      }
      activate(activeIndex);
    }

    // --- JS-based "sticky" for the media column ---
    // Because body overflow-x:hidden breaks CSS position:sticky
    var colWidth = mediaCol.offsetWidth;
    var textCol = section.querySelector('.sticky-solutions__text-col');

    function updateStickyMedia() {
      if (isMobile()) {
        mediaStickyEl.style.position = '';
        mediaStickyEl.style.top = '';
        mediaStickyEl.style.left = '';
        mediaStickyEl.style.width = '';
        if (textCol) textCol.style.paddingBottom = '';
        return;
      }

      // Dynamically adjust padding-bottom so the container ends exactly 
      // when the last card reaches its sticky position.
      // This keeps the left image and the final card perfectly aligned as they scroll away.
      if (textCol && steps.length > 0) {
        var lastCard = steps[steps.length - 1];
        var stickyTop = (window.innerHeight * 0.2) + ((steps.length - 1) * 30);
        var requiredPadding = window.innerHeight - stickyTop - lastCard.offsetHeight;
        textCol.style.paddingBottom = Math.max(0, requiredPadding) + 'px';
      }

      var bodyRect = section.querySelector('.sticky-solutions__body');
      if (!bodyRect) return;

      var bodyTop = bodyRect.getBoundingClientRect().top;
      var bodyBottom = bodyRect.getBoundingClientRect().bottom;
      var viewH = window.innerHeight;

      colWidth = mediaCol.offsetWidth;

      if (bodyTop <= 0 && bodyBottom > viewH) {
        // Section is in scroll range: fix the media in the viewport
        mediaStickyEl.style.position = 'fixed';
        mediaStickyEl.style.top = '0';
        mediaStickyEl.style.left = mediaCol.getBoundingClientRect().left + 'px';
        mediaStickyEl.style.width = colWidth + 'px';
      } else if (bodyBottom <= viewH) {
        // Scrolled past: pin at the bottom of the body
        mediaStickyEl.style.position = 'absolute';
        mediaStickyEl.style.top = (bodyRect.scrollHeight - viewH) + 'px';
        mediaStickyEl.style.left = '0';
        mediaStickyEl.style.width = colWidth + 'px';
      } else {
        // Haven't reached section yet: normal flow
        mediaStickyEl.style.position = 'absolute';
        mediaStickyEl.style.top = '0';
        mediaStickyEl.style.left = '0';
        mediaStickyEl.style.width = colWidth + 'px';
      }
    }

    // Initial call
    updateStickyMedia();
    updateActiveStep();

    // Scroll handler (throttled with rAF)
    var ticking = false;
    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(function () {
          updateStickyMedia();
          updateActiveStep();
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });

    // Resize handler
    window.addEventListener('resize', function () {
      updateStickyMedia();
      updateActiveStep();
    });
  }

  function initHomeFlipCards() {
    var cards = Array.from(document.querySelectorAll('.home-page .sticky-solutions__step'));
    if (!cards.length) return;

    cards.forEach(function (card) {
      var inner = document.createElement('div');
      var front = document.createElement('div');
      var back = document.createElement('div');
      var descriptions = Array.from(card.querySelectorAll('.sticky-solutions__step-desc'));

      inner.className = 'sticky-solutions__card-inner';
      front.className = 'sticky-solutions__card-front';
      back.className = 'sticky-solutions__card-back';
      back.setAttribute('aria-hidden', 'true');

      while (card.firstChild) {
        front.appendChild(card.firstChild);
      }

      descriptions.forEach(function (description) {
        var backDescription = document.createElement('p');
        backDescription.className = 'sticky-solutions__back-desc';
        backDescription.textContent = description.textContent;
        back.appendChild(backDescription);
      });

      inner.appendChild(front);
      inner.appendChild(back);
      card.appendChild(inner);
      card.setAttribute('role', 'button');
      card.setAttribute('tabindex', '0');
      card.setAttribute('aria-pressed', 'false');

      function toggleFlip() {
        var flipped = card.classList.toggle('flipped');
        card.setAttribute('aria-pressed', String(flipped));
        back.setAttribute('aria-hidden', String(!flipped));
        front.setAttribute('aria-hidden', String(flipped));
      }

      card.addEventListener('click', toggleFlip);
      card.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          toggleFlip();
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

