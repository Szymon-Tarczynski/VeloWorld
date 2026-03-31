-- Ten plik dodaje kilka produktów startowych do tabeli 'products',
-- żeby widok sklepu miał co wyświetlać.

INSERT INTO products (name, price, category, description) VALUES
('Rower górski Trail 3.0', 3499.00, 'rower', 'Aluminiowa rama, 29", amortyzowany widelec'),
('Kask szosowy AeroLite', 299.99, 'akcesoria', 'Wentylacja + niska waga'),
('Łańcuch 11-rzędowy', 129.50, 'części', 'Trwały łańcuch 11s kompatybilny z większością napędów'),
('Rower miejski CityComfort', 1999.00, 'rower', 'Wygodna pozycja, bagażnik, błotniki');