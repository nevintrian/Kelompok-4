	
<?php
	
    // delete mata_kuliah
        
    $KD_PROFIL = $_GET['KD_PROFIL'];
        
    if($id){
        
        $conn = mysql_connect("localhost","root","profil");
        
        mysql_select_db("profil",$conn);
        
        //delete data mahasiswa_mk
        
        mysql_query("delete from profil where KD_PROFIL='{$KD_PROFIL}'");
        
        //kemudian delete data mata kuliah
        
        mysql_query("delete from profil where KD_PROFIL='{$KD_PROFIL}'");
        
    }
        
    header("Location: index.php");
        
     
        
    // ----------------------------------- //
        
     
        
    //delete mahasiswa
        
    $NO_TELEPON = $_GET['NO_TELEPON'];
        
    if($NO_TELEPON){
        
        $conn = mysql_connect("localhost","root","profil_detil");
        
        mysql_select_db("profil_detil",$conn);
        
        //delete data mahasiswa_mk
        
        mysql_query("delete from profil_detil where NO_TELEPON='".mysql_real_escape_string($NO_TELEPON)."'");
        
        //kemudian delete data mahasiswa
        
        mysql_query("delete from profil_detil where NO_TELEPON='".mysql_real_escape_string($NO_TELEPON)."'");
        
    }
        
    header("Location: index.php"); 