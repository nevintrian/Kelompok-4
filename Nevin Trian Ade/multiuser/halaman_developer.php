<!DOCTYPE html>
<html>
<head>
	<title>Halaman Developer</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['STATUS']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Pegawai</h1>
 
	<p>Halo <b><?php echo $_SESSION['USERNAME']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['STATUS']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
	<a><a href="http://localhost/kelompok-4/Nevin%20Trian%20Ade/navbar2.php">klik disni</a> </a>
</body>
</html>