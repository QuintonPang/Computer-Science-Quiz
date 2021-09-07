<?php
include ('link_db.php');
?>

<html>

<head>
<link rel="stylesheet" href="./css/kuizsainskomputer.css">
<title>Log Masuk Guru</title>
</head>

<body>

<form action="prosesloginguru.php" method="post"> 
<br>
<br>
<br>
<p align="center"><strong style="font-size:25;font-family:cursive;background:white; border-radius:5px">Log Masuk Guru</strong></p>

<table style="border-spacing:20px; background:white; border-radius:5px"align="center" border="0">
 
    <td>Username:</td>
    <td><input type="text" placeholder="Enter your username" name="username" size="30" style="border-radius:50px"required /></td>
  </tr>
  <tr>
    <td>Kata Laluan:</td>
    <td><input type="password" placeholder="Enter your password" name="password" size="30"style="border-radius:50px" required /></td>
  </tr>
  
</table>
<br>
<div>
<input class="button" name="SUBMIT" type="SUBMIT" value="Log Masuk"/>
</div>

</form>

<form align="center" name="form1" method="post" action="../">
				<button class="cancelbtn" align="center">Kembali ke Menu Utama</button><br><br> </form>
</body>
</html>
