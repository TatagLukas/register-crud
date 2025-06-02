CREATE DATABASE IF NOT EXISTS salon_app;

USE salon_app;

-- Tabel admin
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Tabel registrasi salon
CREATE TABLE salons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    salon_name VARCHAR(100) NOT NULL,
    owner_name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin default
INSERT INTO admins (username, password) VALUES ('admin', MD5('admin123'));
