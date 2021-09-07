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

<h2 style="text-align:center">Bina Soalan</h2>

<form action="prosesdaftarsoalan.php" method="post">
  <div class="imgcontainer">
    <img src="imgs/soalan2.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="soalan"><b>Soalan</b></label><br>
  <textarea style="border-radius:25px" id="text" name="soalan" placeholder="Enter your question" rows="4" cols="150"></textarea>
	<br>
  <label for="jawapan"><b>Jawapan</b></label><br>
  <textarea style="border-radius:25px" id="text" name="jawapan" placeholder="Enter the answer" rows="4" cols="150"></textarea>
	<br>
	<br>
	<label for="guru"><b>Guru</b></label>
	
	<br>
	
	<select name="guru" placeholder="" required>

	<option disabled selected value> -- select an option -- </option>
	<?php
	$no=1;
		
	//take in all data
	$pilihstatus=mysqli_query($conn,"select * from guru"); 
	
	//take in number of data
	$bil_rekod=mysqli_num_rows($pilihstatus);
	

	//set loop within number of data
	while ($row=mysqli_fetch_array($pilihstatus))
	{
		
		    //select according to id from first to last
			//SAMBUNG REKOD YANG BERKAITAN
			$dataguru=mysqli_query($conn,"select * from guru where idguru='$no'");
			$infoguru=mysqli_fetch_array($dataguru);
	
			 echo "<option value='".$infoguru['idguru']."'>".$infoguru['namaguru']."</option>";

	
	$no++;}
	
  ?>
   
  
	
	</select> 
	<br>

	<br>
	<label for="kuiz"><b>Kuiz</b></label><br>
<select name="kuiz" placeholder="" required>



	<option disabled selected value> -- select an option -- </option>
	<?php
	$no1=1;
		
	$pilihstatus=mysqli_query($conn,"select * from kuiz"); 
	
	
	$bil_rekod=mysqli_num_rows($pilihstatus);
	

	
	while ($row=mysqli_fetch_array($pilihstatus))
	{
			//SAMBUNG REKOD YANG BERKAITAN
			$datakuiz=mysqli_query($conn,"select * from kuiz where idkuiz ='$no1'");
			$infokuiz=mysqli_fetch_array($datakuiz);
	
	echo "<option value='".$infokuiz['idkuiz']."'>".$infokuiz['namakuiz']."</option>" ;

   

 
  
   
   $no1++; }  ?>
	</select> 



        
    <input class="button" align="center" name="SUBMIT" type="SUBMIT" value="BINA SOALAN"/>
   <!--- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> --->
  </div>

 
</form>

</body>
</html>


