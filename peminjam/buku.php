<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
</head>
<body style="background-color: #43766C;">
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

  <div class="container" style="margin-top: 2rem;">
  <div class="row text-white">
        <h4>Daftar Buku</h4>
        <?php
        include '../koneksi/koneksi.php';
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM buku Order by IDbuku asc");

        while ($d = mysqli_fetch_array($data)) {
        
        
        ?>
      <div class="card" style="width: 17rem;">
      <img src="../asset/img/hilmy.jpeg" class="card-img-top" alt="..." style="margin-top: 8px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $d['judul'];?></h5>
            <h6>Tahun Terbit : <?php echo $d['tahunterbit'];?></h6>
            <a href="data/detail.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-success text-white">Detail</a>
            <a href="data/pinjam.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
              </div>
          </div>
          <?php
          }
          ?>
        </div>
  </div>

<?php
  include 'layout/footer.php';
?>