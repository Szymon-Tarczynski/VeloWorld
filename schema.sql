-- Ten plik tworzy tabele potrzebne do działania MVP sklepu/warsztatu.
-- Bazę 'veloworld' utwórz w phpMyAdmin (patrz instrukcje niżej).

-- Tabela produktów sklepu (czytana przez widok 'shop'):
CREATE TABLE IF NOT EXISTS products (              -- Utwórz tabelę 'products', jeśli jeszcze nie istnieje
  id INT AUTO_INCREMENT PRIMARY KEY,               -- Klucz główny, rosnący automatycznie
  name VARCHAR(255) NOT NULL,                      -- Nazwa produktu (np. "Rower górski")
  price DECIMAL(10,2) NOT NULL,                    -- Cena (10 cyfr, 2 miejsca po przecinku)
  category VARCHAR(100) NOT NULL,                  -- Kategoria (np. 'rower', 'części', 'akcesoria')
  description TEXT,                                -- Opis (opcjonalny)
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP   -- Data dodania (domyślnie: bieżący czas)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;           -- Silnik i kodowanie znaków

-- Tabela rezerwacji warsztatu (zapisuje formularz z 'workshop'):
CREATE TABLE IF NOT EXISTS bookings (              -- Utwórz tabelę 'bookings', jeśli jeszcze nie istnieje
  id INT AUTO_INCREMENT PRIMARY KEY,               -- Klucz główny rezerwacji
  customer_name VARCHAR(255) NOT NULL,             -- Imię i nazwisko klienta (wymagane)
  phone VARCHAR(30),                               -- Telefon (opcjonalny)
  service VARCHAR(255) NOT NULL,                   -- Nazwa usługi (wymagana)
  date DATE NOT NULL,                              -- Data wizyty w formacie YYYY-MM-DD (wymagana)
  note TEXT,                                       -- Dodatkowe uwagi (opcjonalne)
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP   -- Data utworzenia wpisu (domyślnie: teraz)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;           -- Silnik i kodowanie znaków

-- Tabela użytkowników (na przyszłość, wersja B: logowanie/admin):
CREATE TABLE IF NOT EXISTS users (                 -- Utwórz tabelę 'users', jeśli jeszcze nie istnieje
  id INT AUTO_INCREMENT PRIMARY KEY,               -- Klucz główny użytkownika
  email VARCHAR(255) UNIQUE NOT NULL,              -- E-mail (unikalny, wymagany)
  password_hash VARCHAR(255) NOT NULL,             -- Hash hasła (password_hash)
  role ENUM('admin','user') DEFAULT 'user',        -- Rola (domyślnie zwykły użytkownik)
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP   -- Data rejestracji
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;           -- Silnik i kodowanie