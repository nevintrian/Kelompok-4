<html>
<head>
	<title>Data Perumahan</title>
</head>
<body>
	<h1>Data Perumahan</h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>id</th>
		<th>nama perumahan</th>
		<th>tipe</th>
		<th>stok</th>
		<th>harga</th>
		<th>fasilitas</th>
		<th>gambar</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM rumah"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td>".$data['id']."</td>";
		echo "<td>".$data['nama_perum']."</td>";
		echo "<td>".$data['tipe']."</td>";
		echo "<td>".$data['stok']."</td>";
		echo "<td>".$data['harga']."</td>";
		echo "<td>".$data['fasilitas']."</td>";
		echo "<td><img src='images/".$data['gambar']."' width='100' height='100'></td>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
