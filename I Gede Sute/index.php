
<?php
session_start();
if(isset($_SESSION['email'])) {
// ----------------------------------CONTENT HERE---------------------------------- //
    echo '<center><h2>Selamat Datang ;)</h1>';
    echo '<center><h2>Di Halaman Web Kami</h1>';
    echo '<center><font color="red"><h2>Anda Berada Di Kawasan Tidak Kondusif</h2>';
    echo '<center><h1>Jika Ingin Keluar Silahkan Klik Di Bawah!!!!</h1><br/><a href="./logout.php">Logout</a>';
// ----------------------------------CONTENT HERE---------------------------------- //
 
} else {
    echo '<script>window.location.replace("./login.php");</script>';
}
?>