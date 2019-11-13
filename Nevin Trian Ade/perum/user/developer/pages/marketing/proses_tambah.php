<?php
    $KD_PROFIL=$_SESSION['KD_PROFIL'];
    $pt=mysqli_query($konek, "SELECT user.KD_USER, user.USERNAME, profil.NAMA_LENGKAP, profil.JENIS_KELAMIN, profil.TGL_LAHIR, profil.FOTO, profil_detil.NAMA, profil_detil.NO_TELEPON, profil_detil.KD_PROFIL
    FROM user
    INNER JOIN profil
    ON user.KD_USER=profil.KD_USER
    INNER JOIN profil_detil
    ON profil.KD_PROFIL=profil_detil.KD_PROFIL
    WHERE profil.KD_PROFIL='$KD_PROFIL'");


$NAMA = $_POST['NAMA'];
$NO_TELEPON = $_POST['NO_TELEPON'];

	// Proses simpan ke Databas
	$query5 = "INSERT INTO profil_detil (KD_PROFIL, NO_TELEPON, NAMA) VALUES('$KD_PROFIL', '$NAMA','$NO_TELEPON')";
	if(mysqli_query($konek, $query5)){
		// Obtain last inserted id
		$last_id = mysqli_insert_id($konek);
	}
		header("location: marketing.php");
?>