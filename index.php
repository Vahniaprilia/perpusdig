<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form  Login</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <script src="asset/js/bootstrap.css"></script>
  </head>
  <body style="background-color: #944E63;">
    <div class="container">
        <div class="conten" style="margin: auto; width: 600px;">
            <div class="card text-white" style="margin-top: 8rem; background-color: #B47B84;;">
                <div class="row">
                    <div class="col m-3">
                        <h2>Silahkan Login!</h2>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan']=="gagal"){
                            echo"<div class='alert alert-danger'>Username atau Password Anda salah</div>";
                            }  
                          }
                        ?>
                    <form action="aksi/c_login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text"  name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-danger">Login</button>
                    </form>
                    <P class="mt-3">Don't have an account? <a href="registrasi.php" class="btn btn-danger text-white">Create</a></p>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>