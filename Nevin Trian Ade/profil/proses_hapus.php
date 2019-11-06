
<?php
include 'koneksi.php';
$KD_PROFIL = $_GET['KD_PROFIL'];

$sql = "DELETE profil_detil FROM profil_detil
INNER jOIN profil
ON profil_detil.KD_PROFIL=profil.KD_PROFIL
INNER JOIN user
ON profil.KD_USER=user.KD_USER WHERE profil.KD_PROFIL='$KD_PROFIL'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>