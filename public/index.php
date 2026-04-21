<?php
// VeloWorld – router (?page=...)

// logika aplikacji
require_once __DIR__ . '/../app/products.php';
require_once __DIR__ . '/../app/bookings.php';

// stała do widoków (żeby nie liczyć ../ w widokach)
define('VIEWS_PATH', realpath(__DIR__ . '/../views'));

function view(string $name, array $data = []): void
{
    extract($data);
    require VIEWS_PATH . '/' . $name . '.php';
}

$page = $_GET['page'] ?? 'home';

switch ($page) {

    case 'home':
        view('home');
        break;

    case 'shop':
        $products = getProducts([
            'category' => $_GET['category'] ?? '',
            'gender' => $_GET['gender'] ?? '',
            'bike_type' => $_GET['bike_type'] ?? '',
            'frame_size' => $_GET['frame_size'] ?? '',
            'wheel_size' => $_GET['wheel_size'] ?? '',
            'q' => trim($_GET['q'] ?? ''),
        ]);
        view('shop', ['products' => $products]);
        break;

    case 'guides': {
        $guide = $_GET['guide'] ?? '';

        if ($guide !== '') {
            $guide = preg_replace('~[^a-z0-9\-]~i', '', $guide);
            $file = VIEWS_PATH . "/guides/{$guide}.php";

            if (is_file($file)) {
                view("guides/{$guide}");
                break;
            }

            http_response_code(404);
            view('home'); // możesz podmienić na własny widok 404
            break;
        }

        view('guides'); // główna strona poradników
        break;
    }

    // reszta stron tak jak masz:
    case 'faults':
        view('faults');
        break;

    case 'frame_guide':
        view('frame_guide');
        break;

    case 'service_guide':
        view('service_guide');
        break;

    case 'bike_build':
        view('bike_build');
        break;

    case 'clients':
        view('clients');
        break;

    case 'workshop':
        view('workshop');
        break;

    case 'cart':
        view('cart');
        break;

    case 'cart_action':
        require __DIR__ . '/../app/cart_action.php';
        break;

    case 'cart_promo':
        require __DIR__ . '/../app/cart_promo.php';
        break;

    case 'checkout':
        view('checkout');
        break;

    case 'submit_booking':

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?page=workshop');
            exit;
        }

        $data = [
            'customer_name' => $_POST['customer_name'] ?? '',
            'phone' => $_POST['phone'] ?? '',
            'service' => $_POST['service'] ?? '',
            'date' => $_POST['date'] ?? '',
            'note' => $_POST['note'] ?? ''
        ];

        $errors = validateBooking($data);

        if ($errors) {
            view('workshop', ['errors' => $errors, 'old' => $data]);
            break;
        }

        $ok = createBooking(
            $data['customer_name'],
            $data['phone'],
            $data['service'],
            $data['date'],
            $data['note']
        );

        if ($ok) {
            view('booking_success', ['booking' => $data]);
        } else {
            view('workshop', [
                'errors' => ['Nie udało się zapisać rezerwacji.'],
                'old' => $data
            ]);
        }
        break;

    default:
        view('home');
        break;
}
