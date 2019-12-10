<?php
include 'koneksi.php';

$nama_pengirim = $_POST["USERNAME"];
$komen = $_POST["ISI_DIS"];
$komen_id = $_POST["KD_DIS"];


$query = "INSERT INTO diskusi (KD_DISP, ISI_DIS, USERNAME) VALUES (?, ?, ?)";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("sss", $komen_id, $komen, $nama_pengirim);
$dewan1->execute();



?>
