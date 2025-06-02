<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: index.php");
include 'db.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM salons WHERE id=$id");
$salon = mysqli_fetch_assoc($data);

if (isset($_POST['approve'])) {
    mysqli_query($conn, "UPDATE salons SET status='approved' WHERE id=$id");
    header("Location: salons.php");
}
if (isset($_POST['reject'])) {
    mysqli_query($conn, "UPDATE salons SET status='rejected' WHERE id=$id");
    header("Location: salons.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h3>Detail Pendaftaran Salon</h3>
    <p><strong>Nama Salon:</strong> <?= $salon['salon_name'] ?></p>
    <p><strong>Pemilik:</strong> <?= $salon['owner_name'] ?></p>
    <p><strong>Email:</strong> <?= $salon['email'] ?></p>
    <p><strong>Telepon:</strong> <?= $salon['phone'] ?></p>
    <p><strong>Alamat:</strong> <?= $salon['address'] ?></p>
    <p><strong>Status:</strong> <?= $salon['status'] ?></p>

    <form method="POST">
        <button name="approve" class="btn btn-success">Setujui</button>
        <button name="reject" class="btn btn-warning">Tolak</button>
        <a href="salons.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
