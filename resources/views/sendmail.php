<?php
// Konfigurasi koneksi database
$host = "localhost";
$db = "beauty_salon";
$user = "root";      // ganti sesuai user DB kamu
$pass = "";          // ganti sesuai password DB kamu

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil dan sanitasi data POST
$name    = htmlspecialchars(trim($_POST['name'] ?? ''));
$phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
$date    = htmlspecialchars(trim($_POST['date'] ?? ''));
$service = htmlspecialchars(trim($_POST['service'] ?? ''));

// Validasi data
if (empty($name) || empty($phone) || empty($date) || empty($service)) {
    echo "Semua data wajib diisi.";
    exit;
}

// Siapkan query
$stmt = $conn->prepare("INSERT INTO reservasi (nama, phone, tanggal, layanan) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $date, $service);

// Eksekusi query
if ($stmt->execute()) {
    echo "✅ Terima kasih, $name! Reservasi Anda berhasil dicatat.";
} else {
    echo "❌ Terjadi kesalahan saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
