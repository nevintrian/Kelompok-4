<?php

include("config.php");
include("functions.php");

$author = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);

$comment_body = mysql_real_escape_string($_POST['comment_body']);
$parent_id = mysql_real_escape_string($_POST['parent_id']);

$toEmail = "info@abc.com";       // Email id of Site Administrator 
$mysub = "Subject of Email";    // Subject of Email 

$mailHeaders = "From: " . $_POST['name'] . "<". $_POST['email'] .">\r\n";


$q = "INSERT INTO Table_Name (author, email, comment, parent_id) VALUES ('$author', '$email', '$comment_body', $parent_id)"; // mark - Table_Name to change with your Table Name
$r = mysqli_query($q);
if(mysqli_affected_rows()==1)
	{

mail($toEmail, $mysub, $comment_body, $mailHeaders);
//	header("location:../index.php");   // Calling Your Parent File, you can call your desire file here 

    header("location:index.php"); 

}
else 
	{
echo "Comment cannot be posted. Please try again.";
}



?>





