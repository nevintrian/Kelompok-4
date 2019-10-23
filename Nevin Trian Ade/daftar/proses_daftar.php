<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$USER_ADMIN = $_POST['USER_ADMIN'];
$PASS_ADMIN = $_POST['PASS_ADMIN'];
$STATUS = $_POST['STATUS'];

$query1 = "SELECT max(KD_ADMIN) as maxKode FROM admin";
$hasil = mysqli_query($connect,$query1);
$data = mysqli_fetch_array($hasil);
$KD_ADMIN = $data['maxKode'];
 
// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($KD_ADMIN, 2, 3);
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
 
// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "AD";
$KD_ADMIN = $char . sprintf("%03s", $noUrut);
echo $KD_ADMIN;
// Rename nama fotonya dengan menambahkan tanggal dan jam upload


// Proses upload

	// Proses simpan ke Database
	$query = "INSERT INTO admin VALUES('".$KD_ADMIN."','".$USER_ADMIN."', '".$PASS_ADMIN."', '".$STATUS."')";
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


