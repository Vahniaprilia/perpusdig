<?php
    session_start();
?>
<?php
    session_start();
    //logout
    session_destroy();
    // untuk mengarahkan halaman kedalam index/form login
    header("location: index.php");
?>