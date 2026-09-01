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
    var section = document.querySelector('.sticky-solutions');
    if (!section) return;

    var folderTabs = Array.from(section.querySelectorAll('.folder-solutions__tab'));
    var folderPanels = Array.from(section.querySelectorAll('.folder-solutions__panel'));
    if (folderTabs.length && folderPanels.length) {
      var legacyPartners = Array.from(section.querySelectorAll('.sticky-solutions__partners-layer'));
      legacyPartners.forEach(function (partnerLayer, index) {
        var partnerSlot = section.querySelector('[data-folder-partners="' + index + '"]');
        if (partnerSlot && partnerLayer.querySelector('.partner-logo')) {
          partnerLayer.classList.remove('is-active');
          partnerSlot.appendChild(partnerLayer);
        }
      });

      folderTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
          var index = tab.getAttribute('data-folder-index');
          folderTabs.forEach(function (item) {
            var active = item === tab;
            item.classList.toggle('is-active', active);
            item.setAttribute('aria-selected', active ? 'true' : 'false');
          });
          folderPanels.forEach(function (panel) {
            var active = panel.getAttribute('data-folder-panel') === index;
            panel.hidden = !active;
            panel.classList.toggle('is-active', active);
          });
          section.querySelectorAll('[data-folder-partners]').forEach(function (slot) {
            var active = slot.getAttribute('data-folder-partners') === index;
            slot.querySelectorAll('.sticky-solutions__partners-layer').forEach(function (layer) {
              layer.classList.toggle('is-active', active);
            });
          });
        });
      });
      var firstPartner = section.querySelector('[data-folder-partners="0"] .sticky-solutions__partners-layer');
      if (firstPartner) firstPartner.classList.add('is-active');
      return;
    }

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

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();

