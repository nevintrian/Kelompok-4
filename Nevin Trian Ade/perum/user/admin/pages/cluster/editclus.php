

<?php
include('koneksi.php');
$KD_CLUSTER = $_POST['KD_CLUSTER'];
$NAMA_CLUSTER = $_POST['NAMA_CLUSTER'];
$TIPE = $_POST['TIPE'];
$LUAS_TANAH = $_POST['LUAS_TANAH'];
$STOK = $_POST['STOK'];
$HARGA = $_POST['HARGA'];
$FASILITAS = $_POST['FASILITAS'];

//query update

if(isset($_POST['ubah_foto'])){ 

	$GAMBAR = $_FILES['GAMBAR']['name'];
	$tmp = $_FILES['GAMBAR']['tmp_name'];
	$gambarbaru = date('dmYHis').$GAMBAR;
	$path = "images/".$gambarbaru;

	$GAMBAR1 = $_FILES['GAMBAR1']['name'];
	$tmp1 = $_FILES['GAMBAR1']['tmp_name'];
	$gambarbaru1 = date('dmYHis').$GAMBAR1;
	$path1 = "images/".$gambarbaru1;

	$GAMBAR2 = $_FILES['GAMBAR2']['name'];
	$tmp2 = $_FILES['GAMBAR2']['tmp_name'];
	$gambarbaru2 = date('dmYHis').$GAMBAR2;
	$path2 = "images/".$gambarbaru2;

	if(move_uploaded_file($tmp, $path)){ 
		$query = "SELECT * FROM cluster WHERE KD_CLUSTER='$KD_CLUSTER'";
		$sql = mysqli_query($konek, $query); 
		
		if(is_file("images/" .$data['GAMBAR'])) // Jika foto ada
			unlink("images/" .$data['GAMBAR']); // Hapus file foto sebelumnya yang ada di folder images
		
        $query = "UPDATE cluster SET NAMA_CLUSTER='$NAMA_CLUSTER', TIPE='$TIPE', LUAS_TANAH='$LUAS_TANAH', STOK='$STOK', HARGA='$HARGA', FASILITAS='$FASILITAS', GAMBAR='$gambarbaru', GAMBAR1='$gambarbaru1', GAMBAR2='$gambarbaru2' WHERE KD_CLUSTER='$KD_CLUSTER' ";
		

		if(move_uploaded_file($tmp1, $path1)){ 
			$query = "SELECT * FROM cluster WHERE KD_CLUSTER='$KD_CLUSTER'";
			$sql = mysqli_query($konek, $query); 
			
			if(is_file("images/" .$data['GAMBAR1'])) // Jika foto ada
				unlink("images/" .$data['GAMBAR1']); // Hapus file foto sebelumnya yang ada di folder images
			
			$query = "UPDATE cluster SET NAMA_CLUSTER='$NAMA_CLUSTER', TIPE='$TIPE', LUAS_TANAH='$LUAS_TANAH', STOK='$STOK', HARGA='$HARGA', FASILITAS='$FASILITAS', GAMBAR='$gambarbaru' , GAMBAR1='$gambarbaru1' , GAMBAR2='$gambarbaru2' WHERE KD_CLUSTER='$KD_CLUSTER' ";
		

		if(move_uploaded_file($tmp2, $path2)){ 
			$query = "SELECT * FROM cluster WHERE KD_CLUSTER='$KD_CLUSTER'";
			$sql = mysqli_query($konek, $query); 
			
			if(is_file("images/" .$data['GAMBAR2'])) // Jika foto ada
				unlink("images/" .$data['GAMBAR2']); // Hapus file foto sebelumnya yang ada di folder images
				
			$query = "UPDATE cluster SET NAMA_CLUSTER='$NAMA_CLUSTER', TIPE='$TIPE', LUAS_TANAH='$LUAS_TANAH', STOK='$STOK', HARGA='$HARGA', FASILITAS='$FASILITAS', GAMBAR='$gambarbaru' , GAMBAR1='$gambarbaru1', GAMBAR2='$gambarbaru2' WHERE KD_CLUSTER='$KD_CLUSTER' ";

			$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query




		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header('location: ../../index.php?p=cluster/cluster&a=update_sukses');
    }else{
        header('location: ../../index.php?p=cluster/cluster&a=update_gagal');  
        }
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		
	} }}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	// Proses ubah data ke Database
    $query = "UPDATE cluster SET NAMA_CLUSTER='$NAMA_CLUSTER', TIPE='$TIPE', LUAS_TANAH='$LUAS_TANAH', STOK='$STOK', HARGA='$HARGA', FASILITAS='$FASILITAS' WHERE KD_CLUSTER='$KD_CLUSTER' ";
	$sql = mysqli_query($konek, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header('location: ../../index.php?p=cluster/cluster&a=update_sukses');
}else{
    header('location: ../../index.php?p=cluster/cluster&a=update_gagal');  
    }
}
?>

