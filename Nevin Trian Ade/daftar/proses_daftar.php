<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$USER_ADMIN = $_POST['USER_ADMIN'];
$PASS_ADMIN = $_POST['PASS_ADMIN'];
$STATUS = $_POST['STATUS'];

	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload


// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO admin VALUES(NULL,'".$USER_ADMIN."', '".$PASS_ADMIN."', '".$STATUS."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
?>
