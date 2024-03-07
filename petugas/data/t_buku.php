<?php

// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$judul       = $_POST['judul'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$Foto        = $_FILES['Foto']['name'];

mysqli_query($conn,"INSERT into buku 
                        values('', '$judul','$penulis','$penerbit','$tahunterbit')");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 



?>