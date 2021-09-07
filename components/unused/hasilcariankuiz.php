<html>

<head>
<link rel="stylesheet" href="./css/kuizsainskomputer.css">
</head>
<body>

<?php
include ('link_db.php');
?>

<table style="border-spacing:1px; background:white; border-radius:5px" border="1" width="849" align="center" cellspacing="2" cellpadding="2">
 <tr>
    <td align="center" width="30"><b>Bil.</b></td>
	<td align="center" width="150"><b>Nama Kuiz</b></td>
    <td align="center" width="120"><b>Bilangan Soalan</b></td>
   

  </tr>
  
<?php
	$no=1;
	$kuiz=$_POST["kuiz"];			
	$pilihkuiz=mysqli_query($conn,"select * from kuiz where idkuiz='$kuiz'  "); 
	$pilihsoalan=mysqli_query($conn,"select * from soalan where idkuiz='$kuiz'  "); 
	
	

	$bil_rekod=mysqli_num_rows($pilihkuiz);
	
	echo "<center>";
	echo '<p class="recordFound">Rekod yang dijumpai: '.$bil_rekod.'</p>';
	
		$bilangansoalan=0;
	while ($row=mysqli_fetch_array($pilihkuiz))
	{
			
			
		while ($soalan=mysqli_fetch_array($pilihsoalan))
		{
			//gets the soalan 
			$bilangansoalan++;
			
		}
	
    ?>
	
	
	
	

 <!–– PAPAR REKOD DALAM JADUAL ––>
  <tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $row['namakuiz']; ?></td>
	<td><?php echo $bilangansoalan; ?></td>
	
	</tr>
  
<?php $no++; } ?>

</table>
</form>

<div>
<a href=cariankuiz.php><br>Kembali</a>
</div>

</body>
</html>
