

<?php 
include('link_db.php'); 
require('pengesahanguru.php');
?> 


<html>
<head>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.button {
  background-color: #04AA6D;
  align:center;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  opacity: 0.8;
}

.cancelbtn {
  align:center;
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
