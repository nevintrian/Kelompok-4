<?php
include('koneksi.php');
$KD_PERUM = $_GET['KD_PERUM'];
$NAMA_PERUM = $_GET['NAMA_PERUM'];
$LOKASI = $_GET['LOKASI'];
//query update
$query = "UPDATE perum SET NAMA_PERUM='$NAMA_PERUM', LOKASI='$LOKASI' WHERE KD_PERUM='$KD_PERUM' ";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=perum/perum&a=update_sukses');
    }else{
        header('location: ../../index.php?p=perum/perum&a=update_gagal');  
}


?>

