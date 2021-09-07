<html>
<head>
<title>Daftar Guru</title>

</head>

<body>

<?php 
include ('link_db.php'); 

$username= $_POST['username'];
$password= $_POST['password'];
$class= $_POST['class'];
$nokp= $_POST['nokp'];



$query ="insert into murid values('','$password','$username','$class','$nokp')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Daftar Murid")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Daftar Murid")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="daftarmurid.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
