<?php



mysqli_connect('localhost', 'root', '');//koneksi ke database dengan memasukkan host,user, dan password

mysqli_select_db('login');

$pass=md5($_POST[password]);



$sql=mysqli_query("SELECT * FROM user WHERE username='$_POST[username]' and [color=red]pass=[/color]'$pass'");

$level=mysqli_num_rows($sql);

$r=mysqli_fetch_array($sql);



if ($level > 0){

session_start();



session_register("username");

session_register("password");

session_register("level");



$_SESSION[username] = $r[username];

$_SESSION[password] = $r[password];

$_SESSION[level]= $r[level];


if($_POST){

if($_POST['verifikasi']!=NULL){

if($_POST['verifikasi']==$_SESSION['captcha_session']){





header('location:admin.php');

}else{



header('location:index.php');



}



}

}

}

?>
