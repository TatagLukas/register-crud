
<?php
$file = 'reservations.json';
$reservations = [];

if (file_exists($file)) {
    $content = file_get_contents($file);
    $reservations = json_decode($content, true);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Reservasi - Beauty Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="font-family: 'Segoe UI', sans-serif; background: #fff8f6;">

    <div class="container my-5">
        <h2 class="mb-4 text-center" style="color: #8E5A51;">Daftar Reservasi Masuk</h2>

        <?php if (empty($reservations)): ?>
            <div class="alert alert-info text-center">
                Belum ada reservasi yang masuk.
            </div>
        <?php else: ?>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Tanggal Reservasi</th>
                        <th>Layanan</th>
                        <th>Waktu Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservations as $index => $res): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($res['nama']) ?></td>
                        <td><?= htmlspecialchars($res['phone']) ?></td>
                        <td><?= htmlspecialchars($res['tanggal']) ?></td>
                        <td><?= htmlspecialchars($res['layanan']) ?></td>
                        <td><?= htmlspecialchars($res['waktu_submit']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-dark">Kembali ke Halaman Reservasi</a>
        </div>
    </div>

</body>
</html>
