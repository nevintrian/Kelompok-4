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
	$id = $_GET['id'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query ="SELECT user.id, user.username, profil.kode, profil.nama, profil.telepon FROM user LEFT JOIN profil ON user.id=profil.id";
	$sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>username</td>
		<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
	</tr>

	<tr>
		<td>nama</td>
		<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
	</tr>
	<tr>
		<td>telepon</td>
		<td><input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"></td>
	</tr>
	
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
