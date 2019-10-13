<!DOCTYPE html>
<html>

<head>
    <title> Rumus Aritmatika </title>
</head>

<body>

<form action="" method="post">
<h2>nilai awal (a) </h2> <input type="text" name="a">
<h2>beda (b) </h2> <input type="text" name="b">
<h2>banyak data (n) </h2> <input type="number" name="n" min="1" max="6">
<input type="submit" value="submit" name="submit">

</form>

<?php
error_reporting(0);
$a=$_POST["a"];
$b=$_POST["b"];
$n=$_POST["n"];

for($i=1; $i <= $n; $i++){
    $un=$a+($i-1)*$b;
    $bulan=$i+$n;

    echo "penjualan bulan ke $bulan adalah ", ($un);
    echo "<br>";

}
?>
</body>
</html>