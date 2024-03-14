<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
</head>
<body style="background-color: #176B87;">
<nav class="navbar navbar-expand-lg bg-light border-bottom border-body" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index_pts.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>

<?php
  include 'layout/header.php';
?>

<div class="container">
    <?php

    include '../koneksi/koneksi.php';

    $buku = mysqli_query($conn, "SELECT * FROM buku");
    $user = mysqli_query($conn, "SELECT * FROM user");
    $pinjaman = mysqli_query($conn, "SELECT * FROM peminjaman");

    $b = mysqli_num_rows($buku);
    $u = mysqli_num_rows($user);
    $p = mysqli_num_rows($pinjaman);
    ?>
    <div class="row text-white" style="margin-left: 4rem;">
    <div class="col-sm-7 text-white" style="margin-top: 8rem;">
        <h4>Selamat Datang Di Perpustakaan Enhyepen!</h4>
        <h6>Selamat Bekerja Petugas Perpus Kami!</h6>
        <samp>Do you like to read? Our library is the solution!</samp>
      </div>
      <div class="col-sm-5">
        <img src="../asset/img/ibuanak.png" style="margin-left: 15px;" width="400" alt="">
      </div>
        </div>
      
<?php
  include 'layout/footer.php';
?>