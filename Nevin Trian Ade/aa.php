<?php

date_default_timezone_set('Asia/Jakarta');
$host = "localhost"; // Nama host
$username = "root"; // Username
$password = ""; // Password 
$database = "perumahan"; // Nama databasenya

$konek = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL



$c=array();
$s='{0}';
$q="SELECT * FROM diskusi";
$k=mysqli_query($konek, $q);

while($r=mysqli_fetch_assoc($k)) {
  $t='';
  if(!isset($c[$r['KD_DISP']])) {$t='<ul>';$c[$r['KD_DISP']]='{'.$r['KD_DISP'].'}';}
  $s=str_replace('{'.$r['KD_DISP'].'}',$t.'<div>'.$r['ISI_DIS'].'{'.$r['KD_DIS'].'}</div>{'.$r['KD_DISP'].'}',$s);
}
$s=str_replace($c,'</ul>',$s);
$s=preg_replace('/\{\d+\}/','',$s);
echo $s;


?>





