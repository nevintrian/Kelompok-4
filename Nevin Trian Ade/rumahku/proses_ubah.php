<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$nama_perum = $_POST['nama_perum'];
$tipe = $_POST['tipe'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$gambarbaru = date('dmYHis').$gambar;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$gambarbaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM rumah WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$data['gambar'])) // Jika foto ada
			unlink("images/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE rumah SET nama_perum='".$nama_perum."', tipe='".$tipe."', stok='".$stok."', harga='".$harga."', fasilitas='".$fasilitas."', gambar='".$gambarbaru."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
	$query = "UPDATE rumah SET nama_perum='".$nama_perum."', tipe='".$tipe."', stok='".$stok."', harga='".$harga."', fasilitas='".$fasilitas."', gambar='".$gambarbaru."' WHERE id='".$id."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
