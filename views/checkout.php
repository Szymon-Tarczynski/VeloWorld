<?php
// views/checkout.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'VeloWorld – Płatność';
$pageCss   = 'checkout.css';

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: index.php?page=shop');
    exit;
}

$cart     = $_SESSION['cart'];
$subtotal = 0;
foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['qty'];
}

$promo_code     = $_SESSION['cart_promo'] ?? '';
$promo_discount = ($promo_code === 'VELO10') ? $subtotal * 0.10 : 0;
$shipping       = ($subtotal >= 299) ? 0 : 19.99;
$total          = $subtotal - $promo_discount + $shipping;

// Obsługa złożenia zamówienia (POST)
$order_placed = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'place_order') {
    $method = $_POST['payment_method'] ?? '';
    $blik   = trim($_POST['blik_code'] ?? '');

    if ($method === 'blik') {
        // Walidacja: 6 cyfr
        if (preg_match('/^\d{6}$/', $blik)) {
            // "Udana płatność" — czyścimy koszyk
            $_SESSION['cart']       = [];
            $_SESSION['cart_promo'] = '';
            $_SESSION['last_order'] = [
                'total'  => $total,
                'method' => 'BLIK',
                'code'   => $blik,
            ];
            header('Location: index.php?page=order_success');
            exit;
        } else {
            $blik_error = 'Nieprawidłowy kod BLIK. Podaj 6 cyfr.';
        }
    } else {
        $method_error = 'Ta metoda płatności nie jest jeszcze dostępna.';
    }
}
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content checkout-page">

  <div class="cart-breadcrumb">
    <a href="index.php?page=shop">Sklep</a>
    <span>›</span>
    <a href="index.php?page=cart">Koszyk</a>
    <span>›</span>
    <span class="current">Płatność</span>
  </div>

  <div class="checkout-layout">

    <!-- ════ LEWA: metody płatności ════ -->
    <div class="checkout-left">
      <div class="checkout-panel glass">
        <div class="cp-header">
          <h1 class="cp-title">Wybierz metodę płatności</h1>
        </div>

        <?php if (!empty($method_error)): ?>
          <div class="alert error" style="margin:16px 24px;">
            ⚠️ <?= htmlspecialchars($method_error) ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="index.php?page=checkout" id="paymentForm">
          <input type="hidden" name="action" value="place_order">
          <input type="hidden" name="payment_method" value="blik" id="selectedMethod">

          <div class="payment-methods">

            <!-- BLIK — działa -->
            <label class="pm-card pm-blik active" data-method="blik">
              <div class="pm-card-inner">
                <div class="pm-logo blik-logo">BLIK</div>
                <div class="pm-info">
                  <div class="pm-name">BLIK</div>
                  <div class="pm-desc">Kod z aplikacji bankowej</div>
                </div>
                <div class="pm-check" id="check-blik">✓</div>
              </div>
              <!-- BLIK input — widoczny od razu bo domyślnie wybrany -->
              <div class="blik-input-wrap" id="blikWrap">
                <label class="blik-label">Wprowadź kod BLIK</label>
                <div class="blik-digits">
                  <input type="text" name="blik_code" id="blikCode"
                         class="blik-field <?= !empty($blik_error) ? 'error' : '' ?>"
                         maxlength="6" pattern="\d{6}" placeholder="_ _ _ _ _ _"
                         autocomplete="one-time-code" inputmode="numeric">
                </div>
                <?php if (!empty($blik_error)): ?>
                  <div class="blik-error"><?= htmlspecialchars($blik_error) ?></div>
                <?php endif; ?>
                <div class="blik-hint">Kod jest ważny przez 2 minuty</div>
              </div>
            </label>

            <!-- Karta — nieaktywna -->
            <div class="pm-card pm-disabled" data-method="card" onclick="showDisabled(this)">
              <div class="pm-card-inner">
                <div class="pm-logo card-logo">💳</div>
                <div class="pm-info">
                  <div class="pm-name">Karta płatnicza</div>
                  <div class="pm-desc">Visa, Mastercard</div>
                </div>
                <span class="pm-soon">Wkrótce</span>
              </div>
            </div>

            <!-- Przelewy24 — nieaktywna -->
            <div class="pm-card pm-disabled" data-method="p24" onclick="showDisabled(this)">
              <div class="pm-card-inner">
                <div class="pm-logo p24-logo">P24</div>
                <div class="pm-info">
                  <div class="pm-name">Przelewy24</div>
                  <div class="pm-desc">Szybki przelew bankowy</div>
                </div>
                <span class="pm-soon">Wkrótce</span>
              </div>
            </div>

            <!-- PayPo — nieaktywna -->
            <div class="pm-card pm-disabled" data-method="paypo" onclick="showDisabled(this)">
              <div class="pm-card-inner">
                <div class="pm-logo paypo-logo">PayPo</div>
                <div class="pm-info">
                  <div class="pm-name">PayPo — kup teraz, zapłać później</div>
                  <div class="pm-desc">30 dni bez odsetek</div>
                </div>
                <span class="pm-soon">Wkrótce</span>
              </div>
            </div>

          </div><!-- /payment-methods -->

          <div id="disabledMsg" class="disabled-msg" style="display:none">
            ⚠️ Ta metoda płatności nie jest jeszcze dostępna.
          </div>

          <div class="checkout-submit-wrap">
            <button type="submit" class="checkout-pay-btn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2.5">
                <rect x="2" y="5" width="20" height="14" rx="2"/>
                <line x1="2" y1="10" x2="22" y2="10"/>
              </svg>
              Zapłać <?= number_format($total, 2, ',', ' ') ?> zł
            </button>
            <a href="index.php?page=cart" class="continue-link">← Wróć do koszyka</a>
          </div>

        </form>

      </div><!-- /checkout-panel -->
    </div>

    <!-- ════ PRAWA: mini-podsumowanie ════ -->
    <div class="checkout-right">
      <div class="summary-panel glass">
        <div class="sp-title">Zamówienie</div>

        <ul class="co-items">
          <?php foreach ($cart as $item): ?>
            <li class="co-item">
              <span class="co-emoji"><?= $item['emoji'] ?? '🚲' ?></span>
              <span class="co-name"><?= htmlspecialchars($item['name']) ?></span>
              <span class="co-qty">×<?= $item['qty'] ?></span>
              <span class="co-price"><?= number_format($item['price'] * $item['qty'], 2, ',', ' ') ?> zł</span>
            </li>
          <?php endforeach; ?>
        </ul>

        <div class="sp-divider"></div>

        <div class="sp-row">
          <span>Produkty</span>
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
          <span class="sp-val"><?= $shipping === 0 ? 'Gratis' : number_format($shipping, 2, ',', ' ') . ' zł' ?></span>
        </div>

        <div class="sp-row sp-total">
          <span>Do zapłaty</span>
          <span class="sp-total-val"><?= number_format($total, 2, ',', ' ') ?> zł</span>
        </div>

        <div class="co-secure">
          🔒 Bezpieczna płatność SSL
        </div>

      </div>
    </div>

  </div><!-- /checkout-layout -->
</main>

<script>
  // BLIK auto-format (spacje wizualne, tylko cyfry)
  const blikInput = document.getElementById('blikCode');
  if (blikInput) {
    blikInput.addEventListener('input', function () {
      this.value = this.value.replace(/\D/g, '').slice(0, 6);
    });
  }

  // Pokaż komunikat dla niedostępnych metod
  function showDisabled(el) {
    const msg = document.getElementById('disabledMsg');
    msg.style.display = 'block';
    setTimeout(() => msg.style.display = 'none', 3000);
  }
</script>