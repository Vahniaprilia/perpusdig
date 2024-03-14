<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #638889;">

    <div class="container" style="margin-top: 6rem;">
        <div class="card" style="margin: auto; width: 700px;">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['idbuku'])) {
                      $idbuku = $_GET['idbuku'];  
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($conn, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                    $result = mysqli_fetch_array($query);
                ?>
                <div class="col text-center" >
                    <?php echo "<img src='../../asset/img/hilmy.jpeg' height='350' alt=''>"?>                
                </div>
                <div class="col" style="margin-top: 3rem;">
                <h2>Detail Buku</h2>
                <a href="../buku.php" class="btn btn-danger">Kembali</a><hr>
                    <table>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Judul Buku</h5></td>
                            <td><h5>: <?php echo $result['judul'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis Buku</h5></td>
                            <td><h5>: <?php echo $result['penulis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit Buku</h5></td>
                            <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun Terbit</h5></td>
                            <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                        </tr>
                    </table><hr>
                </div>
            </div>
        </div>
    </div>
     </body>
</html>