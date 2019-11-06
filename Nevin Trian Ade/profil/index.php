<html>

	
<head>
	<title>Data Profil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data Profil</h1>
	
	<table border="1" width="100%">
	<tr>

		<th>foto</th>
		<th>username</th>
		<th>nama lengkap</th>
		<th>status</th>
		<th>tanggal lahir</th>
		<th>jenis kelamin</th>
		<th>no telepon</th>
		<th>nama kontak</th>

		<th>password</th>
		<th colspan="1">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
    include "koneksi.php";
    
    while ($row = mysqli_fetch_array($query))
   {
 

	echo "<tr>";
	echo "<td><img src='images/".$row['FOTO']."' width='50' height='50'></td>";
	echo "<td>".$row['USERNAME']."</td>";
	echo "<td>".$row['NAMA_LENGKAP']."</td>";
	echo "<td>".$row['STATUS']."</td>";
	echo "<td>".$row['TGL_LAHIR']."</td>";
	echo "<td>".$row['JENIS_KELAMIN']."</td>";
	echo "<td>".$row['NO_TELEPON']."</td>";
	echo "<td>".$row['NAMA']."</td>";
	
	echo "<td>".$row['PASSWORD']."</td>";

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
