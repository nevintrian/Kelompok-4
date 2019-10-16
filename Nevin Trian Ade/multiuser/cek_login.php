<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['STATUS']=="developer"){
 
		// buat session login dan username
		$_SESSION['USERNAME'] = $USERNAME;
		$_SESSION['STATUS'] = "developer";
		// alihkan ke halaman dashboard admin
		header("location:halaman_developer.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['STATUS']=="customer"){
		// buat session login dan username
		$_SESSION['USERNAME'] = $USERNAME;
		$_SESSION['STATUS'] = "customer";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_customer.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>