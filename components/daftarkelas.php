<!DOCTYPE html>
<html>
<head>
<?php 
include('link_db.php'); 
require('pengesahanguru.php');
?> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/kuizsainskomputer.css">
</head>
<body>

<h2 style="text-align:center">Daftar Kelas</h2>

<form action="prosesdaftarkelas.php" method="post">
  <div class="imgcontainer">
    <!--<img src="" alt="Avatar" class="avatar">-->
  </div>

  <div class="container">
    <label for="class"><b>Class</b></label>
    <input type="text" placeholder="Enter Class" name="class" required>

        
    <input class="button" align="center" name="SUBMIT" type="SUBMIT" value="DAFTAR KELAS"/>
 
</form>

</body>
</html>


