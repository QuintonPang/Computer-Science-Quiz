
<?php 
include('link_db.php'); 
require('pengesahan.php');
?> 


<html>
<head>
<link rel="stylesheet" href="css/kuizsainskomputer.css"
</head>
<body>

<br>
<br>
<br>
<h2 style="text-align:center">Cari Kuiz</h2>


<form align="center"action="hasilcariankuiz.php" method="post">
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
		
		    //select according to id from first to last
			//SAMBUNG REKOD YANG BERKAITAN
			$datakuiz=mysqli_query($conn,"select * from kuiz where idkuiz='$no'");
			$infokuiz=mysqli_fetch_array($datakuiz);
	
			 echo "<option value='".$infokuiz['idkuiz']."'>".$infokuiz['namakuiz']."</option>";

	
	$no++;}
	
  ?>
   
  
	
	</select>
<br>

	<br>

<input class="button" align="center" name="SUBMIT" type="SUBMIT" value="CARI">

</form>

</body>
</html>
