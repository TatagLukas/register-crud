<?php
// Memastikan form dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $layanan = $_POST['layanan'];

    // Kirim email ke pemilik barbershop
    $to = "pabbloz06@gmail.com";  // Ganti dengan email pemilik barbershop
    $subject = "Reservasi Baru di Captain Barbershop";
    $message = "
    <html>
    <head>
    <title>Reservasi Baru</title>
    </head>
    <body>
    <h2>Reservasi Baru</h2>
    <p><strong>Nama:</strong> $nama</p>
    <p><strong>Nomor Telepon:</strong> $phone</p>
    <p><strong>Tanggal Reservasi:</strong> $tanggal</p>
    <p><strong>Layanan yang Dipilih:</strong> $layanan</p>
    </body>
    </html>
    ";

    // Header email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@captainbarbershop.com" . "\r\n";

    // Mengirim email
    $emailSent = mail($to, $subject, $message, $headers);

    // Tampilkan pesan konfirmasi jika email berhasil dikirim
    if ($emailSent) {
        $confirmationMessage = "Reservasi Anda telah berhasil dikirim! Terima kasih telah memilih Captain Barbershop.";
    } else {
        $confirmationMessage = "Maaf, terjadi kesalahan dalam mengirim reservasi. Silakan coba lagi.";
    }
} else {
    // Jika data tidak dikirim melalui POST, redirect kembali ke halaman form reservasi
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Berhasil - Captain Barbershop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white text-center p-5">
        <h1>Captain Barbershop</h1>
        <p>Potong Rambut Premium untuk Pria Modern</p>
    </header>

    <section class="container my-5 text-center">
        <h2>Konfirmasi Reservasi</h2>
        <p class="mt-4"><?= $confirmationMessage; ?></p>
        <a href="index.html" class="btn btn-dark mt-3">Kembali ke Halaman Utama</a>
    </section>

    <footer class="bg-dark text-white text-center p-3">
        <p>© 2025 Captain Barbershop. All rights reserved.</p>
    </footer>

    <section class="container my-5 text-center">
    <h2>Konfirmasi Reservasi</h2>
    <p class="mt-4"><?= $confirmationMessage; ?></p>
    <a href="index.html" class="btn btn-dark mt-3">Kembali ke Halaman Utama</a>
</section>


</body>
</html>
