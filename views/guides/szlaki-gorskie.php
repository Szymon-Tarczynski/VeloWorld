<?php
$pageTitle = 'VeloWorld – Szlaki górskie';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- BANER -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/szlaki-gorskie.jpg"
       alt="Szlaki górskie – jazda w górach">
</div>

<!-- TREŚĆ -->
<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>

    <h2 class="guide-title">Szlaki górskie</h2>

    <p class="guide-intro">
      Trudne podjazdy szybkie zjazdy i ekspozycja
    </p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Poziom trudności</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Trasy dla zaawansowanych sprawdzaj oznaczenia i warunki na szlaku</p>
        <p>Zaplanuj objazdy i miejsca awaryjnego zejścia lub zjazdu</p>
        <p>Nie ryzykuj na mokrych korzeniach i luźnych kamieniach</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Sprzęt</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Full MTB lub solidny hardtail hamulce w dobrej kondycji</p>
        <p>Dropper bardzo ułatwia zjazdy kask full face mile widziany</p>
        <p>Zapasowe klocki łańcuch i dętka lub wkład tubeless</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Bezpieczeństwo i pogoda</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Sprawdź prognozę i unikaj burz w wyższych partiach</p>
        <p>Miej ze sobą warstwę przeciwdeszczową i coś ciepłego</p>
        <p>Jedź z zapasem czasu światła i baterii w telefonie</p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>