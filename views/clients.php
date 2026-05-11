<?php
$pageTitle = 'VeloWorld – Nasi klienci';
$pageCss   = 'clients.css';
$pageCss2  = 'centered.css';
?>
<?php include 'partials/topbar.php'; ?>

<main class="main-content main-content--center">

  <div class="clients-wrap">
    <h2 class="guide-title">Nasi klienci</h2>
    <p class="guide-intro">Co mówią o nas nasi klienci? Przeczytaj opinie i przeglądaj strzałkami.</p>

    <!-- ✅ SORT / FILTER -->
    <div class="clients-toolbar">
      <label class="clients-sort-label" for="clientsSort">Pokaż / Sortuj:</label>
      <select id="clientsSort" class="clients-sort">
        <option value="all" selected>Wszystkie (domyślnie)</option>

        <optgroup label="Sortowanie (wszystkie opinie)">
          <option value="sort-date-desc">Najnowsze</option>
          <option value="sort-date-asc">Najstarsze</option>
          <option value="sort-rating-desc">Ocena: od najwyższej</option>
          <option value="sort-rating-asc">Ocena: od najniższej</option>
        </optgroup>

        <optgroup label="Filtry ocen">
          <option value="filter-max">Najwyższe oceny (max)</option>
          <option value="filter-min">Najniższe oceny (min)</option>
          <option value="filter-rating-5">Tylko 5★</option>
          <option value="filter-rating-4">Tylko 4★</option>
          <option value="filter-rating-3">Tylko 3★</option>
          <option value="filter-rating-2">Tylko 2★</option>
          <option value="filter-rating-1">Tylko 1★</option>
        </optgroup>
      </select>
    </div>

    <!-- ✅ SLIDER – unikalne ID (żeby app.js nie dublował) -->
    <div class="slider" id="clientsSlider" data-slider-init="0">

      <div class="slider-nav">
        <button class="slider-arrow" id="clientsPrev" aria-label="Poprzednia opinia">&#8592;</button>

        <span class="slider-counter">
          <span id="clientsCurrent">1</span> /
          <span id="clientsTotal">1</span>
        </span>

        <button class="slider-arrow" id="clientsNext" aria-label="Następna opinia">&#8594;</button>
      </div>

      <div class="slider-window">
        <div class="slider-track" id="clientsTrack">

          <!-- ✅ OPINIE: masz teraz realnie 1..5 + dużo dat starych i nowych -->

          <!-- 5★ -->
          <article class="slider-slide slider-card client-card" data-rating="5" data-date="2026-05-09">
            <div class="client-avatar">👨</div><div class="client-name">Jan Kowalski</div>
            <div class="client-stars">★★★★★</div>
            <p class="client-opinion">Serwis na najwyższym poziomie. Rower po regulacji jeździ jak nowy. Polecam!</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="5" data-date="2026-05-01">
            <div class="client-avatar">👩</div><div class="client-name">Anna Nowak</div>
            <div class="client-stars">★★★★★</div>
            <p class="client-opinion">Obsługa profesjonalna, ceny uczciwe. Pomogli dobrać rower idealnie.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="5" data-date="2026-02-28">
            <div class="client-avatar">👩‍🦰</div><div class="client-name">Monika Wróbel</div>
            <div class="client-stars">★★★★★</div>
            <p class="client-opinion">Szybka diagnoza i naprawa. Dostałam konkretne wskazówki, co robić dalej.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="5" data-date="2025-11-18">
            <div class="client-avatar">🧑‍🎓</div><div class="client-name">Kamil Mazur</div>
            <div class="client-stars">★★★★★</div>
            <p class="client-opinion">Ustawienie pozycji zrobiło robotę — zero bólu pleców, super prowadzenie.</p>
          </article>

          <!-- 4★ -->
          <article class="slider-slide slider-card client-card" data-rating="4" data-date="2026-04-22">
            <div class="client-avatar">👨‍🦳</div><div class="client-name">Marek Wiśniewski</div>
            <div class="client-stars">★★★★☆</div>
            <p class="client-opinion">Szybka wymiana łańcucha i kasety. Miły kontakt, sprawna realizacja.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="4" data-date="2026-03-14">
            <div class="client-avatar">🧑</div><div class="client-name">Paweł Król</div>
            <div class="client-stars">★★★★☆</div>
            <p class="client-opinion">Geometria i zawieszenie ustawione pod styl jazdy — rower dużo stabilniejszy.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="4" data-date="2025-08-03">
            <div class="client-avatar">👩‍🦱</div><div class="client-name">Karolina Zielińska</div>
            <div class="client-stars">★★★★☆</div>
            <p class="client-opinion">Fajna robota, tylko termin mógłby być ciut krótszy. Efekt końcowy super.</p>
          </article>

          <!-- 3★ -->
          <article class="slider-slide slider-card client-card" data-rating="3" data-date="2026-02-10">
            <div class="client-avatar">👨‍🔧</div><div class="client-name">Tomasz Lewandowski</div>
            <div class="client-stars">★★★☆☆</div>
            <p class="client-opinion">Usługa OK, ale termin był długi. Sama naprawa wykonana porządnie.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="3" data-date="2025-04-12">
            <div class="client-avatar">👨</div><div class="client-name">Piotr Kaczmarek</div>
            <div class="client-stars">★★★☆☆</div>
            <p class="client-opinion">Wszystko działa, ale chciałbym lepszą komunikację co do kosztów przed serwisem.</p>
          </article>

          <!-- 2★ -->
          <article class="slider-slide slider-card client-card" data-rating="2" data-date="2024-09-09">
            <div class="client-avatar">👩</div><div class="client-name">Ewa Lis</div>
            <div class="client-stars">★★☆☆☆</div>
            <p class="client-opinion">Naprawa finalnie OK, ale musiałam wrócić na poprawkę. Dało się szybciej.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="2" data-date="2023-06-18">
            <div class="client-avatar">🧑</div><div class="client-name">Michał Rutkowski</div>
            <div class="client-stars">★★☆☆☆</div>
            <p class="client-opinion">Obsługa w porządku, ale czas realizacji i kontakt mogły być lepsze.</p>
          </article>

          <!-- 1★ -->
          <article class="slider-slide slider-card client-card" data-rating="1" data-date="2022-08-21">
            <div class="client-avatar">👤</div><div class="client-name">Anonim</div>
            <div class="client-stars">★☆☆☆☆</div>
            <p class="client-opinion">Do poprawy komunikacja i termin. Liczę na lepsze doświadczenie następnym razem.</p>
          </article>

          <article class="slider-slide slider-card client-card" data-rating="1" data-date="2021-11-02">
            <div class="client-avatar">👤</div><div class="client-name">Anonim 2</div>
            <div class="client-stars">★☆☆☆☆</div>
            <p class="client-opinion">Nie trafiłem z terminem i organizacją. Sama usługa była dopięta, ale proces nie.</p>
          </article>

        </div>
      </div>

    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>

<script>
(function(){
  const slider = document.getElementById('clientsSlider');
  if (!slider) return;

  // ✅ blokada podwójnej inicjalizacji (eliminuje "skoki o kilka")
  if (slider.dataset.sliderInit === '1') return;
  slider.dataset.sliderInit = '1';

  const track     = document.getElementById('clientsTrack');
  const prevBtn   = document.getElementById('clientsPrev');
  const nextBtn   = document.getElementById('clientsNext');
  const currentEl = document.getElementById('clientsCurrent');
  const totalEl   = document.getElementById('clientsTotal');
  const modeEl    = document.getElementById('clientsSort');

  const allSlides = Array.from(track.children).filter(el => el.classList.contains('slider-slide'));

  // metadane + indeks oryginalny (stabilne sortowanie)
  allSlides.forEach((el, i) => {
    el._orig = i;
    el._rating = Number(el.dataset.rating || 0);
    el._dateTs = Date.parse(el.dataset.date || '2000-01-01') || 0;
    el.style.minWidth = '100%';
  });

  track.style.display = 'flex';
  track.style.transition = 'transform .35s ease';

  const originalOrder = allSlides.slice();
  let activeSlides = originalOrder.slice();
  let index = 0;

  function reattach(list){
    const frag = document.createDocumentFragment();
    list.forEach(s => frag.appendChild(s));
    track.appendChild(frag);
  }

  function clampIndex(){
    if (index < 0) index = 0;
    if (index > activeSlides.length - 1) index = activeSlides.length - 1;
  }

  function update(){
    clampIndex();
    totalEl.textContent = activeSlides.length;
    currentEl.textContent = activeSlides.length ? (index + 1) : 0;
    track.style.transform = `translateX(-${index * 100}%)`;
    prevBtn.disabled = (index === 0 || activeSlides.length <= 1);
    nextBtn.disabled = (index === activeSlides.length - 1 || activeSlides.length <= 1);
  }

  // ✅ lock (żeby nie przeskakiwało podczas animacji)
  let lock = false;
  function step(dir){
    if (lock) return;
    lock = true;
    index += dir;
    update();
    setTimeout(() => lock = false, 260);
  }

  prevBtn.addEventListener('click', (e) => {
    e.preventDefault(); e.stopPropagation();
    if (e.stopImmediatePropagation) e.stopImmediatePropagation();
    step(-1);
  }, { passive:false });

  nextBtn.addEventListener('click', (e) => {
    e.preventDefault(); e.stopPropagation();
    if (e.stopImmediatePropagation) e.stopImmediatePropagation();
    step(1);
  }, { passive:false });

  function applyMode(mode){
    // powrót do domyślnego
    if (mode === 'all') {
      activeSlides = originalOrder.slice();
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }

    // SORT (wszystkie)
    if (mode === 'sort-date-desc') {
      activeSlides = originalOrder.slice().sort((a,b) => (b._dateTs - a._dateTs) || (a._orig - b._orig));
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
    if (mode === 'sort-date-asc') {
      activeSlides = originalOrder.slice().sort((a,b) => (a._dateTs - b._dateTs) || (a._orig - b._orig));
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
    if (mode === 'sort-rating-desc') {
      activeSlides = originalOrder.slice().sort((a,b) => (b._rating - a._rating) || (a._orig - b._orig));
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
    if (mode === 'sort-rating-asc') {
      activeSlides = originalOrder.slice().sort((a,b) => (a._rating - b._rating) || (a._orig - b._orig));
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }

    // FILTRY ocen – max/min i konkretne 1..5
    if (mode === 'filter-max') {
      const maxR = Math.max(...allSlides.map(s => s._rating));
      activeSlides = originalOrder.filter(s => s._rating === maxR);
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
    if (mode === 'filter-min') {
      const minR = Math.min(...allSlides.map(s => s._rating));
      activeSlides = originalOrder.filter(s => s._rating === minR);
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
    if (mode.startsWith('filter-rating-')) {
      const r = Number(mode.replace('filter-rating-',''));
      activeSlides = originalOrder.filter(s => s._rating === r);
      reattach(activeSlides);
      index = 0;
      update();
      return;
    }
  }

  modeEl.addEventListener('change', () => applyMode(modeEl.value));

  // start: wszystkie
  modeEl.value = 'all';
  applyMode('all');

  // klawiatura (opcjonalnie)
  window.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') step(-1);
    if (e.key === 'ArrowRight') step(1);
  });
})();
</script>