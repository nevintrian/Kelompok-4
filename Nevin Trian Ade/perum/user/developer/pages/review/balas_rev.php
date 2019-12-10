<?php
include('../../lib/koneksi.php');
$KD_REVP = $_POST['KD_REV'];
$ISI_REV = $_POST['ISI_REV1'];
$KD_CLUSTER = $_POST['KD_CLUSTER'];
$USERNAME = $_POST['USERNAME1'];
$PENERIMA_REV = $_POST['USERNAME'];
$TGLWAKTU_REV=date("Y-m-d H:i:s");
//query update
$query = "INSERT INTO `review`(`KD_REV`, `KD_REVP`, `KD_CLUSTER`, `USERNAME`, `PENERIMA_REV`, `ISI_REV`, `TGLWAKTU_REV`, `FOTO_REV`, `RATING`) VALUES (null, '$KD_REVP', '$KD_CLUSTER', '$USERNAME', '$PENERIMA_REV', '$ISI_REV', '$TGLWAKTU_REV', null, null)";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=review/review&a=insert_sukses');
    }else{
        header('location: ../../index.php?p=review/review&a=insert_gagal');  
}


?>