<?php                                                     // Start PHP
require_once __DIR__ . '/db.php';                         // Dołącz PDO (zmienna $pdo)

// Funkcja: Walidacja danych formularza rezerwacji (zwraca listę błędów)
function validateBooking(array $data): array {             // Definiujemy funkcję z tablicą danych wejściowych
    $errors = [];                                          // Utwórz pustą listę błędów

    if (empty(trim($data['customer_name'] ?? ''))) {       // Jeśli brak imienia/nazwiska...
        $errors[] = "Imię i nazwisko jest wymagane.";      // Dodaj komunikat błędu
    }
    if (empty(trim($data['service'] ?? ''))) {             // Jeśli brak usługi...
        $errors[] = "Usługa jest wymagana.";               // Dodaj błąd
    }
    if (empty($data['date'] ?? '')) {                      // Jeśli brak daty...
        $errors[] = "Data jest wymagana.";                 // Dodaj błąd
    } else {                                               // Jeśli data jest podana...
        $today = new DateTime('today');                    // Dzisiejsza data (00:00)
        $chosen = DateTime::createFromFormat('Y-m-d', $data['date']); // Parsujemy format input[type=date]
        if (!$chosen) {                                    // Jeśli nie udało się sparsować...
            $errors[] = "Nieprawidłowy format daty.";      // Dodaj błąd formatu
        } elseif ($chosen < $today) {                      // Jeśli data jest wcześniejsza niż dziś...
            $errors[] = "Data rezerwacji nie może być z przeszłości."; // Dodaj błąd logiczny
        }
    }
    return $errors;                                        // Zwróć listę błędów (pusta => OK)
}

// Funkcja: Zapisz rezerwację do bazy danych
function createBooking(string $customer_name, ?string $phone, string $service, string $date, ?string $note): bool {
    global $pdo;                                          // Używamy PDO
    $stmt = $pdo->prepare(                                // Przygotuj INSERT z placeholderami
        "INSERT INTO bookings (customer_name, phone, service, date, note)
         VALUES (:n, :ph, :s, :d, :no)"
    );
    return $stmt->execute([                               // Wykonaj zapytanie z danymi
        ':n'  => $customer_name,                          // Imię i nazwisko
        ':ph' => $phone,                                  // Telefon (może być null/pusty)
        ':s'  => $service,                                // Usługa
        ':d'  => $date,                                   // Data (YYYY-MM-DD)
        ':no' => $note                                    // Uwagi (opcjonalnie)
    ]);
}