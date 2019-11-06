<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ='SELECT user.KD_USER, user.USERNAME, user.STATUS, user.PASSWORD, profil.KD_PROFIL, profil.NAMA_LENGKAP, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil_detil.NAMA, profil.FOTO 
FROM user LEFT JOIN profil 
ON user.KD_USER=profil.KD_USER 
LEFT JOIN profil_detil 
ON profil.KD_PROFIL=profil_detil.KD_PROFIL';
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

