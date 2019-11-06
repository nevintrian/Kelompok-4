<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$KD_USER = $_GET['KD_USER'];
	

// Ambil Data yang Dikirim dari Form
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$STATUS = $_POST['STATUS'];
$NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$NO_TELEPON = $_POST['NO_TELEPON'];
$NAMA = $_POST['NAMA'];

// Cek apakah user ingin mengubah fotonya atau tidak

		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT user.KD_USER, user.USERNAME, user.STATUS, user.PASSWORD, profil.KD_PROFIL, profil.NAMA_LENGKAP, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil_detil.NAMA, profil.FOTO 
		FROM user LEFT JOIN profil 
		ON user.KD_USER=profil.KD_USER 
		LEFT JOIN profil_detil 
		ON profil.KD_PROFIL=profil_detil.KD_PROFIL";
		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	
		// Proses ubah data ke Database
		$query = "UPDATE user LEFT JOIN profil 
		ON user.KD_USER=profil.KD_USER 
		LEFT JOIN profil_detil 
		ON profil.KD_PROFIL=profil_detil.KD_PROFIL SET user.USERNAME='$USERNAME', user.PASSWORD='$PASSWORD', user.STATUS='$STATUS', profil.NAMA_LENGKAP='$NAMA_LENGKAP', profil.TGL_LAHIR='$TGL_LAHIR', profil.JENIS_KELAMIN='$JENIS_KELAMIN', profil_detil.NO_TELEPON='$NO_TELEPON', profil_detil.NAMA='$NAMA'";
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
