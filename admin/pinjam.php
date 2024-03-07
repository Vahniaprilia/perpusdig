<?php
    include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
        <div class="col">
        <h2>Data Peminjam</h2>
        <table class="table my-2">
            <thead  class="table table-primary  ">
                <tr>
                    <th scope="col">ID Peminjaman</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Status Peminjaman</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($conn, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['statuspeminjaman'];?></td>
                    <td>
                        <a href="data/detail_peminjaman.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-primary text-white">Detail</a>
                    </td>
                </tr>
            </tbody>
            <?php
              }
            ?>
        </table>
        </div>
    </div>
  </div>


<?php
  include 'layout/footer.php';
?>
        </div>
    </div>
</div>