<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku</title>
</head>
<body style="background-color: #12372A;">
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
    <div class="row text-white" style="margin-top: 1rem;">
        <h4>Data Buku</h4>
        <div class="col">
            <a href="data/tambah_buku.php" class="btn btn-success my-3">Tambah Buku</a>
        <table class="table mb-2">
            <thead  class="table table-success">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDbuku'];?></th>
                    <td><?php echo $d['judul'];?></td>
                    <td>
                        <a href="data/detail_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary text-white">Detail</a>
                        <a href="data/edit_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-warning text-white">Edit</a>
                        <a href="data/delete_buku.php?IDbuku=<?php echo $d['IDbuku'];?>" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
              }
            ?>
        </table>
        </div>
    </div>
  </div>
<?php
  include 'layout/footer.php';
?>


