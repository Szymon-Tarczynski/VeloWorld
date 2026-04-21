<?php
$pageTitle = 'Pumptrack asfaltowy';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- STARY PASEK czyli szeroki baner -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/pumptrack-asfaltowy.jpg" alt="Pumptrack asfaltowy">
</div>

<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>
    <h2 class="guide-title">Pumptrack asfaltowy</h2>
    <p class="guide-intro">Szybki i trwały tor idealny do nauki płynnej jazdy</p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Charakterystyka</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Równa nawierzchnia i duża prędkość</p>
        <p>Małe opory toczenia</p>
        <p>Świetny do treningu techniki i płynności</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Jak jeździć szybciej</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Utrzymuj niski stabilny środek ciężkości</p>
        <p>Pompowanie wykonuj na zjazdach i wyjściach z band</p>
        <p>Patrz dalej i jedź płynnie bez szarpania</p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>