<html>
<head>
	<title>Ubah Data Profil</title>
</head>
<body>
	<h1>Ubah Data Profil</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$KD_PROFIL = $_GET['KD_PROFIL'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM rumah WHERE KD_PROFIL='".$KD_PROFIL."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $KD_PROFIL; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>nama perumahan</td>
		<td><input type="text" name="nama_perum" value="<?php echo $row['nama_perum']; ?>"></td>
	</tr>

	<tr>
		<td>tipe</td>
		<td><input type="text" name="tipe" value="<?php echo $row['tipe']; ?>"></td>
	</tr>
	<tr>
		<td>stok</td>
		<td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td>
	</tr>
	<tr>
		<td>fasilitas</td>
		<td><input type="text" name="fasilitas" value="<?php echo $row['fasilitas']; ?>"></td>
	</tr>
	<tr>
		<td>gambar</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="gambar">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
