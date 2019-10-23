<?php 
        include 'koneksi.php';
        
        if(isset($_POST['submit'])) {
         
              $KD_USER =$_POST['KD_USER'];
              $USERNAME =$_POST['USERNAME'];
              $PASSWORD = $_POST['PASSWORD'];   
              $STATUS =$_POST['STATUS'];

          
            $query = "INSERT INTO user VALUES ('$KD_USER', '$USERNAME', '$PASSWORD', '$STATUS')";
            $input = mysqli_query($dbconnect, $query);
            
            if(!$input) {
                die ("query gagal dijalankan: ".mysqli_errno($dbconnect). " - ".mysqli_error($dbconnect));
            }
          header("location:register.php");
        } 
?>
    
