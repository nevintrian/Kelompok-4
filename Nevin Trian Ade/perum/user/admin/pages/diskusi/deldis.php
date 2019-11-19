<?php
include('koneksi.php');
$KD_DIS = $_GET['KD_DIS'];

//query update
$query = "DELETE diskusi FROM diskusi
INNER JOIN cluster
ON diskusi.KD_CLUSTER=cluster.KD_CLUSTER
INNER JOIN perum
ON cluster.KD_PERUM=perum.KD_PERUM
INNER JOIN user
ON user.USERNAME=diskusi.USERNAME
WHERE diskusi.KD_DIS='$KD_DIS' ";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=diskusi/diskusi&a=hapus_sukses');
    }else{
        header('location: ../../index.php?p=diskusi/diskusi&a=hapus_gagal');  
}

?>