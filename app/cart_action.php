<?php
// app/cart_action.php
// TYLKO operacje na koszyku, nigdy widok

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['cart'] ??= [];

$action = $_POST['action'] ?? '';
$id     = (int)($_POST['id'] ?? 0);
$qty    = max(1, (int)($_POST['qty'] ?? 1));

if ($action === '') {
    header('Location: index.php?page=cart');
    exit;
}

switch ($action) {

    case 'add':
        if ($id <= 0) break;

        // dane produktu zawsze z POST (pewne i działa)
        $name  = trim($_POST['name'] ?? '');
        $price = (float)($_POST['price'] ?? 0);
        $image = $_POST['image'] ?? '';
        $bike  = $_POST['bike_type'] ?? '';
        $emoji = $_POST['emoji'] ?? '🚲';

        if ($name === '') break;

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$id] = [
                'id'        => $id,
                'name'      => $name,
                'price'     => $price,
                'image'     => $image,
                'bike_type' => $bike,
                'emoji'     => $emoji,
                'qty'       => $qty,
            ];
        }
        break;

    case 'update':
        if ($id > 0 && isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] = max(1, $qty);
        }
        break;

    case 'remove':
        unset($_SESSION['cart'][$id]);
        break;

    case 'clear':
        $_SESSION['cart'] = [];
        break;
}

// ✅ ZAWSZE do widoku koszyka
header('Location: index.php?page=cart');
exit;