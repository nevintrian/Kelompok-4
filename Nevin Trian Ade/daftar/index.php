<html>
<head>
	<title>daftar</title>
    <title>Membuat Login Multi User Level </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>daftar</h1>
	<form method="post" action="proses_daftar.php" enctype="multipart/form-data">

	
 
    <label>Username</label>
			<input type="text" name="USER_ADMIN" class="form_login" placeholder="username..." required="required">
 
			<label>Password</label>
			<input type="password" name="PASS_ADMIN" class="form_login" placeholder="password..." required="required">

            <label>Status </label>
            
            <p><input type='radio' name="STATUS" value='admin' checked='checked' />admin</p>
            <p><input type='radio' name="STATUS" value='developer' />developer</p>
            <p><input type='radio' name="STATUS" value='customer' />customer</p>
            <input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>

 
 
</body>
</html>