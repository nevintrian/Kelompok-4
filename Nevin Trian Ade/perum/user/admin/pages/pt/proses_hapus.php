
<?php
include 'koneksi.php';
$KD_PT= $_GET['KD_PT'];

$sql = "DELETE pt FROM FROM pt 
INNER JOIN user
ON pt.KD_USER=user.KD_USER
WHERE pt.KD_PT='$KD_PT'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>
