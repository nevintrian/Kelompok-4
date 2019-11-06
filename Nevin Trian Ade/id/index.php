<html>

	
<head>
	<title>Data User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data User</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
	
		<th>username</th>
		<th>nama</th>
		<th>telepon</th>
		
	
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
    include "koneksi.php";
    
    while ($row = mysqli_fetch_array($query))
   {
 

	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['telepon']."</td>";

	echo "<td><a href='form_ubah.php?id=".$row['id']."'>Ubah</a></td>";
	echo "<td><a href='proses_hapus.php?id=".$row['id']."'>Hapus</a></td>";
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
