<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ='SELECT profil.KD_PROFIL, profil.KD_USER, profil.NAMA, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil.FOTO
FROM profil, profil_detil
WHERE profil.KD_PROFIL=profil_detil.KD_PROFIL';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}