<?php
// =============================================
// VeloWorld – GŁÓWNY ROUTER APLIKACJI
// parametr ?page=...
// =============================================


// Dołączenie plików z logiką aplikacji (produkty i rezerwacje)
require_once __DIR__ . '/../app/products.php';
require_once __DIR__ . '/../app/bookings.php';

// -------------------------------------------------
// Funkcja pomocnicza: ładuje widok z katalogu /views
// -------------------------------------------------
function view(string $name, array $data = []): void {

    // Zamienia elementy tablicy na zmienne
    // np. ['products' => $products] => $products
    extract($data);

    // Dołącza plik widoku, np. views/guides.php
    include __DIR__ . "/../views/{$name}.php";
}

// -------------------------------------------------
// Odczyt parametru page z adresu URL
// np. index.php?page=guides
// -------------------------------------------------
$page = $_GET['page'] ?? 'home';

// -------------------------------------------------
// ROUTING – wybór strony
// -------------------------------------------------
switch ($page) {

    // ===== STRONA GŁÓWNA =====
    case 'home':
        view('home');
        break;

    // ===== SKLEP =====
    case 'shop':
        $category = $_GET['category'] ?? null;
        $products = getProducts($category);

        view('shop', [
            'products' => $products,
            'category' => $category
        ]);
        break;

    // ===== PORADNIKI (TRASY / PUMPTRACKI) =====
    case 'guides':
        view('guides');
        break;

    // ===== NAJCZĘSTSZE USTERKI =====
    case 'faults':
        view('faults');
        break;

    // ===== DOBÓR RAMY =====
    case 'frame_guide':
        view('frame_guide');
        break;

    // ===== SERWIS =====
    case 'service_guide':
        view('service_guide');
        break;

    // ===== BUDOWA ROWERU =====
    case 'bike_build':
        view('bike_build');
        break;

    // ===== KLIENCI =====
    case 'clients':
        view('clients');
        break;

    // ===== WARSZTAT =====
    case 'workshop':
        view('workshop');
        break;

    // ===== OBSŁUGA FORMULARZA =====
    case 'submit_booking':

        // Zabezpieczenie – tylko POST
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?page=workshop');
            exit;
        }

        // Dane z formularza
        $data = [
            'customer_name' => $_POST['customer_name'] ?? '',
            'phone'         => $_POST['phone'] ?? '',
            'service'       => $_POST['service'] ?? '',
            'date'          => $_POST['date'] ?? '',
            'note'          => $_POST['note'] ?? ''
        ];

        // Walidacja
        $errors = validateBooking($data);

        if ($errors) {
            view('workshop', [
                'errors' => $errors,
                'old'    => $data
            ]);
            break;
        }

        // Zapis do bazy
        $ok = createBooking(
            $data['customer_name'],
            $data['phone'],
            $data['service'],
            $data['date'],
            $data['note']
        );

        if ($ok) {
            view('booking_success', [
                'booking' => $data
            ]);
        } else {
            view('workshop', [
                'errors' => ['Nie udało się zapisać rezerwacji.'],
                'old'    => $data
            ]);
        }
        break;

    // ===== DOMYŚLNIE =====
    default:
        view('home');
        break;
}