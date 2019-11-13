<?php
    $USERNAME=$_SESSION['USERNAME'];
    $pt=mysqli_query($konek, "SELECT user.KD_USER, user.USERNAME, profil.NAMA_LENGKAP, profil.JENIS_KELAMIN, profil.TGL_LAHIR, profil.FOTO, profil_detil.NAMA, profil_detil.NO_TELEPON, profil_detil.KD_PROFIL
    FROM user
    INNER JOIN profil
    ON user.KD_USER=profil.KD_USER
    INNER JOIN profil_detil
    ON profil.KD_PROFIL=profil_detil.KD_PROFIL
    WHERE user.USERNAME='$USERNAME'");



	// Proses simpan ke Databas
	$query5 = "INSERT INTO user (id, username) VALUES(null, '$username')";
	if(mysqli_query($conn, $query5)){
		// Obtain last inserted id
		$last_id = mysqli_insert_id($conn);
	}

	$query6 = "INSERT INTO profil (kode, id, nama, telepon) VALUES(null, '$last_id', '$nama', '$telepon')";
	 // Eksekusi/ Jalankan query dari variabel $query
		$sql6 = mysqli_query($conn, $query6); // Eksekusi/ Jalankan query dari variabel $query
		header("location: index.php");
?>