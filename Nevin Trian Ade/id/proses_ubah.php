<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$username= $_POST['username'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];


	
		$query = "SELECT user.id, user.username, profil.kode, profil.nama, profil.telepon FROM user LEFT JOIN profil ON user.id=profil.id WHERE user.id='$id";
		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Proses ubah data ke Database
		$query = "UPDATE user LEFT JOIN profil ON user.id=profil.id SET user.username='$username', profil.nama='$nama', profil.telepon='$telepon' WHERE user.id='$id'";
		$sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	

?>
