-- ============================================
--  PLIK: schema.sql
--  Tworzy tabele dla sklepu + warsztatu
--  Baza: veloworld
-- ============================================

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  category ENUM('rower','akcesoria','części') NOT NULL,

  bike_type ENUM(
    'Elektryczny',
    'górski',
    'szosowy',
    'miejski',
    'gravel',
    'trekkingowy',
    'fitness',
    'enduro',
    'xc',
    'full'
  ) NULL,

  gender ENUM('Damski','Męski','Unisex') NULL,

  wheel_size ENUM(
    '26',
    '27.5',
    '29',
    '700c (szosowe/gravel/fitness/trekking)'
  ) NULL,

  frame_size VARCHAR(20) NULL,   

  description TEXT,
  image VARCHAR(255) NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_name VARCHAR(255) NOT NULL,
  phone VARCHAR(30),
  service VARCHAR(255) NOT NULL,
  date DATE NOT NULL,
  note TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  role ENUM('admin','user') DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
