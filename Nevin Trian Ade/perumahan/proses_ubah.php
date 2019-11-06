<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$KD_PROFIL = $_GET['KD_PROFIL'];

// Ambil Data yang Dikirim dari Form
$NAMA = $_POST['NAMA'];
$TGL_LAHIR = $_POST['TGL_LAHIR'];
$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
$NO_TELEPON = $_POST['NO_TELEPON'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
	$FOTO = $_FILES['FOTO']['name'];
	$tmp = $_FILES['FOTO']['tmp_name'];
	
	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$gambarbaru = date('dmYHis').$FOTO;
	
	// Set path folder tempat menyimpan fotonya
	$path = "images/".$gambarbaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query = "SELECT * FROM profil WHERE KD_PROFIL='".$KD_PROFIL."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$row['FOTO'])) // Jika foto ada
			unlink("images/".$row['FOTO']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE profil SET NAMA='".$NAMA."', TGL_LAHIR='".$TGL_LAHIR."', JENIS_KELAMIN='".$JENIS_KELAMIN."', FOTO='".$gambarbaru."' WHERE KD_PROFIL='".$KD_PROFIL."'";
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
	$query = "UPDATE profil SET NAMA='".$NAMA."', TGL_LAHIR='".$TGL_LAHIR."', JENIS_KELAMIN='".$JENIS_KELAMIN."', FOTO='".$gambarbaru."' WHERE KD_PROFIL='".$KD_PROFIL."'";
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
