<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Buku Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA BUKU</h3>
                <h3>PERPUSTAKAAN DIGITAL</h3>
                <span>Data ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
        <table class="table my-3">
            <thead  class="table table-warning">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit </th>
                </tr>
            </thead>
            <?php
            include '../../koneksi/koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDbuku'];?></th>
                    <td><?php echo $d['judul'];?></td>
                    <td><?php echo $d['penulis'];?></td>
                    <td><?php echo $d['penerbit'];?></td>
                    <td><?php echo $d['tahunterbit'];?></td>
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