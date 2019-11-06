<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$NAMA_LENGKAP = $_POST['NAMA_LENGKAP'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$NO_TELEPON = $_POST['NO_TELEPON'];
$FOTO = $_FILES['FOTO']['name'];
$tmp = $_FILES['FOTO']['tmp_name'];
	
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$gambarbaru = date('dmYHis').$FOTO;

// Set path folder tempat menyimpan fotonya
$path = "images/".$gambarbaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database
    $query1 = "INSERT INTO profil VALUES('".$id."', '".$NAMA_LENGKAP."', '".$TGL_LAHIR."', '".$JENIS_KELAMIN."','".$gambarbaru."')";
    $query2 = "INSERT INTO profil_detil VALUES('".$id."', '".$NO_TELEPON."')
	$sql1 = mysqli_query($connect, $query1); // Eksekusi/ Jalankan query dari variabel $query1
    $sql2 = mysqli_query($connect, $query2); // Eksekusi/ Jalankan query dari variabel $query2
	if($sql1, $sql2){ // Cek jika proses simpan ke database sukses atau tidak
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

