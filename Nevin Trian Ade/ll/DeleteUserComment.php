
<html>
<title> Delete User Comment from Table - Under Construction </title>  

<body>

<FORM name="MyForm" METHOD=POST ACTION="del.php">
Name : <INPUT TYPE="text" NAME="name">

<INPUT TYPE="submit">
<br><br>
</FORM>

<?php

$hostname = ' Your Server URL ';     // URL of Your Server/Host where MySql is installed.
$db_username = 'db_un';				//  db_un Your MySql User Name
$db_password = 'db_pass';           // db_pass is your Database Password
$dbName = 'db_name';                // db_name is your MySQL DataBase name


// Create connection
$conn = new mysqli($hostname, $db_username, $db_password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$FAuthor=$_POST['name'];


// sql to delete a record
$sql = "DELETE FROM Table_Name WHERE author='$FAuthor'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

</body>
</html>
