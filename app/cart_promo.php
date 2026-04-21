<?php
// cart_promo.php – obsługa kodów rabatowych przez sesję
// Wywołuj przez router: index.php?page=cart_promo

session_start();

$action   = $_GET['action'] ?? 'apply';
$redirect = $_POST['redirect'] ?? $_GET['redirect'] ?? 'index.php?page=cart';

if ($action === 'remove') {
    unset($_SESSION['cart_promo']);
} else {
    $code = strtoupper(trim($_POST['code'] ?? ''));
    $valid_codes = ['VELO10', 'VELO15', 'SUMMER20']; // ← dodaj swoje kody
    if (in_array($code, $valid_codes)) {
        $_SESSION['cart_promo'] = $code;
    }
}

header('Location: ' . $redirect);
exit;