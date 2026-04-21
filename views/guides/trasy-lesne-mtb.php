<?php
$pageTitle = 'VeloWorld – Trasy leśne (MTB)';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- BANER -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/trasy-lesne-mtb.jpg"
       alt="Trasy leśne MTB – jazda w terenie">
</div>

<!-- TREŚĆ -->
<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">
      ← Wróć do poradników
    </a>

    <h2 class="guide-title">Trasy leśne (MTB)</h2>

    <p class="guide-intro">
      Naturalne ścieżki, korzenie, singletracki i techniczne odcinki
      dla rowerów górskich.
    </p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Jaki rower na trasy leśne?</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <ul>
          <p>MTB hardtail lub full</p>
          <p>Opony 2.2–2.4"</p>
          <p>Dobre hamulce tarczowe</p>
        </ul>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Technika jazdy w terenie</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <ul>
          <p>Patrz dalej niż pod koło</p>
          <p>Pracuj ciałem na korzeniach</p>
          <p>Hamuj przed zakrętem</p>
        </ul>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Bezpieczeństwo</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>
          Kask MTB obowiązkowy, zalecane rękawiczki i ochraniacze kolan.
        </p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>