<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Buku</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body>
    <div class="container">
        <div class="card" style="margin-top: 1rem;">
            <div class="row m-4">
                
                <div class="col-sm-7">
                    <h3>Form Edit Buku</h3>
                    <?php
                        include '../../koneksi/koneksi.php';
                        $id = $_GET['idbuku'];
                        $data = mysqli_query($conn,"SELECT * from buku where IDbuku='$id'");
                        while($d = mysqli_fetch_array($data)){
                        
                    ?>
                    <a href="../buku.php" class="btn btn-danger my-2">Kembali</a>
                    <form action="e_buku.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" value="<?php echo $d['IDbuku'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" value="<?php echo $d['judul'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" value="<?php echo $d['penulis'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" value="<?php echo $d['penerbit'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                    <input type="text" name="tahunterbit" value="<?php echo $d['tahunterbit'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                        </div>
                        <div class="col-sm-18">
                        <button type="submit" name="update" class="btn btn-primary">Perbarui</button>
                        </div>
                        </from>
                        <?php
                             }
                        ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>