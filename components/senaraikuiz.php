
<html>
<head>
	<style>
		/* alternating colors in table */
		tr:nth-child(even){
			background:lightgray;
		}
	</style>
</head>
<body>

<?php 
include('link_db.php'); 
require('pengesahanmurid.php');
$sql="SELECT * from kuiz ORDER BY idkuiz ASC";
$result = mysqli_query($conn,$sql) or die(mysql_error());
?>

<body>
<P><strong><center> Senarai Kuiz</strong></center><br>


<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FFCC00"><strong>Bil</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Nama Kuiz</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Bilangan Soalan</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jawab</strong></td>

</tr>

<?php
$no=1;

while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$no."</td>";
$idk=$row["idkuiz"];   //nama row = nama field dlm db. hantar ke $idk
echo "<td>" .$row["namakuiz"]."</td>";


	$kuiz=$row["idkuiz"];			
	$pilihsoalan=mysqli_query($conn,"select * from soalan where idkuiz='$kuiz'  "); 
		
	echo "<center>";
	
	
	
	$bilangansoalan=0;
	
	while ($soalan=mysqli_fetch_array($pilihsoalan))
	{
			//gets the soalan 
			$bilangansoalan++;
			
	}
	

			
			echo "<td>" .$bilangansoalan."</td>";
echo "<td>","<a href=\"borangjawapan.php?id=$idk\">Jawab</a></td></tr>";

$no++; }

echo "</table>";
echo "<br>";
//echo "<script>alert('".var_dump($_SESSION)."')";
?>


</body>
</html>
