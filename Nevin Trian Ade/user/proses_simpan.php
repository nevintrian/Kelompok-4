<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form


$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$STATUS = $_POST['STATUS'];
$NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$NO_TELEPON = $_POST['NO_TELEPON'];
$NAMA = $_POST['NAMA'];



	// Proses simpan ke Databas
	$query5 = "INSERT INTO user (KD_USER, USERNAME, PASSWORD, STATUS) VALUES(null, '$USERNAME', '$PASSWORD', '$STATUS')";
	if(mysqli_query($conn, $query5)){
		// Obtain last inserted id
		$last_id = mysqli_insert_id($conn);
	}

	$query6 = "INSERT INTO profil (KD_PROFIL, KD_USER, NAMA_LENGKAP, TGL_LAHIR, JENIS_KELAMIN, FOTO) VALUES(null, '$last_id', '$NAMA_LENGKAP', '$TGL_LAHIR', '$JENIS_KELAMIN', null)";
	 // Eksekusi/ Jalankan query dari variabel $query
	 if(mysqli_query($conn, $query6)){
		// Obtain last inserted id
		$last_id1 = mysqli_insert_id($conn);
	 }
	$query7 = "INSERT INTO profil_detil (KD_PROFIL, NO_TELEPON, NAMA) VALUES('$last_id1', '$NO_TELEPON', '$NAMA')";
	// Eksekusi/ Jalankan query dari variabel $query
	   $sql = mysqli_query($conn, $query7); // Eksekusi/ Jalankan query dari variabel $query
		
		header("location: index.php");
?>