
<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "DELETE user, profil FROM user LEFT JOIN profil ON user.id=profil.id WHERE user.id='$id'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>