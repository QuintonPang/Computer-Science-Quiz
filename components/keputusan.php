<html>

<head>
<?php 
include('link_db.php'); 
require('pengesahanmurid.php');
?> 
<link rel="stylesheet" href="./css/kuizsainskomputer.css">
</head>
<body>

  
<script>
	
	window.onload=()=>{
		
		alert("Jawapan Berjaya Dihantar, Sila Semak Jawapan");
		
	}
   

</script>

<br>
<h2 style="text-align:center">Keputusan</h2>

<table align='center' width='386' border='1' style='width:75%'><tr><th>Jawapan Saya</th><th>Jawapan Betul</th><th>Betul/Salah</th></tr>



<?php

//this is the score
$score=0;

//this is number of question
$no=0;

include ('link_db.php'); 

$idkuiz=$_POST['idkuiz'];
$idmurid=$_POST['idmurid'];


//for every post value... $key is name, $value is input
foreach($_POST as $key=>$value){
	
  //we get the name which is the id soalan for every soalan
  $num= htmlspecialchars($key);
  
  //search for the soalan based on idsoalan
	$data=mysqli_query($conn,"select * from soalan where idsoalan='$num' "); 
	

	$info=mysqli_fetch_array($data);
	
	//to check if it exists as question and answer, this line is to escape $value of HANTAR JAWAPAN
	if($info!==null){
	
	
	//printing our answer
	
	echo "<tr><td>".htmlspecialchars($value)."</td>";
	
	//printing correct answer
	echo "<td>".$info['jawapan']."</td>";

	//let's check if it's correct
	if (strcasecmp(trim($value),trim($info['jawapan']))==0){ 
	
	echo"<td>Betul!</td></tr>";
	
	$score++;
	$no++;
	
	}
  else{
		
	 echo"<td>Salah!</td></tr>";
	 $no++;
	}

}
	
	
	// DONE!!! :)
	
	
}


?>
</table>
<br>
<div class="score">
<?php echo "<b>Markah:".$score."/".$no."</b>";?>
</div>
 
<center>
	<!-- hidden form which sends score percentage, idkuiz, idmurid -->
	<form action="prosespenilaian.php" method="post">
	<?php echo"<input type='hidden' name='peratus'value='".($score*100/$no)."'>"?>
	<?php echo"<input type='hidden' name='idkuiz'  value='".$idkuiz."'>"?>
	<?php echo"<input type='hidden' name='idmurid'  value='".$idmurid."'>"?>

	<input class="button" name="Submit" type="Submit" value="DONE"/>
	</form>

	<button class="cancelbtn"onclick=window.print() >PRINT</button>
</center>
</body>
</html>