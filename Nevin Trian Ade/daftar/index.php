<html>
<head>
	<title>DAFTAR</title>
    <title>Membuat Login Multi User Level </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>DAFTAR</h1>
	<form method="post" action="proses_daftar.php" enctype="multipart/form-data">

	
 
    <label>Username</label>
			<input type="text" name="USERNAME" class="form_login" placeholder="username..." required="required">
 
			<label>Password</label>
			<input type="password" name="PASSWORD" class="form_login" placeholder="password..." required="required">

            <label>Status </label>
            
            <p><input type='radio' name="STATUS" value='developer' />developer</p>
            <p><input type='radio' name="STATUS" value='customer' />customer</p>
            <input type="submit" class="tombol_daftar" value="Daftar">
	<a href="index.php"><input type="button" class="tombol_batal" value="Batal"></a>

 
 
</body>
</html>