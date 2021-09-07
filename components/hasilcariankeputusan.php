<html>

<head>
<link rel="stylesheet" href="./css/kuizsainskomputer.css">
</head>
<body>

<?php
include ('link_db.php');
require('pengesahanmurid.php');
require('pengesahanguru.php');
?>

<table style="border-spacing:1px; background:white; border-radius:5px" border="1" width="849" align="center" cellspacing="2" cellpadding="2">
 <tr>
    <td align="center" width="30"><b>Bil.</b></td>
    <td align="center" width="150"><b>Nama Murid</b></td>
	<td align="center" width="150"><b>Nama Kuiz</b></td>
    <td align="center" width="120"><b>Peratus</b></td>
   

  </tr>
  
<?php
	$no=1;
	$kuiz=$_POST["kuiz"];	
	$murid=$_POST["murid"];		
	$pilihpenilaian=mysqli_query($conn,"select * from penilaian where idkuiz='$kuiz' AND idmurid='$murid' "); 
	
	

	$bil_rekod=mysqli_num_rows($pilihpenilaian);
	
	echo "<center>";
	echo '<p class="recordFound">Rekod yang dijumpai: '.$bil_rekod.'</p>';
	
	while ($row=mysqli_fetch_array($pilihpenilaian))
	{
			//gets the student's name 
			
			$datamurid=mysqli_query($conn,"select * from murid
			where idmurid='$row[idmurid]'");
			$infomurid=mysqli_fetch_array($datamurid);
	
			//gets the quiz's name
			
			$datakuiz=mysqli_query($conn,"select * from kuiz
			where idkuiz='$row[idkuiz]'");
			$infokuiz=mysqli_fetch_array($datakuiz);
			
	
    ?>
	
	
	
	

 <!–– PAPAR REKOD DALAM JADUAL ––>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $infomurid['namamurid']; ?></td>
    <td><?php echo $infokuiz['namakuiz']; ?></td>
	<td><?php echo $row['peratus']; ?></td>
	
	</tr>
  
<?php $no++; } ?>

</table>
</form>

<div>
<a href=cariankeputusan.php><br>Kembali</a>
</div>

</body>
</html>
