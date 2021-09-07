<html>
<head>

<style>
body,html{
	height=100%;
	font-family:Arial,Helvetica,sans-serif;
	background-image:url("bg.jpg");
	
	background-repeat:no-repeat;
	background-size:cover;
}

.button{
	background-color:#FFFFE0;
	position:relative;
	width:150px;
	left:43%;
	align:center;
	padding:15px 32px;
	text-align:center;
	cursor:pointer;
	font-size:16px;
	border-radius:10px;
}

#mySidenav a{
	
	position:absolute;
	left:-120px;
	transition:0.3s;
	padding:15px;
	width:140px;
	font-size:20px;
	color:white;
	border-radius: 0 5px 5px 0;
	
}

#mySidenav a:hover{
	left:0;
}

#bukutekst4{
	
	top:80px;
	background-color:#4CAF50;
}

#bukutekst5{
	
	top:200px;
	background-color:#2196F3;
}

</style>
<title>Index</title>
</head>
<p style="background-color:darkblue; color:white;">Tarikh & Masa: <?php echo(strftime("%m/%d/%Y %H%M"));?></p>
<br>
<br>
<p style="color:white"align="center" ><strong>KUIZ SAINS KOMPUTER</strong></p> <!-- TAJUK FORM-->

<body bgcolor="white" text="black" link="black" vlink="#666666" alink="#999999">


<div id="mySidenav">
<a href="online.anyflip.com/wexi/bwqu/mobile/index.html" id="bukutekst4">Buku Teks Sains Komputer T4</a>
<a href="online.anyflip.com/wexi/pjsx/mobile/index.html" id="bukutekst5">Buku Teks Sains Komputer T5</a>
</div>


            
			<button class="button" onClick="window.location.href='components/loginguru.php'" align="center">Login Guru</button><br><br>
			<button class="button" onClick="window.location.href='components/loginmurid.php'" align="center">Login Murid</button><br><br> </form>
				

</body>

</html>
