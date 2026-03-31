<?php                                                     // Otwieramy blok PHP
// --- KONFIGURACJA BAZY (XAMPP) ---
$DB_HOST = '127.0.0.1';                                   // Adres serwera MySQL (lokalnie)
$DB_NAME = 'veloworld';                                    // NAZWA bazy (utwórz w phpMyAdmin jako 'veloworld')
$DB_USER = 'root';                                        // Domyślny użytkownik XAMPP
$DB_PASS = '';                                            // Domyślne puste hasło w XAMPP

// --- DSN (Data Source Name) informuje PDO, jak łączyć się z bazą ---
$dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4"; // Łańcuch: typ, host, nazwa bazy, kodowanie

try {                                                      // Blok try: próbujemy nawiązać połączenie
    $pdo = new PDO(                                        // Tworzymy obiekt PDO (połączenie z MySQL)
        $dsn,                                              // DSN (adres bazy)
        $DB_USER,                                          // Nazwa użytkownika
        $DB_PASS,                                          // Hasło użytkownika
        [                                                  // Tablica opcji PDO
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,   // Błędy jako wyjątki (łatwiejsze debugowanie)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Zwracaj rekordy jako tablice asocjacyjne
        ]
    );
} catch (PDOException $e) {                                // Jeśli połączenie się nie uda...
    die("Błąd połączenia z bazą: " . $e->getMessage());    // Przerwij i wyświetl komunikat błędu
}