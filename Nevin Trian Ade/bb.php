<?php

date_default_timezone_set('Asia/Jakarta');
$host = "localhost"; // Nama host
$username = "root"; // Username
$password = ""; // Password 
$database = "perumahan"; // Nama databasenya

$konek = mysqli_connect($host, $username, $password, $database); // Koneksi ke MySQL



$c=array();
$s='{0}';
$q="SELECT * FROM chat ORDER BY KD_CHATP, KD_CHATC";
$k=mysqli_query($konek, $q);

while($r=mysqli_fetch_assoc($k)) {
  $t='';
  if(!isset($c[$r['KD_CHATP']])) {$t='<ul>';$c[$r['KD_CHATP']]='{'.$r['KD_CHATP'].'}';}
  $s=str_replace('{'.$r['KD_CHATP'].'}',$t.'<li>'.$r['ISI_CHAT'].'{'.$r['KD_CHATC'].'}</li>{'.$r['KD_CHATP'].'}',$s);
}
$s=str_replace($c,'</ul>',$s);
$s=preg_replace('/\{\d+\}/','',$s);
echo $s;


?>





