<?php
include('koneksi.php');
$KD_PERUM = $_GET['KD_PERUM'];
$NAMA_PERUM = $_GET['NAMA_PERUM'];
//query update
$query = "DELETE perum FROM perum WHERE KD_PERUM='$KD_PERUM' ";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=perum/perum&a=insert_sukses');
    }else{
        header('location: ../../index.php?p=perum/perum&a=insert_gagal');  
}

?>