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
		<td>username</td>
		<td><input type="text" name="USERNAME"></td>
	</tr>
	<tr>
		<td>nama pt</td>
		<td><input type="text" name="NAMA_PT"></td>
	</tr>
	<tr>
		<td>nama perum</td>
		<td><input type="text" name="NAMA_PERUM"></textarea></td>
	</tr>
	<tr>
		<td>nama cluster</td>
		<td><input type="text" name="NAMA_CLUSTER"></td>
	</tr>
	<tr>
		<td>lokasi</td>
		<td><input type="text" name="LOKASI"></textarea></td>
	</tr>
	<tr>
		<td>tipe</td>
		<td><input type="text" name="TIPE"></textarea></td>
	</tr>
	<tr>
		<td>stok</td>
		<td><input type="text" name="STOK"></textarea></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input type="text" name="HARGA"></textarea></td>
	</tr>
	<tr>
		<td>fasilitas</td>
		<td><input type="text" name="FASILITAS"></textarea></td>
	</tr>

	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
