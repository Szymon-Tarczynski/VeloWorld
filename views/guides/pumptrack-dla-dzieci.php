<?php
$pageTitle = 'Pumptrack dla dzieci';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- Szeroki baner jak trasy rowerowe -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/pumptrack-dla-dzieci.jpg" alt="Pumptrack dla dzieci">
</div>

<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>
    <h2 class="guide-title">Pumptrack dla dzieci</h2>
    <p class="guide-intro">Bezpieczne tory do nauki balansu i kontroli roweru</p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Dlaczego warto</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Rozwój równowagi i koordynacji</p>
        <p>Nauka pracy ciałem bez pedałowania</p>
        <p>Bezpieczniejsze warunki niż ulica</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Zasady bezpieczeństwa</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Kask zawsze obowiązkowy</p>
        <p>Rowerek dopasowany do wzrostu</p>
        <p>Jazda pod opieką dorosłych</p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>