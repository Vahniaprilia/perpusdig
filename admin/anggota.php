<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Anggota Admin</title>
</head>
<body style="background-color: #51829B;">
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
  <div class="row" style="margin-top: 1rem;">
      <div class="col1">
      <table class="table my-3">
        <thead class="table table-primary">
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">Username</th>
            <th scope="col">Full Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        include '../koneksi/koneksi.php';

        $data = mysqli_query($conn, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDuser'];?></th>
            <td><?php echo $d['username'];?></td>
            <td><?php echo $d['namalengkap'];?></td>
            <td>
               <a href="data/detail_anggota.php?iduser=<?php echo $d['IDuser'];?>" class="btn btn-primary text-white">Detail</a>
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