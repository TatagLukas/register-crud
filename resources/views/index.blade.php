<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captain Barbershop Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white text-center p-5">
        <h1>Salon Beauty</h1>
        <p>Potong Rambut Premium untuk Pria Modern</p>
    </header>

    <section class="container my-5">
        <h2 class="text-center">Layanan Kami</h2>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <h4>Haircut</h4>
                <p>Potongan gaya terkini</p>
            </div>
            <div class="col-md-4">
                <h4>Shaving</h4>
                <p>Cukur bersih dan rapi</p>
            </div>
            <div class="col-md-4">
                <h4>Massage</h4>
                <p>Relaksasi kepala & leher</p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 text-center">
        <h2>Reservasi Sekarang</h2>
        <form class="container mt-4" style="max-width: 500px;" method="POST" action="sendmail.php">
            <input type="text" name="nama" class="form-control mb-3" placeholder="Nama" required>
            <input type="tel" name="phone" class="form-control mb-3" placeholder="Nomor Telepon" required>
            <input type="date" name="tanggal" class="form-control mb-3" required>
            <select name="layanan" class="form-control mb-3" required>
                <option value="">-- Pilih Layanan --</option>
                <option value="Haircut">Haircut</option>
                <option value="Shaving">Shaving</option>
                <option value="Massage">Massage</option>
            </select>
            <button class="btn btn-dark w-100">Kirim Reservasi</button>
        </form>
    </section>

    <footer class="bg-dark text-white text-center p-3">
        <p>© 2025 Captain Barbershop. All rights reserved.</p>
    </footer>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $tanggal = $_POST['tanggal'];
    $layanan = $_POST['layanan'];

    // Email tujuan (pemilik barbershop)
    $to = "pabbloz06@gmail.com";  // Ganti dengan email pemilik barbershop

    // Subjek email
    $subject = "Reservasi Baru di Captain Barbershop";

    // Pesan email
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
    $headers .= "From: noreply@captainbarbershop.com" . "\r\n"; // Ganti dengan alamat email yang valid

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Reservasi berhasil dikirim! Terima kasih atas pemesanan Anda.</p>";
    } else {
        echo "<p>Maaf, terjadi kesalahan dalam pengiriman reservasi.</p>";
    }
}
?>

</body>

</html>
