<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
$email = "aannursofii46@gmail.com";
$password = "MAN3jember";
if(isset($_POST['email']) && isset($_POST['password'])) {
	if($_POST['email'] == $email && $_POST['password'] == $password) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
		echo "<center><h1>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] == $password) {
        echo "<center><h1>Gagal!, Email Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
	} elseif($_POST['email'] == $email && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Password Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
	} elseif($_POST['email'] != $email && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="2;url=./login.php"/>';
	} 
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>