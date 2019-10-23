<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
 <header>
<nav class="menu"> <ul> <li> <a href="home.php"> home </a> </li> <li> <a href="register.php"> register</a> </li> <li> <a href="login.php"> login </a> </li> </ul> </nav> </header>
<p>
    <form action="prosesregister.php" method="post">
<table width="96%" height="332" border="1" >
<tr>
 <td width="23%" height="121">&nbsp;</td> 
 <td width="49%"> 
<p>
<h2>FORM PENDAFTAR: </h2></p>
<table >
<tr>
  <td> KD_USER </td> 
  <td> <input type="text" class="txtktk" name="KD_USER"> </td>
  </tr>

 <tr>
  <td> USERNAME </td> 
  <td> <input type="text" class="txtktk" name="USERNAME"> </td>
  </tr>
  
<tr>
 <td> PASSWORD  </td> <td><input type="password" class="txtktk" name="PASSWORD"> </td>
 </tr>  

<tr>
 <td> STATUS </td> 
 <td> <input type="text" class="txtktk" name="STATUS"> </td>
  </tr>
    

    
    
</table> 
      <P> <input type="submit" id="submit" name="submit" value="daftar" class="btn" >  </P> </form>
</td> 
  <td width="28%">&nbsp;</td> </tr> 
    </table> 

<footer> copyright <a href="ruangtek.blogspot.com">ruangtek</a> 2018</footer> 

</body>
</html>