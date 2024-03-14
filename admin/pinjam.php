<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjam</title>
</head>
<body style="background-color: #1B4242;">
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
    <div class="row text-white" style="margin-top: 1rem;"> 
        <div class="col">
        <h2>Data Peminjam</h2>
        <table class="table my-2">
            <thead  class="table table-success">
                <tr>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['statuspeminjaman'];?></td>
                    <td>
                        <a href="data/detail_peminjaman.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-success text-white">Detail</a>
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
        </div>
    </div>
</div>