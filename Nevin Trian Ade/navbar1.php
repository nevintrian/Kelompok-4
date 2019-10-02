<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
	<title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
   <nav class="navbar navbar-default">
      <div class="container">
	<div class="navbar-header">
		<a class="navbar-brand" href="https://www.malasngoding.com">Malas Ngoding</a>
	</div>
	<ul class="nav navbar-nav">
		<li class="active"><a href="https://www.malasngoding.com">Home</a></li>
		<li><a href="#">Profil</a></li>
		<li><a href="#">Tentang Kami</a></li> 
		<li><a href="#">Kontak</a></li> 
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorial
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Bootstrap</a></li> 
			</ul>
		</li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</ul>
   </div>
</nav>
	
<h1>Membuat Navigation bar Bootstrap | www.malasngoding.com</h1> 

</body>
</html>