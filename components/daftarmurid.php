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

<h2 style="text-align:center">Daftar Murid</h2>

<form action="prosesdaftarmurid.php" method="post">
  <div class="imgcontainer">
    <img src="imgs/student.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  
	<label for="nokp"><b>No. KP</b></label> <br>
    <input type="number" placeholder="Enter No. KP" name="nokp" minlength="12" maxlength="12" required>
	<br><br>
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	
	

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
	<br>
	<br>
	<label for="class"><b>Class: </b></label>

	
	<select name="class" placeholder="" required>

	<option disabled selected value> -- select an option -- </option>
	<?php
	$no=1;
		
	$pilihstatus=mysqli_query($conn,"select * from kelas"); 
	
	
	$bil_rekod=mysqli_num_rows($pilihstatus);
	

	
	while ($row=mysqli_fetch_array($pilihstatus))
	{
			

    

		echo "<option value='".$row['idkelas']."'>".$row['namakelas']."</option>" ;
  
   
  
 		$no++; 
 	} ?>
	</select> 

	<br>
        
    <input class="button" align="center" name="SUBMIT" type="SUBMIT" value="DAFTAR MURID"/>
   <!--- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> --->
  </div>

  
</form>

</body>
</html>


