<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: index.php");
include 'db.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM salons WHERE id=$id");
header("Location: salons.php");
