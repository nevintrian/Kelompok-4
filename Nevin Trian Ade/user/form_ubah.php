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
	$KD_USER = $_GET['KD_USER'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT user.KD_USER, user.USERNAME, user.STATUS, user.PASSWORD, profil.KD_PROFIL, profil.NAMA_LENGKAP, profil.TGL_LAHIR, profil.JENIS_KELAMIN, profil_detil.NO_TELEPON, profil_detil.NAMA
	FROM user LEFT JOIN profil 
	ON user.KD_USER=profil.KD_USER 
	LEFT JOIN profil_detil 
	ON profil.KD_PROFIL=profil_detil.KD_PROFIL";
	$sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
	$row = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $KD_USER; ?>" enctype="multipart/form-data">
	<table cellpadding="8">

	<tr>
		<td>username</td>
		<td><input type="text" name="USERNAME" value="<?php echo $row['USERNAME']; ?>"></td>
	</tr>

	<tr>
		<td>password</td>
		<td><input type="text" name="PASSWORD" value="<?php echo $row['PASSWORD']; ?>"></td>
	</tr>
	<tr>
		<td>status</td>
		<td><input type="text" name="STATUS" value="<?php echo $row['STATUS']; ?>"></td>
	</tr>
	<tr>
		<td>nama lengkap</td>
		<td><input type="text" name="NAMA_LENGKAP" value="<?php echo $row['NAMA_LENGKAP']; ?>"></td>
	</tr>

	<tr>
		<td>tanggal lahir</td>
		<td><input type="text" name="TGL_LAHIR" value="<?php echo $row['TGL_LAHIR']; ?>"></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td><input type="text" name="JENIS_KELAMIN" value="<?php echo $row['JENIS_KELAMIN']; ?>"></td>
	</tr>
	<tr>
		<td>no telepon</td>
		<td><input type="text" name="NO_TELEPON" value="<?php echo $row['NO_TELEPON']; ?>"></td>
	</tr>
	<tr>
		<td>nama kontak</td>
		<td><input type="text" name="NAMA" value="<?php echo $row['NAMA']; ?>"></td>
	</tr>

	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
