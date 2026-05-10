<?php
// app/cart_add_creator.php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header('Content-Type: application/json');

// odebranie JSON
$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!is_array($data) || empty($data['items']) || !is_array($data['items'])) {
    echo json_encode([
        'ok' => false,
        'error' => 'Invalid payload'
    ]);
    exit;
}

// upewnij się że koszyk istnieje
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// zapis do sesji (tablica asocjacyjna!)
foreach ($data['items'] as $item) {

    if (
        empty($item['id']) ||
        empty($item['name']) ||
        !isset($item['price'])
    ) {
        continue;
    }

    $id = (string) $item['id'];   // KLUCZ JAKO STRING!!
    $qty = max(1, (int) ($item['qty'] ?? 1));

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $qty;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'name' => $item['name'],
            'price' => (float) $item['price'],
            'qty' => $qty,
            'image' => '',
            'bike_type' => '',
            'emoji' => $item['emoji'] ?? '🧩',
            'sub' => $item['sub'] ?? '',
            'cfgPart' => $item['cfgPart'] ?? '',
        ];
    }
}

echo json_encode([
    'ok' => true,
    'count' => count($_SESSION['cart'])
]);
exit;