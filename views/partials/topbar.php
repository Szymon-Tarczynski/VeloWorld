<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $pageTitle ?? 'VeloWorld'; ?></title>

  <link rel="stylesheet" href="style.css?v=12">

  <?php if (!empty($pageCss)): ?>
    <link rel="stylesheet" href="<?php echo $pageCss; ?>?v=11">
  <?php endif; ?>

  <?php if (!empty($pageCss2)): ?>
    <link rel="stylesheet" href="<?php echo $pageCss2; ?>?v=11">
  <?php endif; ?>

  <script src="app.js?v=2" defer></script>
  <script src="calcFrame.js?v=2" defer></script>
</head>

<body>

<?php $currentPage = $_GET['page'] ?? 'home'; ?>

<div class="navbar">

  <!-- LOGO -->
  <a class="logo" href="index.php?page=home">VeloWorld</a>

  <!-- LINKI -->
  <div class="nav-links">

    <a href="index.php?page=home" <?php echo ($currentPage==='home')?'class="active"':''; ?>>Start</a>
    <a href="index.php?page=frame_guide" <?php echo ($currentPage==='frame_guide')?'class="active"':''; ?>>Dobór ramy</a>
    <a href="index.php?page=service_guide" <?php echo ($currentPage==='service_guide')?'class="active"':''; ?>>Serwis</a>
    <a href="index.php?page=bike_build" <?php echo ($currentPage==='bike_build')?'class="active"':''; ?>>Budowa roweru</a>
    <a href="index.php?page=workshop" <?php echo in_array($currentPage,['workshop','submit_booking','booking_success'])?'class="active"':''; ?>>Warsztat</a>
    <a href="index.php?page=clients" <?php echo ($currentPage==='clients')?'class="active"':''; ?>>Klienci</a>

    <!-- DROPDOWN: FAULTS -->
    <div class="dropdown">
      <a href="index.php?page=faults" class="dropdown-toggle">
        Najczęstsze usterki <span class="caret">▾</span>
      </a>
      <div class="dropdown-menu">
        <a href="index.php?page=faults#brakes">Hamulce</a>
        <a href="index.php?page=faults#gears">Przerzutki</a>
        <a href="index.php?page=faults#chain">Łańcuch</a>
        <a href="index.php?page=faults#wheels">Koła</a>
        <a href="index.php?page=faults#puncture">Przebita opona</a>
      </div>
    </div>

    <!-- DROPDOWN: GUIDES -->
    <div class="dropdown">
      <a href="index.php?page=guides" class="dropdown-toggle">
        Poradniki <span class="caret">▾</span>
      </a>
      <div class="dropdown-menu">
        <a href="index.php?page=guides#routes">Trasy rowerowe</a>
        <a href="index.php?page=guides#pumptracks">Pumptracki</a>
        <a href="index.php?page=guides#tips">Jak zacząć?</a>
      </div>
    </div>

  </div> <!-- ✅ KONIEC nav-links -->

  <!-- PRAWA STRONA -->
  <div class="actions">
    <a class="nav-btn" href="index.php?page=shop">Kup rower</a>
    <a class="nav-login" href="index.php?page=about">O nas</a>
  </div>

</div>

<div class="page-layout">