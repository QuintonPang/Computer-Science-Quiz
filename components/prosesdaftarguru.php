<html>
<head>
<title>Daftar Guru</title>
<!--<a href=daftarguru.php">Kembali</a>-->
</head>

<body>

<?php 
include ('link_db.php'); 

$username= $_POST['username'];
$password = $_POST['password'];

$query ="insert into guru values ('','$username','$password')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Daftar Guru")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Daftar Guru")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="daftarguru.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
