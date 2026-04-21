<?php
$pageTitle = 'VeloWorld – Trasy trekkingowe';
$pageCss   = 'guides.css';
?>

<?php require VIEWS_PATH . '/partials/topbar.php'; ?>

<!-- BANER -->
<div class="guide-banner">
  <img src="/VeloWorld/views/assets/guides/trasy-trekkingowe.jpg"
       alt="Trasy trekkingowe – długie dystanse i turystyka rowerowa">
</div>

<!-- TREŚĆ -->
<main class="main-content">

  <div class="guide-head">
    <a class="back-link" href="index.php?page=guides">← Wróć do poradników</a>

    <h2 class="guide-title">Trasy trekkingowe</h2>

    <p class="guide-intro">
      Długie dystanse komfort asfalt i szuter
    </p>
  </div>

  <section class="accordion">

    <details class="acc-item" open>
      <summary class="acc-summary">
        <span class="acc-title">Ustawienie roweru trekkingowego</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Wyprostowana pozycja ergonomiczne chwyty szerokie przełożenia</p>
        <p>Siodełko ustawione pod długą jazdę bez nadmiernego obciążenia kolan</p>
        <p>Kierownica pozwalająca na kilka chwytów</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Planowanie trasy</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Sprawdzenie nawierzchni i przewyższeń</p>
        <p>Dostęp do wody i miejsc odpoczynku</p>
        <p>Punkty awaryjnego skrócenia trasy</p>
      </div>
    </details>

    <details class="acc-item">
      <summary class="acc-summary">
        <span class="acc-title">Wyposażenie na trasę</span>
        <span class="acc-icon">+</span>
      </summary>
      <div class="acc-content">
        <p>Woda jedzenie i zapas energii</p>
        <p>Multitool dętka lub zestaw naprawczy</p>
        <p>Światła mapy offline i zapasowy powerbank</p>
      </div>
    </details>

  </section>

</main>

<?php require VIEWS_PATH . '/partials/footer.php'; ?>