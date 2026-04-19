// ===== TINDER LOGIKA =====
let deck = typeof ALL_BIKES !== 'undefined' ? [...ALL_BIKES] : [];
let idx = 0;
let liked = [];

// ---------- Render karty ----------
function showCard(i) {
  const done = document.getElementById('tinderDone');
  const card = document.getElementById('bikeCard');
  if (!card) return;

  if (i >= deck.length) {
    if (done) done.style.display = 'block';
    card.style.display = 'none';
    const btns = document.querySelector('.tinder-btns');
    if (btns) btns.style.display = 'none';
    return;
  }

  if (done) done.style.display = 'none';
  card.style.display = '';
  const btns = document.querySelector('.tinder-btns');
  if (btns) btns.style.display = '';

  const b = deck[i];
  const imgEl = document.getElementById('bikeImg');

  // Obrazek lub emoji
  if (b.image) {
    imgEl.innerHTML = `<img src="${b.image}" alt="${b.name}" style="width:100%;height:100%;object-fit:cover">`;
  } else {
    imgEl.innerHTML = `<span class="tinder-emoji">${b.emoji || '🚲'}</span>`;
  }

  // Płeć → data-gender na karcie (CSS dobiera kolory tagów i badge)
  card.dataset.gender = b.gender || '';

  // Badge płci w rogu (tak jak w klasycznych kartach)
  let badge = card.querySelector('.tinder-gender-badge');
  if (!badge) {
    badge = document.createElement('span');
    badge.className = 'tinder-gender-badge product-cat-badge';
    card.appendChild(badge);
  }
  const genderClass = {
    'Damski': 'product-cat-badge--damski',
    'Męski': 'product-cat-badge--meski',
    'Unisex': 'product-cat-badge--unisex',
  };
  badge.className = 'tinder-gender-badge product-cat-badge ' + (genderClass[b.gender] || '');
  badge.textContent = b.gender || '';
  badge.style.display = b.gender ? '' : 'none';

  // Treść
  document.getElementById('bikeName').textContent = b.name || '';
  document.getElementById('bikeCat').textContent = b.cat || '';
  document.getElementById('bikePrice').textContent = b.price || '';
  document.getElementById('bikeTags').innerHTML =
    (b.tags || []).filter(Boolean)
      .map(t => `<span class="tinder-tag">${t}</span>`)
      .join('');
  document.getElementById('tinderProgress').textContent = (i + 1) + ' / ' + deck.length;

  card.style.transform = 'none';
  card.style.opacity = '1';
  card.style.transition = '';
  document.getElementById('likeOv').style.opacity = '0';
  document.getElementById('nopeOv').style.opacity = '0';
}

function resetDeck() {
  deck = typeof ALL_BIKES !== 'undefined' ? [...ALL_BIKES] : [];
  idx = 0;
  const card = document.getElementById('bikeCard');
  if (card) card.style.display = '';
  const btns = document.querySelector('.tinder-btns');
  if (btns) btns.style.display = '';
  showCard(0);
}

// ---------- Swipe ----------
function swipeCard(dir) {
  const card = document.getElementById('bikeCard');
  if (!card || idx >= deck.length) return;

  card.style.transition = 'transform 0.35s ease, opacity 0.35s ease';
  card.style.transform = dir === 'like' ? 'translateX(500px) rotate(20deg)' : 'translateX(-500px) rotate(-20deg)';
  card.style.opacity = '0';

  if (dir === 'like') addLiked(deck[idx]);

  setTimeout(() => { idx++; showCard(idx); }, 360);
}

function swipeAction(act) { swipeCard(act === 'like' ? 'like' : 'skip'); }

// ---------- Ulubione ----------
function addLiked(b) {
  if (liked.find(x => x.id === b.id)) return;
  liked.push(b);
  updateBadge();
  if (document.getElementById('likedPanel').classList.contains('open')) renderLiked();
}

function updateBadge() {
  const badge = document.getElementById('cartBadge');
  if (!badge) return;
  badge.textContent = liked.length;
  badge.style.display = liked.length ? 'flex' : 'none';
}

function renderLiked() {
  document.getElementById('likedTitle').textContent = 'Ulubione (' + liked.length + ')';
  const el = document.getElementById('likedContent');
  if (!liked.length) { el.innerHTML = '<p class="slp-empty">Jeszcze nic nie polubiłeś</p>'; return; }
  el.innerHTML = '<div class="slp-grid">' + liked.map(b => `
    <div class="slp-item">
      <button class="slp-remove" onclick="removeLiked(${b.id})">✕</button>
      <span class="slp-emoji">${b.emoji || '🚲'}</span>
      <div class="slp-name">${b.name || ''}</div>
      <div class="slp-price">${b.price || ''}</div>
    </div>`).join('') + '</div>';
}

function removeLiked(id) {
  liked = liked.filter(x => x.id !== id);
  updateBadge();
  renderLiked();
}

function toggleCart() {
  const p = document.getElementById('likedPanel');
  const btn = document.getElementById('cartBtn');
  p.classList.toggle('open');
  btn.classList.toggle('active');
  if (p.classList.contains('open')) renderLiked();
}

// ===== PANEL FILTRÓW =====
function toggleFilters() {
  document.getElementById('filterPanel').classList.toggle('open');
  document.getElementById('filterBtn').classList.toggle('active');
}

document.addEventListener('DOMContentLoaded', () => {
  // Pills → aktualizuj hidden input
  document.querySelectorAll('.sfp-pills').forEach(group => {
    const name = group.dataset.name;
    const input = group.closest('form')?.querySelector(`input[name="${name}"]`);
    group.querySelectorAll('.sfp-pill').forEach(pill => {
      pill.addEventListener('click', function () {
        group.querySelectorAll('.sfp-pill').forEach(p => p.classList.remove('active'));
        this.classList.add('active');
        if (input) input.value = this.dataset.val;
      });
    });
  });

  // Inicjalizacja tindera
  if (document.getElementById('tinderArea')) {
    showCard(0);
  }
});