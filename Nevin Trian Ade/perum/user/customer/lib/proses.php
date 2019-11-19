<?php
session_start();
include "koneksi.php";
//ubah profil
if (isset($_POST['ubah_profil1'])) {


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
	

?>