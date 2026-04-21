<?php
$pageTitle = 'VeloWorld – Trasy i pumptracki';
$pageCss = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<main class="main-content">

  <h2 class="guide-title">Trasy rowerowe</h2>
  <p class="guide-intro">
    Wybierz styl jazdy i poznaj najlepsze miejsca do trenowania rekreacji oraz jazdy technicznej
  </p>

  <h3 class="section-title">Trasy rowerowe</h3>
  <div class="tiles-grid">

    <a class="tile-card tile-link" href="index.php?page=guides&guide=trasy-miejskie">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/trasy-miejskie.jpg" alt="Trasy miejskie">
      </div>
      <div class="tile-body">
        <div class="tile-title">Trasy miejskie</div>
        <div class="tile-desc">Asfalt parki i bulwary idealne do rekreacji</div>
        <div class="tile-tags"><span>#miasto</span><span>#rekreacja</span></div>
      </div>
    </a>

    <a class="tile-card tile-link" href="index.php?page=guides&guide=trasy-lesne-mtb">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/trasy-lesne-mtb.jpg" alt="Trasy leśne">
      </div>
      <div class="tile-body">
        <div class="tile-title">Trasy leśne MTB</div>
        <div class="tile-desc">Naturalne ścieżki korzenie i teren</div>
        <div class="tile-tags"><span>#mtb</span><span>#teren</span></div>
      </div>
    </a>

    <a class="tile-card tile-link" href="index.php?page=guides&guide=trasy-trekkingowe">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/trasy-trekkingowe.jpg" alt="Trasy trekkingowe">
      </div>
      <div class="tile-body">
        <div class="tile-title">Trasy trekkingowe</div>
        <div class="tile-desc">Długie dystanse asfalt i szuter</div>
        <div class="tile-tags"><span>#trekking</span><span>#turystyka</span></div>
      </div>
    </a>

    <a class="tile-card tile-link" href="index.php?page=guides&guide=szlaki-gorskie">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/szlaki-gorskie.jpg" alt="Szlaki górskie">
      </div>
      <div class="tile-body">
        <div class="tile-title">Szlaki górskie</div>
        <div class="tile-desc">Trudne podjazdy szybkie zjazdy</div>
        <div class="tile-tags"><span>#góry</span><span>#enduro</span></div>
      </div>
    </a>


    <a class="tile-card tile-link" href="index.php?page=guides&guide=pumptrack-asfaltowy">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-asfaltowy.jpg" alt="Pumptrack asfaltowy">
      </div>
      <div class="tile-body">
        <div class="tile-title">Pumptrack asfaltowy</div>
        <div class="tile-desc">Szybki i trwały tor do płynnej jazdy</div>
        <div class="tile-tags"><span>#pumptrack</span><span>#asfalt</span></div>
      </div>
    </a>


    <a class="tile-card tile-link" href="index.php?page=guides&guide=pumptrack-dla-dzieci">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-dla-dzieci.jpg" alt="Pumptrack dla dzieci">
      </div>
      <div class="tile-body">
        <div class="tile-title">Pumptrack dla dzieci</div>
        <div class="tile-desc">Bezpieczne tory do nauki balansu</div>
        <div class="tile-tags"><span>#dzieci</span><span>#nauka</span></div>
      </div>
    </a>

  </div>

  <h3 class="section-title">Artykuły - polecane</h3>
  <div class="tiles-grid">

    <a class="tile-card tile-link" href="index.php?page=guides&guide=pumptrack-czym-jest">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-czym-jest.jpg" alt="Czym jest pumptrack">
      </div>
      <div class="tile-body">
        <div class="tile-title">Czym jest pumptrack</div>
        <div class="tile-desc">Tor z muld i band bez pedałowania</div>
      </div>
    </a>

    <a class="tile-card tile-link" href="index.php?page=guides&guide=pumptrack-jak-zaczac">
      <div class="tile-thumb">
        <img src="/VeloWorld/views/assets/guides/pumptrack-jak-zaczac.jpg" alt="Jak zacząć">
      </div>
      <div class="tile-body">
        <div class="tile-title">Jak zacząć</div>
        <div class="tile-desc">Podstawy techniki i bezpieczeństwa</div>
      </div>
    </a>

  </div>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>