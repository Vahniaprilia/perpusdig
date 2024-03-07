<?php
  include 'layout/header.php';
?>

<div class="container">
    <?php

    include '../koneksi/koneksi.php';

    $buku = mysqli_query($conn, "SELECT * FROM buku");
    $user = mysqli_query($conn, "SELECT * FROM user");
    $pinjaman = mysqli_query($conn, "SELECT * FROM peminjaman");

    $b = mysqli_num_rows($buku);
    $u = mysqli_num_rows($user);
    $p = mysqli_num_rows($pinjaman);
    ?>
    <div class="row" style="margin-left: 4rem;">
    <div class="col-sm-7" style="margin-top: 5rem;">
        <h3>SELAMAT DATANG</h3>
        <h5>Sebagai Petugas Perpustakaan Digital Kami!</h5>
        <samp>Membaca adalah Kunci Kesuksesan</samp>
      </div>
      <div class="col-sm-5">
        <img src="../asset/img/login.jpg" width="400" alt="">
      </div>
        </div>

      

<?php
  include 'layout/footer.php';
?>