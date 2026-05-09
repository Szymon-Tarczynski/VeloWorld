// ─────────────────────────────────────────
// LIGHTBOX + LUPA NAKLEJEK (DODANE) — POPRAWIONE
// - blokada scrolla strony podczas lightboxa
// ─────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {
  const lb = document.getElementById('stickerLightbox');
  if (!lb) return;

  const imgEl = document.getElementById('stickerLightboxImg');
  const titleEl = document.getElementById('stickerLightboxTitle');
  const stage = document.getElementById('stickerStage');
  const lens = document.getElementById('stickerLens');
  const zoomBox = document.getElementById('stickerZoom');

  let zoom = 2;

  // ✅ blokada scrolla
  let scrollY = 0;

  function clamp(v, min, max) { return Math.max(min, Math.min(max, v)); }

  function applyZoom() {
    const z = clamp(zoom, 1.5, 5);
    zoomBox.style.backgroundSize = `${z * 100}% ${z * 100}%`;
  }

  function lockScroll() {
    scrollY = window.scrollY || document.documentElement.scrollTop || 0;
    document.body.classList.add('modal-lock');
    document.body.style.position = 'fixed';
    document.body.style.top = `-${scrollY}px`;
    document.body.style.left = '0';
    document.body.style.right = '0';
    document.body.style.width = '100%';
  }

  function unlockScroll() {
    document.body.classList.remove('modal-lock');
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.left = '';
    document.body.style.right = '';
    document.body.style.width = '';
    window.scrollTo(0, scrollY);
  }

  function openLightbox(src, titleText) {
    imgEl.src = src;
    if (titleEl) titleEl.textContent = titleText || 'Podgląd naklejki';

    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden', 'false');

    // ✅ blokuj scroll tła
    lockScroll();

    imgEl.onload = () => {
      zoom = 2;
      zoomBox.style.backgroundImage = `url("${src}")`;
      zoomBox.style.display = 'block';
      lens.style.display = 'block';
      applyZoom();
    };
  }

  function closeLightbox() {
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden', 'true');
    lens.style.display = 'none';
    zoomBox.style.display = 'none';
    imgEl.src = '';

    // ✅ odblokuj scroll tła
    unlockScroll();
  }

  function moveMagnifier(e) {
    const rect = imgEl.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    if (x < 0 || y < 0 || x > rect.width || y > rect.height) {
      lens.style.display = 'none';
      return;
    }
    lens.style.display = 'block';

    const lensW = lens.offsetWidth;
    const lensH = lens.offsetHeight;

    const lx = clamp(x - lensW / 2, 0, rect.width - lensW);
    const ly = clamp(y - lensH / 2, 0, rect.height - lensH);

    // pozycja soczewki względem stage
    const imgOffsetLeft = imgEl.offsetLeft;
    const imgOffsetTop = imgEl.offsetTop;

    lens.style.left = (imgOffsetLeft + lx) + 'px';
    lens.style.top = (imgOffsetTop + ly) + 'px';

    // tło w oknie powiększenia
    const rx = (x / rect.width) * 100;
    const ry = (y / rect.height) * 100;
    zoomBox.style.backgroundPosition = `${rx}% ${ry}%`;
  }

  // klik w naklejkę (działa też w figure)
  document.addEventListener('click', function (e) {
    const img = e.target.closest('.stickers-grid img');
    if (!img) return;

    const src = img.getAttribute('src');
    const caption = img.closest('figure')?.querySelector('.sticker-name')?.textContent?.trim();
    openLightbox(src, caption || img.alt || 'Podgląd naklejki');
  });

  // zamykanie (klik w tło lub X)
  lb.addEventListener('click', function (e) {
    if (e.target.matches('[data-close]') || e.target.closest('[data-close]')) closeLightbox();
  });

  // ESC
  document.addEventListener('keydown', function (e) {
    if (!lb.classList.contains('is-open')) return;
    if (e.key === 'Escape') closeLightbox();
  });

  // lupa: hover po stage
  stage.addEventListener('mousemove', moveMagnifier);
  stage.addEventListener('mouseleave', () => { lens.style.display = 'none'; });

  // zoom kółkiem myszy (bez + i -)
  stage.addEventListener('wheel', function (e) {
    if (!lb.classList.contains('is-open')) return;
    e.preventDefault();
    zoom = clamp(zoom + (e.deltaY < 0 ? 0.25 : -0.25), 1.5, 5);
    applyZoom();
  }, { passive: false });
});