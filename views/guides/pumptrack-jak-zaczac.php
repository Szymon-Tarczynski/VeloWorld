<?php
$pageTitle = 'Pumptrack — jak zacząć';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

<div class="guide-banner guide-banner--contained">
  <img src="/VeloWorld/views/assets/guides/pumptrack-jak-zaczac.jpg" alt="Pumptrack jak zacząć">
</div>

<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>
    <h2 class="guide-title">Pumptrack — jak zacząć</h2>
    <p class="guide-intro">Technika płynność i praca ciała zamiast pedałowania</p>
  </div>

  <!-- PORADNIK -->
  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Podstawy</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <ul>
          <p>Kask obowiązkowy</p>
          <p>Patrz przed siebie a nie pod koło</p>
          <p>Pompowanie zamiast kręcenia</p>
        </ul>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Pierwsze okrążenia</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Zacznij wolno i utrzymuj równy tor jazdy</p>
        <p>Uginaj nogi na zjazdach i dociskaj na podjazdach</p>
        <p>Oddychaj i nie spinaj ramion</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Czego unikać</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Nie zatrzymuj się na bandach</p>
        <p>Nie wjeżdżaj w tłum i zachowuj odstępy</p>
        <p>Nie przyspieszaj na siłę jeśli tracisz kontrolę</p>
      </div>
    </details>

  </section>

  <!-- FEED POLECANE PUMPTRACKI -->
  <h3 class="section-title">Polecane pumptracki</h3>

  <div class="tiles-grid recommended-pumptracks">

    <div class="tile-card">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-wroclaw.jpg" alt="Pumptrack Wrocław">
      </div>
      <div class="tile-body">
        <div class="tile-title">Pumptrack Wrocław</div>
        <div class="tile-desc">Duży asfaltowy tor z sekcjami dla początkujących i zaawansowanych</div>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-krakow.jpg" alt="Pumptrack Kraków">
      </div>
      <div class="tile-body">
        <div class="tile-title">Pumptrack Kraków</div>
        <div class="tile-desc">Szybki tor z wysokimi bandami idealny do nauki płynnej jazdy</div>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-poznan.jpg" alt="Pumptrack Poznań">
      </div>
      <div class="tile-body">
        <div class="tile-title">Pumptrack Poznań</div>
        <div class="tile-desc">Kompaktowy pumptrack miejski świetny dla dzieci i dorosłych</div>
      </div>
    </div>

  </div>

  <!-- MAPA POLSKI -->
  <h3 class="section-title">Mapa pumptracków w Polsce</h3>
  <div id="pumptrackMap" class="pumptrack-map"></div>

</main>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
  (function () {
    const el = document.getElementById('pumptrackMap');
    if (!el || typeof L === 'undefined') return;

    const map = L.map('pumptrackMap').setView([52.1, 19.4], 6);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '© OpenStreetMap'
    }).addTo(map);

    const pumptracks = [
      { name: 'Pumptrack Wrocław', city: 'Wrocław', lat: 51.1079, lng: 17.0385 },
      { name: 'Pumptrack Kraków',  city: 'Kraków',  lat: 50.0647, lng: 19.9450 },
      { name: 'Pumptrack Poznań',  city: 'Poznań',  lat: 52.4064, lng: 16.9252 }
    ];

    pumptracks.forEach(pt => {
      L.marker([pt.lat, pt.lng])
        .addTo(map)
        .bindPopup('<strong>' + pt.name + '</strong><br>' + pt.city);
    });
  })();
</script>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>