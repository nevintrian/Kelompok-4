<?php
//insert pt
session_start();
include "koneksi.php";
if (isset($_POST['tambah_pt'])) {
	
	
	$USERNAME=$_POST['USERNAME'];
	$kategori= $_POST['kategori'];

	$query = "INSERT INTO pt (`KD_PT`, `USERNAME`, `NAMA_PT`) VALUES (NULL, '$USERNAME', '$kategori')";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

	if ($sql) {
		header('location: ../index.php?p=pt/pt&a=insert_sukses');
	}else{
		header('location: ../index.php?p=pt/pt&a=insert_gagal');
}
}

//update pt
if (isset($_POST['update_pt'])) {

	$id= $_POST['id'];
	$kategori = $_POST['kategori'];

		// Proses ubah data ke Database
		$query = "UPDATE pt SET pt.KD_PT='$id', pt.NAMA_PT='$kategori' WHERE pt.KD_PT='$id'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {
			header('location: ../index.php?p=pt/pt&a=update_sukses');
		}else{
			header('location: ../index.php?p=pt/pt&a=update_gagal');
	}
}

//hapus pt
if (isset($_POST['hapus_pt'])) {

	$id= $_POST['id'];
$sql = "DELETE pt FROM pt WHERE pt.KD_PT='$id'";
$query = mysqli_query($konek, $sql);
if ($sql) {
	header('location: ../index.php?p=pt/pt&a=hapus_sukses');
}else{
	header('location: ../index.php?p=pt/pt&a=hapus_gagal');
}
}

//insert marketing
if (isset($_POST['tambah_mar'])) {
	
	
	$USERNAME=$_POST['USERNAME'];
	$kategori= $_POST['kategori'];
	$market= $_POST['market'];

	$query = "INSERT INTO marketing (`KD_MARKET`, `USERNAME`, `NAMA`, `NO_TELEPON`) VALUES (NULL, '$USERNAME', '$kategori', '$market')";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query
	if ($sql) {
		header('location: ../index.php?p=marketing/marketing&a=insert_sukses');
	}else{
		header('location: ../index.php?p=marketing/marketing&a=insert_gagal');
}
}
//update marketing
if (isset($_POST['update_mar'])) {

	$id= $_POST['id'];
	$kategori = $_POST['kategori'];
	$market= $_POST['market'];
		// Proses ubah data ke Database
		$query = "UPDATE marketing SET marketing.KD_MARKET='$id', marketing.NAMA='$kategori', marketing.NO_TELEPON='$market' WHERE marketing.KD_MARKET='$id'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query
		if ($sql) {
			header('location: ../index.php?p=marketing/marketing&a=update_sukses');
		}else{
			header('location: ../index.php?p=marketing/marketing&a=update_gagal');
	}
}

//hapus marketing
if (isset($_POST['hapus_mar'])) {

	$id= $_POST['id'];
$sql = "DELETE marketing FROM marketing WHERE marketing.KD_MARKET='$id'";
$query = mysqli_query($konek, $sql);
if ($sql) {
	header('location: ../index.php?p=marketing/marketing&a=hapus_sukses');
}else{
	header('location: ../index.php?p=marketing/marketing&a=hapus_gagal');
}
}

//insert perumahan
if (isset($_POST['tambah_perum'])) {
	
	
	
	$pt= $_POST['pt'];
	$nama=$_POST['nama'];
	$lokasi= $_POST['lokasi'];


	$query = "INSERT INTO perum (`KD_PERUM`, `KD_PT`, `NAMA_PERUM`, `LOKASI`, `GAMBAR_PERUM`) VALUES (NULL, '$pt', '$nama', '$lokasi', NULL)";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

	if ($sql) {
		header('location: ../index.php?p=perum/perum&a=insert_sukses');
	}else{
		header('location: ../index.php?p=perum/perum&a=insert_gagal');
}
}
//update perumahan
if (isset($_POST['update_perum'])) {
	
	
	$id= $_POST['id'];
	$nama=$_POST['nama'];
	$lokasi= $_POST['lokasi'];


	$query = "UPDATE perum SET perum.KD_PERUM='$id', perum.NAMA_PERUM='$nama',perum.LOKASI='$lokasi' WHERE perum.KD_PERUM='$id'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../index.php?p=perum/perum&a=update_sukses');
		}else{
			header('location: ../index.php?p=perum/perum&a=update_gagal');
	}
}

//hapus perumahan
if (isset($_POST['hapus_perum'])) {
	
	
	$id= $_POST['id'];


	$query = "DELETE perum FROM perum WHERE perum.KD_PERUM='$id'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../index.php?p=perum/perum&a=hapus_sukses');
		}else{
			header('location: ../index.php?p=perum/perum&a=hapus_gagal');
	}
}
//insert cluster
if (isset($_POST['tambah_cluster'])) {
	
	$KD_PERUM= $_POST['KD_PERUM'];
	$NAMA_CLUSTER=$_POST['NAMA_CLUSTER'];
	$TIPE= $_POST['TIPE'];
	$LUAS_TANAH= $_POST['LUAS_TANAH'];
	$STOK= $_POST['STOK'];
	$HARGA= $_POST['HARGA'];
	$FASILITAS= $_POST['FASILITAS'];
	
	$query = "INSERT INTO cluster (`KD_CLUSTER`, `KD_PERUM`, `NAMA_CLUSTER`, `TIPE`, `LUAS_TANAH`, `STOK`, `HARGA`, `FASILITAS`, `GAMBAR`) VALUES (NULL, '$KD_PERUM', '$NAMA_CLUSTER', '$TIPE', '$LUAS_TANAH', '$STOK', '$HARGA', '$FASILITAS', NULL)";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query


}
//ubah profil
if (isset($_POST['ubah_profil'])) {


	$USERNAME = $_POST['USERNAME'];
	$EMAIL= $_POST['EMAIL'];
	$PASSWORD= $_POST['PASSWORD'];
	$NAMA_LENGKAP =$_POST['NAMA_LENGKAP'];
	$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
	$TGL_LAHIR = $_POST['TGL_LAHIR'];
	
	

		// Proses ubah data ke Database
		$query = "UPDATE user SET USERNAME='$USERNAME', EMAIL='$EMAIL', PASSWORD='$PASSWORD', NAMA_LENGKAP='$NAMA_LENGKAP', TGL_LAHIR='$TGL_LAHIR', JENIS_KELAMIN='$JENIS_KELAMIN'
		WHERE user.USERNAME='$USERNAME'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../index.php?p=profil/profil&a=update_sukses');
		}else{
			header('location: ../index.php?p=profil/profil&a=update_gagal');
	}
}

//delete pt

