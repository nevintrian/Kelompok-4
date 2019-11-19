<?php
include('koneksi.php');
$USERNAME = $_GET['USERNAME'];
$EMAIL = $_GET['EMAIL'];
$PASSWORD = $_GET['PASSWORD'];
$NAMA_LENGKAP = $_GET['NAMA_LENGKAP'];
$TGL_LAHIR = $_GET['TGL_LAHIR'];
$JENIS_KELAMIN = $_GET['JENIS_KELAMIN'];
//query update
$query = "UPDATE user SET USERNAME='$USERNAME', PASSWORD='$PASSWORD', EMAIL='$EMAIL', NAMA_LENGKAP='$NAMA_LENGKAP', TGL_LAHIR='$TGL_LAHIR', JENIS_KELAMIN='$JENIS_KELAMIN' WHERE USERNAME='$USERNAME' ";
if (mysqli_query($konek, $query)) {
    # credirect ke page index
        header('location: ../../index.php?p=user/developer&a=insert_sukses');
    }else{
        header('location: ../../index.php?p=user/developer&a=insert_gagal');  
}


?>