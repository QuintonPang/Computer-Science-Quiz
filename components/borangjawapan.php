

<html>
<head>

<?php 
include('link_db.php'); 
require('pengesahanmurid.php');
?> 
<link rel="stylesheet" href="./css/kuizsainskomputer.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>


<body>
<div class="container">
<h2 style="text-align:center">Borang Jawapan Kuiz</h2>
<?PHP
include ('link_db.php'); 
$idkuiz=$_GET['id'];
$query="SELECT * from soalan WHERE idkuiz='$idkuiz'";
$result=mysqli_query($conn,$query);
$num= mysqli_num_rows($result);

$i=0;
?>

<form action="keputusan.php" method="post">

    <label><b>Nama:</b></label>
	<select name="idmurid" placeholder="" required>

	<option disabled selected value> -- select an option -- </option>
	<?php
	$no=1;
		
	$pilihstatus=mysqli_query($conn,"select * from murid"); 
	
	
	//$bil_rekod=mysqli_num_rows($pilihstatus);
	

	
	while ($row=mysqli_fetch_array($pilihstatus))
	{
			//SAMBUNG REKOD YANG BERKAITAN
			$datamurid=mysqli_query($conn,"select * from murid where idmurid='$no'");
			$infomurid=mysqli_fetch_array($datamurid);
	
			

    

	echo "<option value='".$infomurid['idmurid']."'>".$infomurid['namamurid']."</option>" ;
  
   
  
 $no++; } ?>
	</select> 
        
<br>
<br>

<table align="center" width="386" border="1">
<tr>
    <th >Soalan:</th>	<th >Jawapan:</th> <tr>
	
	<?php
while ($i < $num) {
$show=mysqli_fetch_assoc($result);
$soalan=$show['soalan'];
$idsoalan=$show['idsoalan'];
?>

 
  <?php //echo "<input type='hidden' name='".$idsoalan."'>"?>
  
  <tr>
    <td scope="col"><div align="center">
      <?php echo $soalan; ?>
   </td>

  <td>
    <?php echo "<textarea cols='75' name='".$idsoalan."'></textarea>" ?>
  </td>
  </tr>





<?PHP
++$i;
}
?>
<?php echo"<input type='hidden' name='idkuiz'  value='".$idkuiz."'>"?>


</table>
<br>
<input class="button" name="Submit" type="Submit" value="HANTAR JAWAPAN" onclick="popupAlert()"/>
<br>
  <button class="cancelbtn"onclick=window.print() >PRINT</button>
</form> 
</div>
</body>
</html>