<?php

   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
    echo "<center><h1> Selamat datang di Web <h1></center>"; 
    echo "username :"; echo $_SESSION ["username"];
    echo "<h4><a href='logout.php'>Logout</a></h1>";
    }else{
        echo header("location:form_login.php");
    }
?> 