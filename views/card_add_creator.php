<?php
session_start();
header('Content-Type: application/json');

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!is_array($data)) {
    echo json_encode(['ok' => false, 'reason' => 'no data']);
    exit;
}

if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

foreach (($data['items'] ?? []) as $item) {
    $found = false;
    foreach ($_SESSION['cart'] as &$c) {
        if ($c['id'] === $item['id']) {
            $c['qty'] += (int)$item['qty'];
            $found = true;
            break;
        }
    }
    unset($c);

    if (!$found) {
        $_SESSION['cart'][] = $item;
    }
}

echo json_encode([
  'ok' => true,
  'cart_count' => count($_SESSION['cart'])
]);