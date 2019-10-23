<html>
<head>
	<title>Data Profil</title>
</head>
<body>
	<h1>Data Profil</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>KD_PROFIL</th>
		<th>KD_USER</th>
		<th>NAMA</th>
		<th>TGL_LAHIR</th>
		<th>JENIS_KELAMIN</th>
		<th>NO_TELEPON</th>
		<th>FOTO</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
    include "koneksi.php";
    
    while ($row = mysqli_fetch_array($query))
   {
 

	echo "<tr>";
	echo "<td>".$row['KD_PROFIL']."</td>";
	echo "<td>".$row['KD_USER']."</td>";
	echo "<td>".$row['NAMA']."</td>";
	echo "<td>".$row['TGL_LAHIR']."</td>";
	echo "<td>".$row['JENIS_KELAMIN']."</td>";
	echo "<td>".$row['NO_TELEPON']."</td>";
	echo "<td><img src='images/".$row['FOTO']."' width='100' height='100'></td>";
	echo "<td><a href='form_ubah.php?KD_PROFIL=".$row['KD_PROFIL']."'>Ubah</a></td>";
	echo "<td><a href='proses_hapus.php?KD_PROFIL=".$row['KD_PROFIL']."'>Hapus</a></td>";
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
