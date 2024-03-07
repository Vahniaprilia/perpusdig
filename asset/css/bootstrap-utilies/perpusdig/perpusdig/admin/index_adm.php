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

    <div class="row">
    <div class="col-sm-7" style="margin-top: 5rem;">
        <h3>SELAMAT DATANG</h3>
        <h5>Sebagai Admin Perpustakaan Digital Kami!</h5>
        <samp>Kamu suka membaca? Perpustakaan kami solusinya!</samp>
      </div>
      <div class="col-sm-5">
        <img src="../asset/img/kinci.png" width="400" alt="">
      </div>
        </div>

      

<?php
  include 'layout/footer.php';
?>