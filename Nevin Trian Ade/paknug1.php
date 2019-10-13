<!DOCTYPE html>
<html>

<head>
    <title> Rumus Aritmatika </title>
    <h2>Rumus Aritmatika<h2>
</head>

<body>

<center><form action="" method="post">
<h3>nilai awal (a) </h3> <input type="text" name="a">
<h3>beda (b) </h3> <input type="text" name="b">
<h3>banyak data (n) </h3> <input type="text" name="n">
<input type="submit" value="submit" name="submit">

</form></center>

<?php
error_reporting(0);
$a=$_POST["a"];
$b=$_POST["b"];
$n=$_POST["n"];

    $un=$a+($n-1)*$b;

    echo "banyak data adalah ", ($un);
    echo "<br>";

?>
</body>
</html>