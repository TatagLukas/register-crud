<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: index.php");
include 'db.php';

$data = mysqli_query($conn, "SELECT * FROM salons ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h3>Daftar Registrasi Salon</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Salon</th><th>Pemilik</th><th>Status</th><th>Tgl Daftar</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($s = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?= $s['salon_name'] ?></td>
                <td><?= $s['owner_name'] ?></td>
                <td><?= $s['status'] ?></td>
                <td><?= $s['created_at'] ?></td>
                <td>
                    <a href="salon-detail.php?id=<?= $s['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                    <a href="delete.php?id=<?= $s['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
