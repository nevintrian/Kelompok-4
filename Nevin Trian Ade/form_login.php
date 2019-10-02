<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
</head>
<body bgcolor="grey">
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<center><h2 style='color:red';>Username atau password salah</h2><center>";
        }
    ?>
      <center><h1>Silahkan Login</h1>
      <form method="post" action="cek_login.php">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p></center>
      </form>
    </div>
  
</body>
</html> 