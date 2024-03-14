<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Peminjam</title>
</head>
<body style="background-color: #789461;">
<nav class="navbar navbar-expand-lg bg-light border-bottom border-body" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index_pmj.php">Dashboard</a>
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
    <div class="row text-white" style="margin-top: 3rem;">
      <div class="col-sm-7" style="margin-top: 5rem; margin-left: 10px;">
        <h4>Selamat Datang di Perpustakaan Enhyepen!</h4>
        <h6>Terimakasih Sudah Berkunjung Ke Website Kami!</h6>
        <samp>Do you enjoy reading here? We do too!</samp>
      </div>
      <div class="col-sm-4">
        <img src="../asset/img/ayobaca.png" width="400" alt="">
      </div>
    </div>
  </div>


<?php
  include 'layout/footer.php';
?>