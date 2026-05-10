<?php
// app/cart_action.php
// operacje na koszyku – spójne dla ID string + numeric

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['cart'] ??= [];
if (!is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$action   = $_POST['action'] ?? '';
$id       = (string)($_POST['id'] ?? '');
$qty      = (int)($_POST['qty'] ?? 1);
$qty      = max(1, $qty);
$redirect = $_POST['redirect'] ?? 'index.php?page=cart';

$isAjax = false;
$accept = $_SERVER['HTTP_ACCEPT'] ?? '';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) $isAjax = true;
if (stripos($accept, 'application/json') !== false) $isAjax = true;

if ($action === '') {
    if ($isAjax) { echo json_encode(['ok'=>false,'error'=>'no action']); exit; }
    header('Location: index.php?page=cart');
    exit;
}

switch ($action) {

    case 'add':
        if ($id === '') break;

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
                'id'        => $id,     // ✅ string lub numeric jako string
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
        if ($id !== '' && isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['qty'] = max(1, $qty);
        }
        break;

    case 'remove':
        if ($id !== '') {
            unset($_SESSION['cart'][$id]);
        }
        break;

    case 'clear':
        $_SESSION['cart'] = [];
        break;
}

$count = 0;
foreach ($_SESSION['cart'] as $row) {
    $count += (int)($row['qty'] ?? 0);
}

if ($isAjax) {
    header('Content-Type: application/json');
    echo json_encode(['ok' => true, 'count' => $count]);
    exit;
}

// domyślnie: formularze -> redirect
header('Location: ' . $redirect);
exit;