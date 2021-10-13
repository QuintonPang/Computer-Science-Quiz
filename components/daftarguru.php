
<!DOCTYPE html>
<html>
<head>
<?php 
include('link_db.php'); 

?> 
<link rel="stylesheet" href="css/kuizsainskomputer.css">
</head>
<body>

<h2 style="text-align:center">Daftar Guru</h2>

<form action="prosesdaftarguru.php" method="post">
  <div class="imgcontainer">
    <img src="imgs/teacher.png" alt="Avatar" class="avatar" style='height:300px;'>
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input class="button" align="center" name="SUBMIT" type="SUBMIT" value="DAFTAR GURU"/>
   <!--- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> --->
  </div>

  <div class="container">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    
  </div>
</form>

</body>
</html>


