<?php
include('koneksi.php');
$KD_REP = $_GET['KD_REP'];

//query update
$query = "DELETE report FROM report
INNER JOIN cluster
ON report.KD_CLUSTER=cluster.KD_CLUSTER
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN pt
ON perum.KD_PT=pt.KD_PT
INNER JOIN user
ON pt.USERNAME=user.USERNAME
WHERE report.KD_REP='$KD_REP' ";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=report/report&a=hapus_sukses');
    }else{
        header('location: ../../index.php?p=report/report&a=hapus_gagal');  
}

?>