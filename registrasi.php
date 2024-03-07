<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <script src="asset/js/bootstrap.css"></script>
  </head>
  <body>

    <div class="container">
        <div class="conten">
            <div class="card text-black" style="margin: auto; width: 600px; margin-top: 8rem; background-color: pink;">
                <div class="row">
                    <div class="col m-3">
                        <h2>Silahkan Isi Data Diri Anda!</h2>
                    <form action="aksi/p_daftar.php" method="post">
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Level</label>
                        <select class="form-select" name="level" aria-label="Default select example">
                            <option selected>Select Menu</option>
                            <option value="peminjam">Peminjam</option>
                            <option value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    <P class="mt-3">already have an account <a href="index.php" class="btn btn-primary text-white">Login!</a></p>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>