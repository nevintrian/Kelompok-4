<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>LOGIN</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="USERNAME" class="form_login" placeholder="username..." required="required">
 
			<label>Password</label>
			<input type="password" name="PASSWORD" class="form_login" placeholder="password..." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>