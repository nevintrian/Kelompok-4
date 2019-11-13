
<?php
include 'koneksi.php';
$KD_CLUSTER = $_GET['KD_CLUSTER'];

$sql = "DELETE cluster FROM cluster 
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.KD_USER=user.KD_USER';
WHERE cluster.KD_CLUSTER='$KD_CLUSTER'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>

