<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/kuizsainskomputer.css">
		<script src='../src/jquery-3.6.0.min.js'></script>
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
		<textarea style="border-radius:15px" id="text" name="soalan" placeholder="Enter your question" rows="4" cols="150"></textarea>
			<br>
		<label for="jawapan"><b>Jawapan</b></label><br>
		<textarea style="border-radius:15px" id="text" name="jawapan" placeholder="Enter the answer" rows="4" cols="150"></textarea>
			<br>
			<br>
			<label for="guru"><b>Guru</b></label>
			
			<br>
			
			<select name="guru" placeholder="" required>


			<option disabled value> -- select an option -- </option>
			<?php
			$no=1;
				
			//take in all data
			$pilihstatus=mysqli_query($conn,"select * from guru"); 
			
			//take in number of data
			$bil_rekod=mysqli_num_rows($pilihstatus);
			

			//set loop within number of data
			while ($row=mysqli_fetch_array($pilihstatus))
			{
				
			
					echo "<option id='guruOption' value='".$row['idguru']."'>".$row['namaguru']."</option>";

			
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
			
				echo "<option id='kuizOption' value='".$row['idkuiz']."'>".$row['namakuiz']."</option>" ;

				$no1++; 
				
				}  ?>
			</select> 

				<br>

				
			<input class="button" align="center" name="SUBMIT" type="SUBMIT" value="BINA SOALAN"/>
		<!--- <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
			</label> --->
		</div>

		
		</form>

		<!-- getting current teacher registering the question -->
		<?php echo"
		<script>
						Object.values($('#guruOption')).map(option=>{
							if(option.text==='".$_SESSION['username_guru']."') $(this).attr('selected');
						});
		</script>
		<script>
						
						Object.values($('#kuizOption')).map(option=>{
							if(option.value==='".$_SESSION['id_kuiz']."') $(this).attr('selected');
						});
				
		</script>"
		?>

	</body>

</html>


