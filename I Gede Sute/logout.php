

<?php
session_start();
if(isset($_SESSION['email'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h1>Anda Berhasil Logout</h2>kamu akan kembali ke halaman login dalam 2 detik</center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=./login.php"/>
    <center><h1></h2><br/><br/></center>
    <?php
}
?>