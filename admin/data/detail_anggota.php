<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Anggota</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #1B3C73;">
        <div class="container" style="margin-top: 6rem;">
            <div class="card" style="margin: auto; width: 700px;">
                <div class="row m-4">
                    <?php 
                    include '../../koneksi/koneksi.php';    
                    if (isset($_GET['iduser'])) {
                       $iduser = $_GET['iduser'];
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($conn, "SELECT * FROM user WHERE iduser='$iduser' ");
                    $result = mysqli_fetch_array($query);
                    ?>
                    <div class="col" style="margin-top: 1rem;">
                                 <h2>Detail Anggota</h2>    
                                 <hr>
                        <table>
                            <tr>
                                <td><h5>ID User </h5></td>
                                <td><h5>: <?php echo $result['IDuser'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Nama Lengkap </h5></td>
                                <td><h5>: <?php echo $result['namalengkap'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Email </h5></td>
                                <td><h5>: <?php echo $result['email'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Alamat </h5></td>
                                <td><h5>: <?php echo $result['alamat'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Username </h5></td>
                                <td><h5>: <?php echo $result['username'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Password </h5></td>
                                <td><h5>: <?php echo $result['password'];?></h5></td>
                            </tr>
                            <tr>
                                <td><h5>Level </h5></td>
                                <td><h5>: <?php echo $result['level'];?></h5></td>
                            </tr>
                        </table>
                        <hr>
                        <a href="../anggota.php" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>   
        </div>
  </body>
</html>