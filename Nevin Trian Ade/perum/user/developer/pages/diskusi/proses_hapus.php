
<?php
include 'koneksi.php';
$KD_DIS = $_GET['KD_DIS'];

$sql = "DELETE diskusi FROM diskusi
INNER JOIN cluster
ON diskusi.KD_CLUSTER=cluster.KD_CLUSTER
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.KD_USER=user.KD_USER
WHERE diskusi.KD_DIS='$KD_DIS'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>