<html>

	
<head>
	<title>Data Perumahan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data Perumahan</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>gambar</th>
		<th>username</th>
		<th>nama PT</th>
		<th>nama perumahan</th>
		<th>nama cluster</th>
		<th>lokasi</th>
		<th>tipe</th>
		<th>stok</th>
		<th>harga</th>
		<th>fasilitas</th>
	
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
    include "koneksi.php";
    
    while ($row = mysqli_fetch_array($query))
   {
 

	echo "<tr>";
	echo "<td><img src='images/".$row['GAMBAR']."' width='50' height='50'></td>";
	echo "<td>".$row['USERNAME']."</td>";
	echo "<td>".$row['NAMA_PT']."</td>";
	echo "<td>".$row['NAMA_PERUM']."</td>";
	echo "<td>".$row['NAMA_CLUSTER']."</td>";
	echo "<td>".$row['LOKASI']."</td>";
	echo "<td>".$row['TIPE']."</td>";
	echo "<td>".$row['STOK']."</td>";
	echo "<td>".$row['HARGA']."</td>";
	echo "<td>".$row['FASILITAS']."</td>";
	echo "<td><a href='form_ubah.php?KD_PERUM=".$row['KD_PERUM']."'>Ubah</a></td>";
	echo "<td><a href='proses_hapus.php?KD_PERUM=".$row['KD_PERUM']."'>Hapus</a></td>";
	echo "</tr>";
   }
// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($conn);
?>
</table>
</body>
</html>
