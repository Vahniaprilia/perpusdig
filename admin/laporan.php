<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku</title>
</head>
<body style="background-color: #424769;">
<nav class="navbar navbar-expand-lg bg-light border-bottom border-body" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index_adm.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-4 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
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
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <div class="card text-white text-center" style="background-color: #365486;">
                    <h3 class="m-2">Laporan Data Anggota</h3>
                    <a href="data/laporan_da.php" class="btn btn-dark btn-sm">Lihat</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-white text-center" style="background-color: #365486;">
                    <h3 class="m-2">Laporan Data Buku</h3>
                    <a href="data/laporan_db.php" class="btn btn-dark btn-sm">Lihat</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-white text-center" style="background-color: #365486;">
                    <h3 class="m-2">Laporan Peminjaman</h3>
                    <a href="data/laporan_dp.php" class="btn btn-dark btn-sm">Lihat</a>
                </div>
            </div>
        </div>
    </div>

<?php
include 'layout/footer.php';
?>