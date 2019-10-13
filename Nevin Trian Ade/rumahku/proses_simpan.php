<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama_perum = $_POST['nama_perum'];
$tipe = $_POST['tipe'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$gambarbaru = date('dmYHis').$gambar;

// Set path folder tempat menyimpan fotonya
$path = "images/".$gambarbaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
	$query = "INSERT INTO rumah VALUES('".$id."', '".$nama_perum."', '".$tipe."', '".$stok."', '".$harga."', '".$fasilitas."','".$gambarbaru."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	// Jika gambar gagal diupload, Lakukan :
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
