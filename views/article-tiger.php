<?php
$pageTitle = 'VeloWorld – Trasa TIGER w Skolnity: flow, technika i trwałość';
$pageCss   = 'article.css';

$currentArticle = 'tiger';
include __DIR__ . '/_articles-data.php';
?>
<?php include __DIR__ . '/partials/topbar.php'; ?>

<!-- ✅ LEAFLET CSS (MUSI BYĆ LINK, NIE GOŁY URL) -->
<link
  rel="stylesheet"
  href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
/>

<main class="main-content">

  <article class="article-wrap glass">

    <!-- ======================================================
         HEADER
         ====================================================== -->
    <header class="article-header">
      <div class="article-category">
        <img src="img/logo/tiger-icon.jpg" class="category-icon" alt="TIGER trail icon" />
        <span>TRASY ROWEROWE W POLSCE</span>
      </div>

      <h1 class="article-title">
        Trasa TIGER w Skolnity – nowy standard jazdy w beskidzkim układzie
      </h1>

      <p class="article-lead">
        Otwarcie trasy TIGER w ośrodku Skolnity to jeden z wyraźniejszych
        sygnałów, że beskidzka infrastruktura MTB wchodzi w fazę dojrzałości.
        Techniczny charakter, naturalny flow i przemyślany projekt sprawiają,
        że TIGER nie próbuje imponować – on po prostu działa.
      </p>
    </header>

    <!-- ======================================================
         TREŚĆ
         ====================================================== -->
    <section class="article-content">

      <p>
        TIGER od pierwszych metrów jasno komunikuje swoje założenia.
        To nie jest trasa „eventowa” ani katalog sztucznych przeszkód,
        które dobrze wyglądają na zdjęciach.
        Projekt opiera się na logicznym prowadzeniu linii,
        naturalnej rzeźbie terenu oraz pracy z nachyleniem stoku,
        zamiast walki z nim.
      </p>

      <p>
        Sekcje korzeni poprowadzono w sposób, który nagradza
        precyzyjne dociążenie i pracę ciałem, a nie desperackie hamowanie.
        Naturalne bandy zostały wkomponowane w teren,
        przez co trasa zachowuje prędkość nawet przy umiarkowanej jeździe.
        Dropy i skoki są czytelne – mają wyraźny dojazd i lądowanie,
        bez niepotrzebnej losowości.
      </p>

      <p>
        Charakter TIGERA sprawia, że trasa „rośnie” razem z riderem.
        Bardziej doświadczeni użytkownicy docenią możliwość
        agresywnej jazdy, ataku i wyboru kreatywnych linii.
        Dla średniozaawansowanych to przestrzeń do nauki
        czytania terenu i budowania płynności bez poczucia,
        że każdy błąd kończy się lotem w kosodrzewinę.
      </p>

      <blockquote class="article-quote">
        „To trasa, która uczy czytania terenu i nagradza dobrą linię.
        Nie wybacza chaosu, ale nie karze za rozsądek.”
        <span>— lokalny rider</span>
      </blockquote>

      <p>
        Jednym z największych atutów TIGERA jest jego trwałość.
        Zastosowane odwodnienia, odpowiednie spadki i wzmocnienia
        newralgicznych fragmentów sprawiają,
        że trasa zachowuje swoje właściwości również po intensywnych opadach.
        W realiach beskidzkich to element kluczowy,
        który w praktyce decyduje o jakości jazdy przez cały sezon.
      </p>

      <p>
        Jeśli obrany kierunek zostanie utrzymany,
        Skolnity ma realną szansę stać się jednym z ważniejszych punktów
        na mapie polskich destynacji MTB.
        TIGER to dowód, że dobrze zaprojektowana trasa
        nie potrzebuje nachalnych fajerwerków,
        aby przyciągać riderów gotowych wracać po więcej.
      </p>

    </section>

    <!-- ======================================================
         LOKALIZACJA – MAPA + SCREENSHOT
         ====================================================== -->
    <h2 class="gallery-title">Gdzie znajduje się Skolnity?</h2>

    <div class="location-wrapper wide">
      <div class="location-grid">

        <!-- MAPA -->
        <div class="location-map">
          <div id="skolnityMap" class="skolnity-map"></div>
        </div>

        <!-- SCREEN GOOGLE MAPS -->
        <div class="location-image">
          <img
            src="img/articles/skolnity-map-google.jpg"
            alt="Skolnity Wisła – mapa Google"
          />
        </div>

      </div>
    </div>

    <!-- ======================================================
         GALERIA
         ====================================================== -->
    <section class="article-gallery">
      <h2 class="gallery-title">Galeria</h2>
      <div class="gallery-grid">
        <img src="img/articles/tiger1.jpg" alt="Trasa TIGER – sekcja flow" />
        <img src="img/articles/tiger2.jpg" alt="Skolnity MTB – korzenie i bandy" />
        <img src="img/articles/tiger3.jpg" alt="Drop na trasie TIGER" />
      </div>
    </section>

  </article>

  <?php include __DIR__ . '/partials/related-articles.php'; ?>

</main>

<!-- ✅ LEAFLET JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<!-- ✅ INIT MAPY -->
<script>
(function () {
  const el = document.getElementById('skolnityMap');
  if (!el || typeof L === 'undefined') return;

  const map = L.map('skolnityMap')
    .setView([49.6279, 18.8847], 14);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '© OpenStreetMap'
  }).addTo(map);

  L.marker([49.6279, 18.8847])
    .addTo(map)
    .bindPopup('<strong>Skolnity Wisła</strong><br>Trasa TIGER');
})();
</script>

<?php include __DIR__ . '/partials/footer.php'; ?>