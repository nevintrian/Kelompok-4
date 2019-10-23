<?php 
        include "koneksi.php";
        $cek_user=mysql_num_rows(mysql_query("SELECT * FROM user WHERE username='$_POST[username]'"));
        if ($cek_user > 0) {
            echo '<script language="javascript">
                  alert ("Username Sudah Ada Yang Menggunakan");
                  window.location="index.php";
                  </script>';
                  exit();
        }
        else {
            $password    =md5('$_POST[password]');
            mysql_query("INSERT INTO user (username, password)
            VALUES ('$_POST[username]', '$password')");
            
            echo '<script language="javascript">
                  alert ("Registrasi Berhasil Di Lakukan!");
                  window.location="index.php";
                  </script>';
                  exit();
        }
    ?>
