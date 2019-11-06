<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ="SELECT profil.KD_PROFIL, profil.NAMA_LENGKAP, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil_detil.NAMA, profil.FOTO, user.KD_USER, user.USERNAME, user.STATUS, user.PASSWORD
FROM profil_detil
INNER jOIN profil
ON profil_detil.KD_PROFIL=profil.KD_PROFIL
INNER JOIN user
ON profil.KD_USER=user.KD_USER 
WHERE user.KD_USER='5'";
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}