

<?php 
include('link_db.php'); 
require('pengesahanguru.php');
?> 


<html>
<head>
  <link rel='stylesheet' href='./css/kuizsainskomputer.css'>
</head>
<body>

<br>
<br>
<br>
<h2 style="text-align:center">Cari Keputusan</h2>


<form align="center"action="hasilcariankeputusan.php" method="post">
   <label for="kuiz" required><b>Nama Kuiz:</b></label><br><br>
   <select name="kuiz" placeholder="" required>

	<option disabled selected value> -- select an option -- </option>
	<?php
	$no=1;
		
	//take in all data
	$pilihstatus=mysqli_query($conn,"select * from kuiz"); 
	
	//take in number of data
	$bil_rekod=mysqli_num_rows($pilihstatus);
	

	//set loop within number of data
	while ($row=mysqli_fetch_array($pilihstatus))
	{
	
			 echo "<option value='".$row['idkuiz']."'>".$row['namakuiz']."</option>";

	
	$no++;}
	
  ?>
   
  
	
	</select>
<br>

	<br>
	
	
	<label for="murid" required><b>Nama Murid:</b></label><br><br>
   <select name="murid" placeholder="" required>

	<option disabled selected value> -- select an option -- </option>
	<?php
	$no2=1;
		
	//take in all data
	$pilihstatus_murid=mysqli_query($conn,"select * from murid"); 
	
	//take in number of data
	$bil_rekod_murid=mysqli_num_rows($pilihstatus_murid);
	

	//set loop within number of data
	while ($row=mysqli_fetch_array($pilihstatus_murid))
	{
	
	
			 echo "<option value='".$row['idmurid']."'>".$row['namamurid']."</option>";

	
	$no2++;}
	
  ?>
   
  
	
	</select>
<br>

	<br>

<input class="button" align="center" name="SUBMIT" type="SUBMIT" value="CARI">

</form>

</body>
</html>
