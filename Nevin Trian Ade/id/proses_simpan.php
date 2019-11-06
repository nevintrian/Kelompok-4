<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$username = $_POST['username'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];




	// Proses simpan ke Databas
	$query5 = "INSERT INTO user (id, username) VALUES(null, '$username')";
	if(mysqli_query($conn, $query5)){
		// Obtain last inserted id
		$last_id = mysqli_insert_id($conn);
	}

	$query6 = "INSERT INTO profil (kode, id, nama, telepon) VALUES(null, '$last_id', '$nama', '$telepon')";
	 // Eksekusi/ Jalankan query dari variabel $query
		$sql6 = mysqli_query($conn, $query6); // Eksekusi/ Jalankan query dari variabel $query
		header("location: index.php");
?>