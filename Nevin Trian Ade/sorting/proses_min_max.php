<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Proses Pengurutan, Min dan Max</title>
</head>

<body style="margin:25px;">
<?php
    $jumlah_lajur = $_POST["jumlah_lajur"];
    $nilai = array();
    for($i=0; $i<$jumlah_lajur; $i++){
        $nilai[$i] = $_POST["lajur_ke_$i"];
        echo "Lajur ke ".($i+1)." = ".$nilai[$i]."<br />";
    }
    echo "<br />Nilai Max = ".max($nilai)."<br />";
    echo "Nilai Min = ".min($nilai)."<br />";
    echo "Pengurutan Ascending = ";
    sort($nilai);
    foreach ($nilai as $index => $value) {
        echo $value."\n";
    }
?>
<br /><br />
<a href="index.php">Kembali ke depan</a>
</body>
</html>