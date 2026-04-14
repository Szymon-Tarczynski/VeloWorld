<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $pageTitle ?? 'VeloWorld'; ?></title>

  <link rel="stylesheet" href="css/style.css?v=12">
  <link rel="stylesheet" href="css/search-bar.css?v=1">

  <?php if (!empty($pageCss)): ?>
    <link rel="stylesheet" href="css/<?php echo $pageCss; ?>?v=11">
  <?php endif; ?>

  <?php if (!empty($pageCss2)): ?>
    <link rel="stylesheet" href="css/<?php echo $pageCss2; ?>?v=11">
  <?php endif; ?>

  <script src="js/app.js?v=2" defer></script>
  <script src="js/calcFrame.js?v=2" defer></script>
  <script src="js/site-search.js?v=1" defer></script>
  <script src="js/shop.js?v=2" defer></script>
</head>

<body>

  <?php $currentPage = $_GET['page'] ?? 'home'; ?>

  <div class="navbar">

    <!-- LOGO + SEARCH BAR (razem po lewej) -->
    <div class="navbar-left">
      <a class="logo" href="index.php?page=home">VeloWorld</a>

      <!-- SEARCH BAR -->

      <div class="nav-search-wrap nav-search-wrap--smart">
        <svg class="nav-search-icon" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <circle cx="6" cy="6" r="4.5" stroke="white" stroke-width="1.4" />
          <line x1="9.5" y1="9.5" x2="13" y2="13" stroke="white" stroke-width="1.4" stroke-linecap="round" />
        </svg>

        <input type="text" id="smartSearch" placeholder="Szukaj...">

        <!-- dropdown wyników tylko dla globalnego trybu -->
        <div id="smartSearchResults" class="site-search-results"></div>
      </div>

    </div>

    <!-- LINKI (środek lub rozciągnięte) -->
    <div class="nav-links">
      <a href="index.php?page=home" <?php echo ($currentPage === 'home') ? 'class="active"' : ''; ?>>Start</a>
      <a href="index.php?page=frame_guide" <?php echo ($currentPage === 'frame_guide') ? 'class="active"' : ''; ?>>Dobór
        ramy</a>
      <a href="index.php?page=service_guide" <?php echo ($currentPage === 'service_guide') ? 'class="active"' : ''; ?>>Serwis</a>
      <a href="index.php?page=bike_build" <?php echo ($currentPage === 'bike_build') ? 'class="active"' : ''; ?>>Budowa
        roweru</a>
      <a href="index.php?page=workshop" <?php echo in_array($currentPage, ['workshop', 'submit_booking', 'booking_success']) ? 'class="active"' : ''; ?>>Warsztat</a>
      <a href="index.php?page=clients" <?php echo ($currentPage === 'clients') ? 'class="active"' : ''; ?>>Klienci</a>

      <!-- dropdowny bez zmian -->
      <div class="dropdown">
        <a href="index.php?page=faults" class="dropdown-toggle">Najczęstsze usterki <span class="caret">▾</span></a>
        <div class="dropdown-menu">
          <a href="index.php?page=faults#brakes">Hamulce</a>
          <a href="index.php?page=faults#gears">Przerzutki</a>
          <a href="index.php?page=faults#chain">Łańcuch</a>
          <a href="index.php?page=faults#wheels">Koła</a>
          <a href="index.php?page=faults#puncture">Przebita opona</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="index.php?page=guides" class="dropdown-toggle">Poradniki <span class="caret">▾</span></a>
        <div class="dropdown-menu">
          <a href="index.php?page=guides#routes">Trasy rowerowe</a>
          <a href="index.php?page=guides#pumptracks">Pumptracki</a>
          <a href="index.php?page=guides#tips">Jak zacząć?</a>
        </div>
      </div>
    </div>

    <!-- PRAWA STRONA (przyciski) -->
    <div class="actions">
      <a class="nav-btn" href="index.php?page=shop">Kup rower</a>
      <a class="nav-login" href="index.php?page=about">O nas</a>
    </div>

  </div>

  <div class="page-layout">