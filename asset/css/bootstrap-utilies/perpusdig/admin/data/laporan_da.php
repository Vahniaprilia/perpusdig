<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA ANGGOTA</h3>
                <h3>APLIKASI PERPUSTAKAAN DIGITAL</h3>
                <span>Data ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
        <table class="table my-3">
        <thead class="table table-success">
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            </tr>
        </thead>
        <?php
        include '../../koneksi/koneksi.php';

        $data = mysqli_query($conn, "SELECT * FROM user");
        while ($d = mysqli_fetch_array($data)) {
        
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDuser'];?></th>
            <td><?php echo $d['namalengkap'];?></td>
            <td><?php echo $d['email'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['username'];?></td>
            <td><?php echo $d['password'];?></td>
            <td><?php echo $d['level'];?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        </table>
      </div>
            <div class="row">
                <div class="col">
                    <p style="line-height: 1rem;">Mengetahui :</p>
                    <p>Kepala Pusat Perpustakaan Digital</p>
                    <p style="margin-top: 5rem;"><b>Vahni Aprilia</b></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
  </body>
</html>