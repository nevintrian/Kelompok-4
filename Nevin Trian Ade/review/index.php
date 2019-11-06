<html>

	
<head>
	<title>Data Review</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Data Review</h1>
	<table border="1" width="100%">
	<tr>
		<th>gambar</th>
		<th>nama_pt</th>
		<th>nama perumahan</th>
		<th>nama cluster</th>
		<th>username</th>
		<th>status</th>
		<th>tgl review</th>
		<th>isi review</th>
		<th>foto review</th>


		<th colspan="1">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
    include "koneksi.php";
    
    while ($row = mysqli_fetch_array($query))
   {
 

	echo "<tr>";
	echo "<td><img src='images/".$row['GAMBAR']."' width='50' height='50'></td>";
	echo "<td>".$row['NAMA_PT']."</td>";
	echo "<td>".$row['NAMA_PERUM']."</td>";
	echo "<td>".$row['NAMA_CLUSTER']."</td>";
	echo "<td>".$row['USERNAME']."</td>";
	echo "<td>".$row['STATUS']."</td>";
	echo "<td>".$row['TGLWAKTU_REV']."</td>";
	echo "<td>".$row['ISI_REV']."</td>";
	echo "<td><img src='images/".$row['FOTO_REV']."' width='50' height='50'></td>";

	echo "<td><a href='proses_hapus.php?KD_REV=".$row['KD_REV']."'>Hapus</a></td>";
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
