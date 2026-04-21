<?php
$pageTitle = 'VeloWorld – Trasy miejskie';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- BANER -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/trasy-miejskie.jpg"
       alt="Trasy miejskie – jazda po mieście">
</div>

<!-- TREŚĆ -->
<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>

    <h2 class="guide-title">Trasy miejskie</h2>

    <p class="guide-intro">
      Asfalt, parki i bulwary — idealne na rekreację i codzienną jazdę.
    </p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Jak wybrać trasę miejską?</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
          <p>Parki i bulwary zamiast ulic</p>
          <p>Poza godzinami szczytu</p>
          <p>Równa nawierzchnia</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Bezpieczeństwo</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Kask, światła i przewidywalna jazda to podstawa.</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Sprzęt</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Opony 32–45 mm, dzwonek, błotniki, bidon.</p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>