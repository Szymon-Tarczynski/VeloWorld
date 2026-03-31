<?php                                                     // Start PHP
require_once __DIR__ . '/db.php';                         // Dołącza plik db.php (zapewnia zmienną $pdo)

// Funkcja: Pobierz listę produktów (opcjonalnie filtr po kategorii)
function getProducts(?string $category = null): array {    // Definiujemy funkcję z parametrem (może być null)
    global $pdo;                                          // Używamy globalnego PDO utworzonego w db.php

    if ($category) {                                      // Jeśli przekazano kategorię (np. 'rower')...
        $stmt = $pdo->prepare(                            // Przygotuj bezpieczne zapytanie SQL z placeholderem
            "SELECT * FROM products WHERE category = :cat ORDER BY created_at DESC"
        );
        $stmt->execute([':cat' => $category]);            // Podstaw parametr :cat -> chroni przed SQL Injection
    } else {                                              // Jeśli nie przekazano kategorii...
        $stmt = $pdo->query(                              // Wykonaj proste zapytanie bez parametrów
            "SELECT * FROM products ORDER BY created_at DESC"
        );
    }
    return $stmt->fetchAll();                             // Zwróć wszystkie rekordy jako tablica asocjacyjna
}

// (Pod wersję B) Funkcja: Dodaj produkt — teraz nieużywana w MVP, ale przygotowana
function addProduct(string $name, float $price, string $category, ?string $description): bool {
    global $pdo;                                          // Używamy PDO
    $stmt = $pdo->prepare(                                // Przygotuj INSERT z placeholderami
        "INSERT INTO products (name, price, category, description) VALUES (:n, :p, :c, :d)"
    );
    return $stmt->execute([                               // Wykonaj zapytanie z danymi
        ':n' => $name,                                    // Nazwa produktu
        ':p' => $price,                                   // Cena
        ':c' => $category,                                // Kategoria
        ':d' => $description                              // Opis (może być null)
    ]);
}