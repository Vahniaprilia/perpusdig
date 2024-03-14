<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #436850;">
    <div class="container" style="margin-top: 6rem;">
    <div class="card" style="margin: auto; width: 700px;">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['idp'])) {
                      $idp = $_GET['idp'];  
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($conn, "SELECT * FROM peminjaman WHERE IDpeminjaman='$idp' ");
                    $result = mysqli_fetch_array($query);
                ?>
                <div class="col">
                <h2>Detail Peminjam</h2>
                <a href="../pinjam.php" class="btn btn-danger">Kembali</a><hr>
                    <table>
                        <tr>
                            <td><h5>ID Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['IDpeminjaman'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID User</h5></td>
                            <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Peminjam</h5></td>
                            <td><h5>: <?php echo $result['nama'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tanggal Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['tglpeminjaman'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tanggal Pengembalian</h5></td>
                            <td><h5>: <?php echo $result['tglpengembalian'];?></h5></td>
                        </tr>
                        <tr class="bg-success text-white">
                            <td><h5>Status Peminjaman</h5></td>
                            <td><h5>: <?php echo $result['statuspeminjaman'];?></h5></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </body>
</html>