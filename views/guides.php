<?php
// =============================================
// Poradniki – TRASY ROWEROWE + PUMPTRACKI
// =============================================

$pageTitle = 'VeloWorld – Trasy i pumptracki';
$pageCss   = 'guides.css'; 
?>

<?php include __DIR__ . '/partials/topbar.php'; ?>

<main class="main-content">

  <h2 class="guide-title">Trasy rowerowe i pumptracki</h2>
  <p class="guide-intro">
    Wybierz styl jazdy i poznaj najlepsze miejsca do trenowania,
    rekreacji oraz jazdy technicznej.
  </p>

  <!-- ===== TRASY ROWEROWE ===== -->
  <h3 class="section-title">Trasy rowerowe</h3>

  <div class="tiles-grid">

    <div class="tile-card">
      <div class="tile-title">Trasy miejskie</div>
      <div class="tile-desc">
        Asfaltowe ścieżki, parki i bulwary.
        Idealne dla początkujących i do jazdy rekreacyjnej.
      </div>
      <div class="tile-tags">
        <span>#miasto</span>
        <span>#rekreacja</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Trasy leśne (MTB)</div>
      <div class="tile-desc">
        Naturalne ścieżki, korzenie i zakręty.
        Dla rowerów górskich i fanów terenu.
      </div>
      <div class="tile-tags">
        <span>#mtb</span>
        <span>#teren</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Trasy trekkingowe</div>
      <div class="tile-desc">
        Długie dystanse, szuter i asfalt.
        Idealne na wycieczki weekendowe.
      </div>
      <div class="tile-tags">
        <span>#trekking</span>
        <span>#turystyka</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Szlaki górskie</div>
      <div class="tile-desc">
        Trudne podjazdy i szybkie zjazdy.
        Dla zaawansowanych rowerzystów.
      </div>
      <div class="tile-tags">
        <span>#góry</span>
        <span>#enduro</span>
      </div>
    </div>

  </div>

  <!-- ===== PUMPTRACKI ===== -->
  <h3 class="section-title">Pumptracki</h3>

  <div class="tiles-grid">

    <div class="tile-card">
      <div class="tile-title">Czym jest pumptrack?</div>
      <div class="tile-desc">
        Tor z muld i band, na którym nie trzeba pedałować.
        Prędkość generujesz pracą ciała.
      </div>
      <div class="tile-tags">
        <span>#pumptrack</span>
        <span>#technika</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Pumptrack asfaltowy</div>
      <div class="tile-desc">
        Najczęściej spotykany typ.
        Bardzo szybki i trwały.
      </div>
      <div class="tile-tags">
        <span>#asfalt</span>
        <span>#speed</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Pumptrack dla dzieci</div>
      <div class="tile-desc">
        Mniejsze tory do nauki balansu i kontroli roweru.
      </div>
      <div class="tile-tags">
        <span>#dzieci</span>
        <span>#nauka</span>
      </div>
    </div>

    <div class="tile-card">
      <div class="tile-title">Jak zacząć?</div>
      <div class="tile-desc">
        Kask obowiązkowy. Zacznij spokojnie,
        skup się na płynności jazdy.
      </div>
      <div class="tile-tags">
        <span>#bezpieczeństwo</span>
        <span>#start</span>
      </div>
    </div>

  </div>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>