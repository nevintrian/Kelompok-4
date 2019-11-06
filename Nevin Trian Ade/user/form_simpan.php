<html>
<head>
	<title>Tambah Data Profil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h1>Tambah Data Profil</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">

	<tr>
		<td>nama lengkap</td>
		<td><input type="text" name="NAMA_LENGKAP"></td>
	</tr>
	<tr>

		<td>tanggal lahir</td>
		<td><input type="text" name="TGL_LAHIR"></td>
	</tr>

	<tr>
		<td>jenis kelamin</td>
		<td><input type="text" name="JENIS_KELAMIN"></td>
	</tr>
	<tr>
		<td>no telepon</td>
		<td><input type="text" name="NO_TELEPON"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input type="text" name="NAMA"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
