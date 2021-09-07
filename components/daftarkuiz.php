<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/kuizsainskomputer.css">
</head>
<body>

<?php 
include('link_db.php'); 
require('pengesahanguru.php');
?> 

<h2 style="text-align:center">Bina Kuiz</h2>

<form action="prosesdaftarkuiz.php" method="post">
  <div class="imgcontainer">
    <img src="imgs/kuiz.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="kuiz"><b>Nama Kuiz</b></label><br>
    <input type="text" placeholder="Enter name of quiz" name="kuiz" required>
	
	<input class="button" align="center" name="SUBMIT" type="SUBMIT" value="BINA SOALAN"/>
  </div>

  
</form>

</body>
</html>


