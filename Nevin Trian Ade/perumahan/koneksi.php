<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ='SELECT pt.KD_PT, pt.NAMA_PT, perum.KD_PERUM, perum.NAMA_PERUM, perum.LOKASI, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.TIPE, cluster.STOK, cluster.HARGA, cluster.FASILITAS, cluster.GAMBAR, user.KD_USER, user.USERNAME
FROM cluster 
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.KD_USER=user.KD_USER';
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}