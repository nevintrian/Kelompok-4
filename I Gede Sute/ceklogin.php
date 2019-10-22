
<?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.php");</script>';
} else {
$email = "saya@email.com";
$password = "123";
if(isset($_POST['email']) && isset($_POST['password'])) {
	if($_POST['email'] == $email && $_POST['password'] == $password) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="0; url=./index.php"/>';
		echo "<center><h1>Berhasil, dalam 0 detik kamu akan dialihkan ke halaman utama</h1></center>";
	} elseif($_POST['email'] != $email && $_POST['password'] == $password) {
        echo "<center><h1>Gagal!, Email Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="1; url=./login.php"/>';
	} elseif($_POST['email'] == $email && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Password Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="1; url=./login.php"/>';
	} elseif($_POST['email'] != $email && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Email & Password Salah</h1></center>";
        echo '<meta http-equiv="refresh" content="1; url=./login.php"/>';
	} 
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>