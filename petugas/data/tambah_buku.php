<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #12372A;">
    <div class="container">
        <div class="card" style="margin: auto; width: 700px; margin-top: 7rem;">
            <div class="row m-4">
                
                <div class="col-sm-14">
                    <h3>Form Tambah Buku</h3>
                    <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                    <input type="text" name="tahunterbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                        </div>
                        <div class="col-sm-18">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="../buku.php" class="btn btn-success my-2">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>