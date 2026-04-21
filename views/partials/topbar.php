<?php
// partials/topbar.php
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
$_cart_count = array_sum(array_column($_SESSION['cart'], 'qty'));
$_cart_total = array_reduce($_SESSION['cart'], fn($s, $i) => $s + $i['price'] * $i['qty'], 0);
?>
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

    <!-- LOGO + SEARCH BAR -->
    <div class="navbar-left">
      <a class="logo" href="index.php?page=home">VeloWorld</a>

      <div class="nav-search-wrap nav-search-wrap--smart">
        <svg class="nav-search-icon" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <circle cx="6" cy="6" r="4.5" stroke="white" stroke-width="1.4" />
          <line x1="9.5" y1="9.5" x2="13" y2="13" stroke="white" stroke-width="1.4" stroke-linecap="round" />
        </svg>
        <input type="text" id="smartSearch" placeholder="Szukaj...">
        <div id="smartSearchResults" class="site-search-results"></div>
      </div>
    </div>

    <!-- LINKI -->
    <div class="nav-links">
      <a href="index.php?page=home" <?php echo ($currentPage === 'home') ? 'class="active"' : ''; ?>>Start</a>
      <a href="index.php?page=frame_guide" <?php echo ($currentPage === 'frame_guide') ? 'class="active"' : ''; ?>>Dobór ramy</a>
      <a href="index.php?page=service_guide" <?php echo ($currentPage === 'service_guide') ? 'class="active"' : ''; ?>>Serwis</a>
      <a href="index.php?page=bike_build" <?php echo ($currentPage === 'bike_build') ? 'class="active"' : ''; ?>>Budowa roweru</a>
      <a href="index.php?page=workshop" <?php echo in_array($currentPage, ['workshop', 'submit_booking', 'booking_success']) ? 'class="active"' : ''; ?>>Warsztat</a>
      <a href="index.php?page=clients" <?php echo ($currentPage === 'clients') ? 'class="active"' : ''; ?>>Klienci</a>

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

    <!-- PRAWA STRONA -->
    <div class="actions">
      <a class="nav-btn" href="index.php?page=shop">Kup rower</a>

      <!-- CART TRIGGER -->
      <button class="fcart-trigger" id="fcartTrigger" onclick="toggleFcart()">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
        </svg>
        Koszyk
        <span class="fcart-badge" id="fcartBadge" <?php echo $_cart_count === 0 ? 'style="display:none"' : ''; ?>>
          <?= $_cart_count ?>
        </span>
      </button>

      <a class="nav-login" href="index.php?page=about">O nas</a>
    </div>

  </div>

  <!-- ═══════════════════════════════════════
       FLOATING CART PANEL
       Pojawia się pod topbarem, przy prawej krawędzi
       ═══════════════════════════════════════ -->
  <div class="fcart-panel glass" id="fcartPanel">

    <div class="fcart-head">
      <span class="fcart-head-title">Koszyk</span>
      <span class="fcart-head-count">
        <?= $_cart_count ?> <?= $_cart_count === 1 ? 'produkt' : ($_cart_count < 5 ? 'produkty' : 'produktów') ?>
      </span>
    </div>

    <div class="fcart-items">
      <?php if (empty($_SESSION['cart'])): ?>
        <div class="fcart-empty">
          <span style="font-size:1.8rem;opacity:.18">🛒</span>
          <p>Koszyk jest pusty</p>
        </div>
      <?php else: ?>
        <?php foreach ($_SESSION['cart'] as $item): ?>
          <div class="fcart-item">
            <div class="fcart-item-thumb">
              <?php if (!empty($item['image'])): ?>
                <img src="<?= htmlspecialchars($item['image']) ?>" alt="">
              <?php else: ?>
                <span><?= $item['emoji'] ?? '🚲' ?></span>
              <?php endif; ?>
            </div>
            <div class="fcart-item-info">
              <div class="fcart-item-name"><?= htmlspecialchars($item['name']) ?></div>
              <div class="fcart-item-meta">
                <?= $item['qty'] ?> szt. · <?= number_format($item['price'] * $item['qty'], 2, ',', ' ') ?> zł
              </div>
            </div>
            <form method="POST" action="index.php?page=cart_action">
              <input type="hidden" name="action" value="remove">
              <input type="hidden" name="id" value="<?= $item['id'] ?>">
              <input type="hidden" name="redirect" value="index.php?page=<?= htmlspecialchars($_GET['page'] ?? 'home') ?>">
              <button type="submit" class="fcart-item-remove" title="Usuń">×</button>
            </form>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>

    <div class="fcart-foot">
      <?php if (!empty($_SESSION['cart'])): ?>
        <div class="fcart-total">
          <span>Razem</span>
          <span class="fcart-total-val"><?= number_format($_cart_total, 2, ',', ' ') ?> zł</span>
        </div>
      <?php endif; ?>
      <a href="index.php?page=cart" class="fcart-go-btn">
        <?= empty($_SESSION['cart']) ? 'Przejdź do sklepu' : 'Przejdź do koszyka →' ?>
      </a>
    </div>

  </div>

  <div class="page-layout">

<script>
function toggleFcart() {
  const panel = document.getElementById('fcartPanel');
  panel.classList.toggle('open');
}
document.addEventListener('click', function(e) {
  const panel = document.getElementById('fcartPanel');
  const trigger = document.getElementById('fcartTrigger');
  if (panel && trigger && !panel.contains(e.target) && !trigger.contains(e.target)) {
    panel.classList.remove('open');
  }
});
</script>