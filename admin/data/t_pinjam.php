<?php
    //koneksi database
    include '../../koneksi/koneksi.php';

    //menangkap data yang dikirim dari form
    $IDuser             = $_POST['IDuser'];
    $IDbuku             = $_POST['IDbuku'];
    $tglpeminjaman     = $_POST['tglpeminjaman'];
    $tglpengembalian   = $_POST['tglpengembalian'];
    $nama               = $_POST['nama'];
    $statuspeminjaman  = $_POST['statuspeminjaman'];

    //menginput data ke database
    mysqli_query($conn,"INSERT into peminjaman (IDuser,IDbuku,tglpeminjaman,tglpengembalian,nama, statuspeminjaman)
                        values('$IDuser','$IDbuku','$tglpeminjaman','$tglpengembalian','$nama','$statuspeminjaman')");
    
    //mengalihkan halaman kembali ke index.php
    header("location:../buku.php");



?>