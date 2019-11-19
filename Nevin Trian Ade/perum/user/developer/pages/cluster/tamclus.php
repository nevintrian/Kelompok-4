
<?php
include('koneksi.php');

$KD_PERUM = $_POST['KD_PERUM'];
$NAMA_CLUSTER= $_POST['NAMA_CLUSTER'];
$TIPE= $_POST['TIPE'];
$LUAS_TANAH= $_POST['LUAS_TANAH'];
$STOK= $_POST['STOK'];
$HARGA= $_POST['HARGA'];
$FASILITAS= $_POST['FASILITAS'];
$GAMBAR = $_FILES['GAMBAR']['name'];
$tmp = $_FILES['GAMBAR']['tmp_name'];


$gambarbaru = date('dmYHis').$GAMBAR;

$path = "images/".$gambarbaru;

//query update
if (move_uploaded_file($tmp, $path)) {
$query = "INSERT INTO cluster (`KD_CLUSTER`, `KD_PERUM`, `NAMA_CLUSTER`, `TIPE`, `LUAS_TANAH`, `STOK`, `HARGA`,`FASILITAS`,`GAMBAR`) VALUES (null, '$KD_PERUM', '$NAMA_CLUSTER', '$TIPE', '$LUAS_TANAH', '$STOK', '$HARGA', '$FASILITAS', '$gambarbaru')";
$sql = mysqli_query($konek, $query);
if($sql){
        # credirect ke page index
            header('location: ../../index.php?p=cluster/cluster&a=insert_sukses');
        }else{
            header('location: ../../index.php?p=cluster/cluster&a=insert_gagal');  
    }
}
   