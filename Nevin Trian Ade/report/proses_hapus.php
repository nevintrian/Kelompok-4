
<?php
include 'koneksi.php';
$KD_REP = $_GET['KD_REP'];

$sql = "DELETE report FROM report
INNER JOIN cluster
ON report.KD_CLUSTER=cluster.KD_CLUSTER
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.KD_USER=user.KD_USER
WHERE report.KD_REP='$KD_REP'";
$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
header("location:index.php?pesan=hapus");
?>
