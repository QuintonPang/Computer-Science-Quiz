

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

	<?php 

	// get name of kuiz
	$query="SELECT * from kuiz WHERE idkuiz='$idkuiz'";
	$datakuiz=mysqli_query($conn,$query);

	?>
	<h1><strong>Nama Kuiz: <?php while($row=mysqli_fetch_array($datakuiz))echo $row['namakuiz'] ?></strong></h1>

	<form action="keputusan.php" method="post">

		<h4>Nama Pelajar:
			<select name="idmurid" placeholder="" required>

				<option disabled value> -- select an option -- </option>
				<?php
					
					$pilihstatus=mysqli_query($conn,"select * from murid where namamurid='".$_SESSION['username_murid']."'"); 
					
					
					//$bil_rekod=mysqli_num_rows($pilihstatus);
					

					
					while ($row=mysqli_fetch_array($pilihstatus))
					{

						echo "<option selected value='".$row['idmurid']."'>".$row['namamurid']."</option>" ;
				
				
				
				
						$no++;
					} 
				?>
			</select> 

		</h4>
			
	<br>
	<br>

	<table align="center" width="95%" border="1">
		<tr>
			<th >Soalan:</th>	
			
			<th >Jawapan:</th> 
		</tr>
		<tr>
			
			<?php
			while ($i < $num) {
			$show=mysqli_fetch_assoc($result);
			$soalan=$show['soalan'];
			$idsoalan=$show['idsoalan'];
			?>

		
			<?php //echo "<input type='hidden' name='".$idsoalan."'>"?>
		</tr>
		<tr>
			<td scope="col"><div align="center">
				<?php echo $soalan; ?>
			</td>

			<td>
				<?php echo "<textarea rows='10' cols='125' name='".$idsoalan."'></textarea>" ?>
			</td>
		</tr>





	<?PHP
	++$i;
	}
	?>
	<?php echo"<input type='hidden' name='idkuiz'  value='".$idkuiz."'>"?>


	</table>
	<br>
	<center>
		<input class="button" name="submit" type="submit" value="HANTAR JAWAPAN" onclick="popupAlert()"/>
		<br>
		<button class="cancelbtn" onclick=window.print() >PRINT</button>
	</center>
	</form> 
	</div>
</body>
</html>