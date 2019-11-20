<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$STATUS = $_POST['STATUS'];
$EMAIL = $_POST['EMAIL'];
$NAMA_LENGKAP= $_POST['NAMA_LENGKAP'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload


// Proses upload

	// Proses simpan ke Database
	$query5 = "INSERT INTO user VALUES('$USERNAME', '$EMAIL','$PASSWORD', '$STATUS' , '$NAMA_LENGKAP', '$TGL_LAHIR', '$JENIS_KELAMIN', null)";
	$sql5 = mysqli_query($konek, $query5); // Eksekusi/ Jalankan query dari variabel $query
	$last_id = mysqli_insert_id($konek);
	
		header("location: login.php");
?>




