<html>
<head>
	<title>Tambah Data Perumahan</title>
</head>
<body>
	<h1>Tambah Data Perumahan</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>id</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>nama perumahan</td>
		<td><input type="text" name="nama_perum"></td>
	</tr>
	<tr>
		<td>tipe</td>
		<td><input type="text" name="tipe"></td>
	</tr>
	<tr>
		<td>stok</td>
		<td><input type="text" name="stok"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input type="text" name="harga"></textarea></td>
	</tr>
	<tr>
		<td>fasilitas</td>
		<td><input type="text" name="fasilitas"></textarea></td>
	</tr>
	<tr>
		<td>gambar</td>
		<td><input type="file" name="gambar"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
