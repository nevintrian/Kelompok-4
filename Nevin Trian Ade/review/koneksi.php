<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'perumahan'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}


$sql ='SELECT review.KD_REV, review.ISI_REV, review.TGLWAKTU_REV, review.FOTO_REV, user.KD_USER, user.USERNAME, user.STATUS, perum.KD_PERUM, perum.NAMA_PERUM, cluster.KD_CLUSTER, cluster.NAMA_CLUSTER, cluster.GAMBAR, pt.KD_PT, pt.NAMA_PT
FROM review
INNER JOIN cluster
ON review.KD_CLUSTER=cluster.KD_CLUSTER
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