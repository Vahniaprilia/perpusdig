<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pinjam Buku</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #474F7A;">
    <div class="container">
        <div class="card" style="margin: auto; width: 700px; margin-top: 1rem;">
            <div class="row m-4">
                <div class="col-sm-12">
                    <h3>Form Peminjaman Buku</h3>
                    <form action="t_pinjam.php" method="POST">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                            <input type="text" name="IDbuku" class="form-control" required>
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">ID User</label>
                            <input type="text" name="IDuser" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
                            <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tglpeminjaman" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" name="tglpengembalian" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status Peminjaman</label>
                            <select class="form-select" name="statuspeminjaman" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="dipinjam">Pinjam</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                        <a href="../peminjam.php" class="btn btn-danger m-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>