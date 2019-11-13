<?php
    include "koneksi.php";
    if(isset($_POST['komentar'])){
        $KD_CLUSTER=$_POST['KD_CLUSTER'];
        $nama=mysqli_real_escape_string($konek, $_POST['NAMA_LENGKAP']);
        $isi=mysqli_real_escape_string($konek, $_POST['ISI_DIS']);
        $tgl=date("Y-m-d H:i:s");

        $query = "INSERT INTO diskusi VALUES(NULL, $KD_CLUSTER, '$nama', '$isi', '$tgl')";
        $hasil = mysqli_query($konek, $query);
        if ($hasil)
            header('location: ../index.php?p=buku_detail&KD_CLUSTER='.$KD_CLUSTER.'&a=komentar_sukses');
        else
            header('location: ../index.php?p=buku_detail&KD_CLUSTER='.$KD_CLUSTER.'&a=komentar_gagal');
            // echo "Gagal";

    }