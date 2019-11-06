
<?php
include 'koneksi.php';
$KD_USER = $_GET['KD_USER'];

$sql = "DELETE user, profil, profil_detil FROM user LEFT JOIN profil 
ON user.KD_USER=profil.KD_USER 
LEFT JOIN profil_detil 
ON profil.KD_PROFIL=profil_detil.KD_PROFIL
WHERE user.KD_USER='$KD_USER'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>
