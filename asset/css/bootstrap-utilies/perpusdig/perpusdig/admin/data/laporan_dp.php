<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Peminjaman Buku Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.css">
    <script src="../../asset/js/bootstrap.css"></script>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA PEMINJAMAN</h3>
                <h3>APLIKASI PERPUSTAKAAN DIGITAL</h3>
                <span>Data ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
        <table class="table my-3">
            <thead  class="table table-warning">
                <tr>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">ID User</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <?php
            include '../../koneksi/koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
                    <td><?php echo $d['IDuser'];?></td>
                    <td><?php echo $d['IDbuku'];?></td>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['tglpeminjaman'];?></td>
                    <td><?php echo $d['tglpeminjaman'];?></td>
                    <td><?php echo $d['statuspeminjaman'];?></td>
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