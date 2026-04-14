const ALL_BIKES = [
    { id: 1, name: "Trek Marlin 7", cat: "Rower górski", gender: "Męski", type: "Zwykły", frame: "L", wheel: '29"', price: "3 499 zł", emoji: "🚵", tags: ['29"', 'Rama L', 'Amortyzacja'] },
    { id: 2, name: "Specialized Turbo", cat: "Rower miejski", gender: "Unisex", type: "Elektryczny", frame: "M", wheel: "700c", price: "7 999 zł", emoji: "⚡🚲", tags: ['700c', 'Rama M', '250W'] },
    { id: 3, name: "Giant Contend AR", cat: "Rower szosowy", gender: "Unisex", type: "Zwykły", frame: "M", wheel: "700c", price: "4 299 zł", emoji: "🚴", tags: ['700c', 'Rama M', 'Shimano'] },
    { id: 4, name: "Kross Lea Lady", cat: "Rower miejski", gender: "Damski", type: "Zwykły", frame: "S", wheel: '27.5"', price: "1 299 zł", emoji: "🌸🚲", tags: ['27.5"', 'Rama S', '7 biegów'] },
    { id: 5, name: "Cube Attention", cat: "Rower górski", gender: "Unisex", type: "Zwykły", frame: "XL", wheel: '29"', price: "2 799 zł", emoji: "🏔️", tags: ['29"', 'Rama XL'] },
    { id: 6, name: "Merida eOne-Sixty", cat: "Rower górski", gender: "Męski", type: "Elektryczny", frame: "L", wheel: '27.5"', price: "12 499 zł", emoji: "⚡🏔️", tags: ['27.5"', '630Wh', 'Full-sus'] },
    { id: 7, name: "Kellys Clea", cat: "Rower trekkingowy", gender: "Damski", type: "Zwykły", frame: "XS", wheel: '26"', price: "999 zł", emoji: "🌺", tags: ['26"', 'Rama XS', 'Damski'] },
    { id: 8, name: "Canyon Endurace", cat: "Rower szosowy", gender: "Unisex", type: "Zwykły", frame: "M", wheel: "700c", price: "5 199 zł", emoji: "🏁", tags: ['700c', 'Karbon'] },
];

let deck = [...ALL_BIKES];
let idx = 0;
let liked = [];

// ── wyświetl kartę ──
function showCard(i) {
    if (i >= deck.length) { showDone(); return; }
    const b = deck[i];
    document.getElementById('bikeEmoji').textContent = b.emoji;
    document.getElementById('bikeName').textContent = b.name;
    document.getElementById('bikeCat').textContent = b.cat + ' • ' + b.gender;
    document.getElementById('bikePrice').textContent = b.price;
    document.getElementById('bikeTags').innerHTML = b.tags.map(t => `<span class="tinder-tag">${t}</span>`).join('');
    document.getElementById('tinderProgress').textContent = (i + 1) + ' / ' + deck.length;
    const card = document.getElementById('bikeCard');
    card.style.transform = 'none';
    card.style.opacity = '1';
    document.getElementById('likeOv').style.opacity = '0';
    document.getElementById('nopeOv').style.opacity = '0';
}

function showDone() {
    document.getElementById('tinderArea').style.display = 'none';
    document.getElementById('tinderDone').style.display = 'block';
}

// ── animacja swipe ──
function swipeCard(dir) {
    const card = document.getElementById('bikeCard');
    card.style.transition = 'transform 0.35s ease, opacity 0.35s ease';
    card.style.transform = dir === 'like' ? 'translateX(500px) rotate(20deg)' : 'translateX(-500px) rotate(-20deg)';
    card.style.opacity = '0';
    if (dir === 'like') addLiked(deck[idx]);
    setTimeout(() => {
        card.style.transition = '';
        idx++;
        showCard(idx);
    }, 360);
}

function swipeAction(act) { swipeCard(act === 'like' ? 'like' : 'skip'); }

// ── ulubione ──
function addLiked(b) {
    if (liked.find(x => x.id === b.id)) return;
    liked.push(b);
    updateBadge();
    if (document.getElementById('likedPanel').classList.contains('open')) renderLiked();
}

function updateBadge() {
    const badge = document.getElementById('cartBadge');
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
      <span class="slp-emoji">${b.emoji}</span>
      <div class="slp-name">${b.name}</div>
      <div class="slp-price">${b.price}</div>
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

function toggleFilters() {
    document.getElementById('filterPanel').classList.toggle('open');
    document.getElementById('filterBtn').classList.toggle('active');
}

// ── filtry – klik na pill ──
document.querySelectorAll('.sfp-pills').forEach(group => {
    group.querySelectorAll('.sfp-pill').forEach(pill => {
        pill.addEventListener('click', function () {
            group.querySelectorAll('.sfp-pill').forEach(p => p.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

function applyFilters() {
    const size = document.querySelector('#sizeFilter  .sfp-pill.active').dataset.val;
    const wheel = document.querySelector('#wheelFilter .sfp-pill.active').dataset.val;
    const type = document.querySelector('#typeFilter  .sfp-pill.active').dataset.val;
    const gender = document.querySelector('#genderFilter .sfp-pill.active').dataset.val;

    deck = ALL_BIKES.filter(b => {
        if (size && b.frame !== size) return false;
        if (wheel && b.wheel !== wheel) return false;
        if (type && b.type !== type) return false;
        if (gender && b.gender !== gender) return false;
        return true;
    });

    if (!deck.length) deck = [...ALL_BIKES]; // fallback – brak wyników → pokaż wszystkie

    idx = 0;
    document.getElementById('tinderArea').style.display = 'flex';
    document.getElementById('tinderDone').style.display = 'none';
    showCard(0);
    document.getElementById('filterPanel').classList.remove('open');
    document.getElementById('filterBtn').classList.remove('active');
}

function resetDeck() {
    deck = [...ALL_BIKES]; idx = 0;
    document.getElementById('tinderDone').style.display = 'none';
    document.getElementById('tinderArea').style.display = 'flex';
    showCard(0);
}

// ── search bar (tylko na page=shop) ──

const page = new URLSearchParams(window.location.search).get("page") || "home";
if (page === "shop") {
  const searchInput = document.getElementById('smartSearch'); // <- jeden wspólny input
  if (searchInput) {
    searchInput.addEventListener('input', function () {
      const q = this.value.trim().toLowerCase();

      deck = q
        ? ALL_BIKES.filter(b => {
            const hay = (b.name + " " + b.cat + " " + (b.tags || []).join(" ")).toLowerCase();
            return hay.includes(q);
          })
        : [...ALL_BIKES];

      if (!deck.length) deck = [...ALL_BIKES];
      idx = 0;
      document.getElementById('tinderArea').style.display = 'flex';
      document.getElementById('tinderDone').style.display = 'none';
      showCard(0);
    });
  }
}

// ── drag mysz ──
const card = document.getElementById('bikeCard');
let isDragging = false, startX = 0, curX = 0;

card.addEventListener('mousedown', e => { isDragging = true; startX = e.clientX; card.style.transition = 'none'; });
document.addEventListener('mousemove', e => {
    if (!isDragging) return;
    curX = e.clientX - startX;
    card.style.transform = `translateX(${curX}px) rotate(${curX * 0.07}deg)`;
    document.getElementById('likeOv').style.opacity = curX > 40 ? Math.min((curX - 40) / 60, 1) : 0;
    document.getElementById('nopeOv').style.opacity = curX < -40 ? Math.min((-curX - 40) / 60, 1) : 0;
});
document.addEventListener('mouseup', () => {
    if (!isDragging) return;
    isDragging = false;
    card.style.transition = '';
    if (curX > 100) swipeCard('like');
    else if (curX < -100) swipeCard('skip');
    else {
        card.style.transform = 'none';
        document.getElementById('likeOv').style.opacity = 0;
        document.getElementById('nopeOv').style.opacity = 0;
    }
    curX = 0;
});

// ── start ──
showCard(0);