<?php
// views/cart.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'VeloWorld – Koszyk';
$pageCss   = 'cart.css';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart     = $_SESSION['cart'];
$subtotal = 0;
foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['qty'];
}

$promo_code     = $_SESSION['cart_promo'] ?? '';
$promo_discount = 0;
if ($promo_code === 'VELO10') {
    $promo_discount = $subtotal * 0.10;
}

$shipping = ($subtotal > 0 && $subtotal >= 299) ? 0 : 19.99;
$total    = $subtotal - $promo_discount + $shipping;
$count    = array_sum(array_column($cart, 'qty'));
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content cart-page">

  <!-- FLASH -->
  <?php if (!empty($_SESSION['flash_added'])): ?>
    <div class="alert success cart-flash">✅ Produkt dodany do koszyka!</div>
    <?php unset($_SESSION['flash_added']); ?>
  <?php endif; ?>

  <div class="cart-breadcrumb">
    <a href="index.php?page=shop">Sklep</a>
    <span>›</span>
    <span class="current">Koszyk</span>
  </div>

  <div class="cart-layout">

    <!-- ════ LEWA: produkty ════ -->
    <div class="cart-left">
      <div class="cart-panel glass">

        <div class="cp-header">
          <h1 class="cp-title">Twój koszyk</h1>
          <?php if ($count > 0): ?>
            <span class="cp-badge">
              <?= $count ?> <?= $count === 1 ? 'produkt' : ($count < 5 ? 'produkty' : 'produktów') ?>
            </span>
          <?php endif; ?>
        </div>

        <?php if (empty($cart)): ?>
          <div class="cart-empty">
            <div class="ce-icon">🛒</div>
            <h2>Koszyk jest pusty</h2>
            <p>Wróć do sklepu i wybierz swój wymarzony rower.</p>
            <a href="index.php?page=shop" class="btn ce-btn">Przejdź do sklepu</a>
          </div>

        <?php else: ?>
          <ul class="cart-items" id="cartItems">
            <?php foreach ($cart as $item): ?>
              <li class="ci-row" id="ci-<?= (int)$item['id'] ?>">

                <div class="ci-thumb">
                  <?php if (!empty($item['image'])): ?>
                    <img src="<?= htmlspecialchars($item['image']) ?>"
                         alt="<?= htmlspecialchars($item['name']) ?>">
                  <?php else: ?>
                    <span class="ci-emoji"><?= $item['emoji'] ?? '🚲' ?></span>
                  <?php endif; ?>
                </div>

                <div class="ci-info">
                  <div class="ci-name"><?= htmlspecialchars($item['name']) ?></div>
                  <?php if (!empty($item['bike_type'])): ?>
                    <span class="ci-tag"><?= htmlspecialchars($item['bike_type']) ?></span>
                  <?php endif; ?>
                  <div class="ci-unit-price">
                    <?= number_format($item['price'], 2, ',', ' ') ?> zł / szt.
                  </div>
                </div>

                <div class="ci-right">
                  <div class="ci-price">
                    <?= number_format($item['price'] * $item['qty'], 2, ',', ' ') ?>
                    <span>zł</span>
                  </div>

                  <div class="ci-controls">
                    <!-- Zmień ilość -->
                    <form method="POST" action="index.php?page=cart_action" class="qty-form">
                      <input type="hidden" name="action"   value="update">
                      <input type="hidden" name="id"       value="<?= (int)$item['id'] ?>">
                      <input type="hidden" name="redirect" value="index.php?page=cart">
                      <div class="qty-wrap">
                        <button type="submit" name="qty" value="<?= $item['qty'] - 1 ?>" class="qty-btn">−</button>
                        <span class="qty-val"><?= $item['qty'] ?></span>
                        <button type="submit" name="qty" value="<?= $item['qty'] + 1 ?>" class="qty-btn">+</button>
                      </div>
                    </form>

                    <!-- Usuń -->
                    <form method="POST" action="index.php?page=cart_action">
                      <input type="hidden" name="action"   value="remove">
                      <input type="hidden" name="id"       value="<?= (int)$item['id'] ?>">
                      <input type="hidden" name="redirect" value="index.php?page=cart">
                      <button type="submit" class="ci-remove" title="Usuń">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">
                          <polyline points="3 6 5 6 21 6"/>
                          <path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                          <path d="M10 11v6M14 11v6"/>
                        </svg>
                      </button>
                    </form>
                  </div>
                </div>

              </li>
            <?php endforeach; ?>
          </ul>

          <!-- KOD RABATOWY -->
          <div class="cart-promo">
            <form method="POST" action="index.php?page=cart_promo" class="promo-form">
              <input type="hidden" name="redirect" value="index.php?page=cart">
              <input
                type="text"
                name="code"
                class="promo-input <?= $promo_code ? 'applied' : '' ?>"
                placeholder="Kod rabatowy…"
                value="<?= htmlspecialchars($promo_code) ?>"
                <?= $promo_code ? 'disabled' : '' ?>
              >
              <?php if ($promo_code): ?>
                <span class="promo-ok">✓ <?= htmlspecialchars($promo_code) ?> aktywny</span>
                <a href="index.php?page=cart_promo&action=remove&redirect=index.php?page=cart"
                   class="promo-remove">Usuń</a>
              <?php else: ?>
                <button type="submit" class="promo-btn">Zastosuj</button>
              <?php endif; ?>
            </form>
          </div>

        <?php endif; ?>
      </div><!-- /cart-panel -->

      <?php if (!empty($cart)): ?>
        <form method="POST" action="index.php?page=cart_action" class="clear-form">
          <input type="hidden" name="action"   value="clear">
          <input type="hidden" name="redirect" value="index.php?page=cart">
          <button type="submit" class="clear-btn">Wyczyść koszyk</button>
        </form>
      <?php endif; ?>

    </div><!-- /cart-left -->

    <!-- ════ PRAWA: podsumowanie ════ -->
    <?php if (!empty($cart)): ?>
    <div class="cart-right">
      <div class="summary-panel glass">
        <div class="sp-title">Podsumowanie</div>

        <div class="sp-row">
          <span>Produkty (<?= $count ?>)</span>
          <span class="sp-val"><?= number_format($subtotal, 2, ',', ' ') ?> zł</span>
        </div>

        <?php if ($promo_discount > 0): ?>
          <div class="sp-row sp-discount">
            <span>Rabat (<?= htmlspecialchars($promo_code) ?>)</span>
            <span>−<?= number_format($promo_discount, 2, ',', ' ') ?> zł</span>
          </div>
        <?php endif; ?>

        <div class="sp-row">
          <span>Dostawa</span>
          <span class="sp-val">
            <?= $shipping === 0 ? 'Gratis' : number_format($shipping, 2, ',', ' ') . ' zł' ?>
          </span>
        </div>

        <?php if ($shipping === 0): ?>
          <div class="sp-free-ship">
            <span>🚚</span>
            <span>Darmowa dostawa!</span>
          </div>
        <?php else: ?>
          <div class="sp-ship-bar-wrap">
            <div class="sp-ship-bar-label">
              Brakuje <strong><?= number_format(299 - $subtotal, 2, ',', ' ') ?> zł</strong>
              do darmowej dostawy
            </div>
            <div class="sp-ship-bar">
              <div class="sp-ship-fill"
                   style="width:<?= min(100, round($subtotal / 299 * 100)) ?>%"></div>
            </div>
          </div>
        <?php endif; ?>

        <div class="sp-row sp-total">
          <span>Łącznie</span>
          <span class="sp-total-val"><?= number_format($total, 2, ',', ' ') ?> zł</span>
        </div>

        <!-- Przycisk do checkoutu -->
        <a href="index.php?page=checkout" class="checkout-btn">
          Przejdź do płatności
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2.5">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </a>

        <a href="index.php?page=shop" class="continue-link">← Kontynuuj zakupy</a>

        <div class="sp-payments">
          <span class="pay-badge">Visa</span>
          <span class="pay-badge">Mastercard</span>
          <span class="pay-badge">BLIK</span>
          <span class="pay-badge">Przelewy24</span>
          <span class="pay-badge">PayPo</span>
        </div>

      </div>
    </div>
    <?php endif; ?>

  </div><!-- /cart-layout -->
</main>