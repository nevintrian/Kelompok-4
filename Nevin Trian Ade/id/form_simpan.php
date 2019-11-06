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
		<td><input type="text" name="username"></td>
	</tr>
	<tr>

		<td>nama</td>
		<td><input type="text" name="nama"></td>
	</tr>

	<tr>
		<td>telepon</td>
		<td><input type="text" name="telepon"></td>
	</tr>
	
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
