<?php
session_start();
//insert admin
include "koneksi.php";

//ubah profil



include('koneksi.php');


$USERNAME = $_POST['USERNAME'];
	$EMAIL= $_POST['EMAIL'];
	$PASSWORD= $_POST['PASSWORD'];
	$NAMA_LENGKAP =$_POST['NAMA_LENGKAP'];
	$JENIS_KELAMIN = $_POST['JENIS_KELAMIN'];
	$TGL_LAHIR = $_POST['TGL_LAHIR'];
	$FOTO= $_FILES['FOTO']['name'];
	$tmp = $_FILES['FOTO']['tmp_name'];
	$gambarbaru = date('dmYHis').$FOTO;
	$path = "images/".$gambarbaru;

	if(move_uploaded_file($tmp, $path)){ 
		$query = "SELECT * FROM user WHERE USERNAME='$USERNAME'";
		$sql = mysqli_query($konek, $query); 
		
		if(is_file("images/" .$data['FOTO'])) // Jika foto ada
			unlink("images/" .$data['FOTO']); // Hapus file foto sebelumnya yang ada di folder images
		
		// Proses ubah data ke Database
		$query = "UPDATE user SET USERNAME='$USERNAME', EMAIL='$EMAIL', PASSWORD='$PASSWORD', NAMA_LENGKAP='$NAMA_LENGKAP', TGL_LAHIR='$TGL_LAHIR', JENIS_KELAMIN='$JENIS_KELAMIN', FOTO='$gambarbaru'
		WHERE user.USERNAME='$USERNAME'";
		$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header('location: ../../index.php?p=profil/profil&a=update_sukses');
}else{
	header('location: ../../index.php?p=profil/profil&a=update_sukses');  
	}

}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
// Proses ubah data ke Database
$query = "UPDATE user SET USERNAME='$USERNAME', EMAIL='$EMAIL', PASSWORD='$PASSWORD', NAMA_LENGKAP='$NAMA_LENGKAP', TGL_LAHIR='$TGL_LAHIR', JENIS_KELAMIN='$JENIS_KELAMIN' WHERE user.USERNAME='$USERNAME'";
$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header('location: ../../index.php?p=profil/profil&a=update_sukses');
}else{
header('location: ../../index.php?p=profil/profil&a=update_sukses');  
}
}


?>




