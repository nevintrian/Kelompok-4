<?php
session_start();
//insert admin
include "koneksi.php";
if (isset($_POST['tambah'])) {
	$USERNAME = $_POST['USERNAME'];
	$EMAIL= $_POST['EMAIL'];
	$PASSWORD= $_POST['PASSWORD'];
	$NAMA_LENGKAP =$_POST['NAMA_LENGKAP'];
	$TGL_LAHIR = $_POST['TGL_LAHIR'];
	$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
	$FOTO = $_POST['FOTO'];
	$STATUS = "admin";
	
	$query = "INSERT INTO user (`USERNAME`, `EMAIL`, `PASSWORD`, `STATUS`, `NAMA_LENGKAP`, `TGL_LAHIR`, `JENIS_KELAMIN`, `FOTO`) VALUES ('$USERNAME', '$EMAIL', '$PASSWORD', '$STATUS', '$NAMA_LENGKAP', '$TGL_LAHIR', '$JENIS_KELAMIN' , '$FOTO')";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../../index.php?p=user/admin&a=insert_sukses');
		}else{
			header('location: ../../index.php?p=user/admin&a=insert_gagal');
}
}

//insert developer

if (isset($_POST['tambah1'])) {
	$USERNAME = $_POST['USERNAME'];
	$EMAIL= $_POST['EMAIL'];
	$PASSWORD= $_POST['PASSWORD'];
	$NAMA_LENGKAP =$_POST['NAMA_LENGKAP'];
	$TGL_LAHIR = $_POST['TGL_LAHIR'];
	$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
	$FOTO = $_POST['FOTO'];
	$STATUS = "developer";
	
	$query = "INSERT INTO user (`USERNAME`, `EMAIL`, `PASSWORD`, `STATUS`, `NAMA_LENGKAP`, `TGL_LAHIR`, `JENIS_KELAMIN`, `FOTO`) VALUES ('$USERNAME', '$EMAIL', '$PASSWORD', '$STATUS', '$NAMA_LENGKAP', '$TGL_LAHIR', '$JENIS_KELAMIN' , '$FOTO')";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../index.php?p=user/developer&a=insert_sukses');
		}else{
			header('location: ../index.php?p=user/developer&a=insert_gagal');
}
}
//insert customer
if (isset($_POST['tambah2'])) {
	$USERNAME = $_POST['USERNAME'];
	$EMAIL= $_POST['EMAIL'];
	$PASSWORD= $_POST['PASSWORD'];
	$NAMA_LENGKAP =$_POST['NAMA_LENGKAP'];
	$TGL_LAHIR = $_POST['TGL_LAHIR'];
	$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
	$FOTO = $_POST['FOTO'];
	$STATUS = "customer";
	
	$query = "INSERT INTO user (`USERNAME`, `EMAIL`, `PASSWORD`, `STATUS`, `NAMA_LENGKAP`, `TGL_LAHIR`, `JENIS_KELAMIN`, `FOTO`) VALUES ('$USERNAME', '$EMAIL', '$PASSWORD', '$STATUS', '$NAMA_LENGKAP', '$TGL_LAHIR', '$JENIS_KELAMIN' , '$FOTO')";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

		if ($sql) {
			header('location: ../index.php?p=user/customer&a=insert_sukses');
		}else{
			header('location: ../index.php?p=user/customer&a=insert_gagal');
}
}
//ubah profil
if (isset($_POST['update_profil'])) {


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
			header('location: ../../index.php?p=profil/profil&a=update_sukses');
		}else{
			header('location: ../../index.php?p=profil/profil&a=update_gagal');
}
}

