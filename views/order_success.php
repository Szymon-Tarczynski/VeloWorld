<?php
// views/order_success.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pageTitle = 'VeloWorld – Zamówienie złożone!';
$pageCss   = 'checkout.css';

// Jeśli nie ma danych zamówienia, wróć do sklepu
if (empty($_SESSION['last_order'])) {
    header('Location: index.php?page=shop');
    exit;
}

$order = $_SESSION['last_order'];
unset($_SESSION['last_order']); // jednorazowe
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content">
  <div class="success-wrap glass">
    <div class="success-icon">✅</div>
    <h1 class="success-title">Zamówienie złożone!</h1>
    <p class="success-sub">
      Płatność BLIK kodem <strong><?= htmlspecialchars($order['code']) ?></strong>
      na kwotę <strong><?= number_format($order['total'], 2, ',', ' ') ?> zł</strong>
      została przyjęta.
    </p>
    <p class="success-info">
      Potwierdzenie zostało wysłane na Twój e-mail.<br>
      Rower wyjedzie do Ciebie w ciągu 2–5 dni roboczych.
    </p>
    <a href="index.php?page=shop" class="btn" style="margin-top:24px;">Wróć do sklepu</a>
  </div>
</main>

<style>
.success-wrap {
  max-width: 520px;
  margin: 60px auto;
  padding: 48px 40px;
  text-align: center;
  border-radius: 16px;
}
.success-icon { font-size: 3.5rem; margin-bottom: 20px; }
.success-title {
  font-size: 1.8rem;
  font-weight: 800;
  color: var(--text-main);
  margin-bottom: 14px;
}
.success-sub {
  font-size: 0.95rem;
  color: var(--text-main);
  margin-bottom: 12px;
  line-height: 1.6;
}
.success-info {
  font-size: 0.82rem;
  color: var(--text-muted);
  line-height: 1.6;
}
</style>