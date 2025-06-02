<?php
$data = [];

if (file_exists('reservations.json')) {
    $data = json_decode(file_get_contents('reservations.json'), true);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Daftar Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">📋 Daftar Reservasi</h1>

    <?php if (empty($data)): ?>
        <div class="alert alert-warning text-center">Belum ada reservasi.</div>
    <?php else: ?>
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Tanggal Reservasi</th>
                    <th>Layanan</th>
                    <th>Waktu Submit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $index => $r): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($r['nama']) ?></td>
                        <td><?= htmlspecialchars($r['phone']) ?></td>
                        <td><?= htmlspecialchars($r['tanggal']) ?></td>
                        <td><?= htmlspecialchars($r['layanan']) ?></td>
                        <td><?= htmlspecialchars($r['waktu_submit']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif ?>
</div>

</body>
</html>
