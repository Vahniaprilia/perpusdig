<?php
include 'koneksi.php';
session_start();

$level = $_SESSION['level'];

if(!isset($level)){
  header("Location: ../index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Peminjam</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <script src="../asset/js/bootstrap.css"></script>
  </head>
  <body>
    <div class="container text-white">
      <h4 class="my-4">PERPUSTAKAAN DIGITAL</h4>
      <div class="card">
      <div class="card-body">
        <a href="buku.php" class="btn">Buku</a>
        <a href="../logout.php" class="btn">Logout</a>
      </div>
      </div>
    </div>