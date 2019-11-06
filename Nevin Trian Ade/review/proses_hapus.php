
<?php
include 'koneksi.php';
$KD_REV = $_GET['KD_REV'];

$sql = "DELETE review FROM review
INNER JOIN cluster
ON review.KD_CLUSTER=cluster.KD_CLUSTER
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.KD_USER=user.KD_USER
WHERE review.KD_REV='$KD_REV'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>