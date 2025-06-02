<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: index.php");
include 'db.php';

$count = mysqli_query($conn, "SELECT COUNT(*) as total FROM salons");
$total = mysqli_fetch_assoc($count)['total'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Admin Salon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h3>Dashboard Admin</h3>
    <p>Selamat datang, <strong><?= $_SESSION['admin'] ?></strong></p>
    <p>Total Registrasi Salon: <strong><?= $total ?></strong></p>
    <a href="salons.php" class="btn btn-primary">Kelola Pendaftaran Salon</a>
    <a href="logout.php" class="btn btn-secondary">Logout</a>
</body>
</html>
