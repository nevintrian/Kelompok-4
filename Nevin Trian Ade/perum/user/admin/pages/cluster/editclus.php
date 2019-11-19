<?php
include('koneksi.php');
$KD_CLUSTER = $_GET['KD_CLUSTER'];
$NAMA_CLUSTER = $_GET['NAMA_CLUSTER'];
$TIPE = $_GET['TIPE'];
$LUAS_TANAH= $_GET['LUAS_TANAH'];
$STOK = $_GET['STOK'];
$HARGA = $_GET['HARGA'];
$FASILITAS = $_GET['FASILITAS'];
//query update
$query = "UPDATE cluster SET NAMA_CLUSTER='$NAMA_CLUSTER', TIPE='$TIPE', $LUAS_TANAH='LUAS_TANAH', $STOK='STOK', $HARGA='HARGA',  $FASILITAS='FASILITAS' WHERE KD_CLUSTER='$KD_CLUSTER' ";

if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=cluster/cluster&a=update_sukses');
    }else{
        header('location: ../../index.php?p=cluster/cluster&a=update_gagal');  
}

?>
