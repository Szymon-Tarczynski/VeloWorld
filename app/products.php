<?php
require_once __DIR__ . '/db.php';

// Pobierz produkty z opcjonalnymi filtrami
function getProducts(array $filters = []): array {
    global $pdo;

    $where  = [];
    $params = [];

    if (!empty($filters['category']))   { $where[] = "category = :category";     $params['category']   = $filters['category']; }
    if (!empty($filters['gender']))     { $where[] = "gender = :gender";         $params['gender']     = $filters['gender']; }
    if (!empty($filters['bike_type']))  { $where[] = "bike_type = :bike_type";   $params['bike_type']  = $filters['bike_type']; }
    if (!empty($filters['frame_size'])) { $where[] = "frame_size = :frame_size"; $params['frame_size'] = $filters['frame_size']; }
    if (!empty($filters['wheel_size'])) { $where[] = "wheel_size = :wheel_size"; $params['wheel_size'] = $filters['wheel_size']; }

    if (!empty($filters['q'])) {
        $where[]      = "(name LIKE :q OR description LIKE :q)";
        $params['q']  = '%' . $filters['q'] . '%';
    }

    $sql = "SELECT * FROM products";
    if ($where) $sql .= " WHERE " . implode(" AND ", $where);
    $sql .= " ORDER BY created_at DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

// Dodaj produkt
function addProduct(string $name, float $price, string $category, ?string $description): bool {
    global $pdo;
    $stmt = $pdo->prepare(
        "INSERT INTO products (name, price, category, description) VALUES (:n, :p, :c, :d)"
    );
    return $stmt->execute([':n' => $name, ':p' => $price, ':c' => $category, ':d' => $description]);
}