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
    <title>Administrator Perpustakan</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <script src="../asset/js/bootstrap.css"></script>
  </head>
  <body>
  <div class="container">
      <h4 class="my-4 text-white">PERPUSTAKAAN DIGITAL ENHYEPEN</h4>
      <div class="card">
      <div class="card-body ms-auto">
        <a href="anggota.php" class="btn">Data Anggota</a>
        <a href="buku.php" class="btn">Data Buku</a>
        <a href="pinjam.php" class="btn">Data Peminjam</a>
        <a href="../logout.php" class="btn">Logout</a>
      </div>
      </div>
    </div>