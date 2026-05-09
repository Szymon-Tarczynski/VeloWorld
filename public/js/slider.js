/* slider.js — uniwersalny slider (percent + opcjonalnie pixels) */
(function () {
  "use strict";

  function initSlider(opts) {
    opts = opts || {};

    var track = document.getElementById(opts.trackId);
    if (!track) return;

    var btnPrev = document.getElementById(opts.prevId);
    var btnNext = document.getElementById(opts.nextId);
    var elCurrent = document.getElementById(opts.currentId);
    var elTotal = document.getElementById(opts.totalId);

    var slideSelector = opts.slideSelector || ".slider-slide";
    var slides = track.querySelectorAll(slideSelector);
    var total = slides.length;
    var current = 0;

    if (elTotal) elTotal.textContent = total;

    function applyTransform() {
      // domyślnie: percent (100% szerokości slajdu)
      if (!opts.mode || opts.mode === "percent") {
        track.style.transform = "translateX(-" + current * 100 + "%)";
        return;
      }

      // opcjonalnie: pixels (np. kafelki kolorów)
      if (opts.mode === "pixels") {
        var step = Number(opts.stepPx || 0);
        if (!step) {
          var first = slides[0];
          var gap = 0;
          try {
            gap = parseFloat(getComputedStyle(track).gap) || 0;
          } catch (e) {}
          step = (first ? first.getBoundingClientRect().width : 0) + gap;
        }
        track.style.transform = "translateX(-" + current * step + "px)";
      }
    }

    function goTo(index) {
      if (total === 0) return;

      current = (index + total) % total; // loop
      applyTransform();

      if (elCurrent) elCurrent.textContent = current + 1;
    }

    if (btnPrev) btnPrev.addEventListener("click", function () { goTo(current - 1); });
    if (btnNext) btnNext.addEventListener("click", function () { goTo(current + 1); });

    goTo(0);
  }

  // eksport do globala 
  window.initSlider = initSlider;

  // auto-init dla głównego slidera poradników (ID jak w Twoim HTML)
  document.addEventListener("DOMContentLoaded", function () {
    initSlider({
      trackId: "sliderTrack",
      prevId: "sliderPrev",
      nextId: "sliderNext",
      currentId: "sliderCurrent",
      totalId: "sliderTotal",
      slideSelector: ".slider-slide",
      // mode domyślne = percent
    });
  });
})();