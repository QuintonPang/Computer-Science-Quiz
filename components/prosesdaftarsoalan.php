<html>
<head>
<title>Daftar Soalan</title>
<!--<a href="daftarsoalan.php">Kembali</a>-->
</head>

<body>

<?php 
include ('link_db.php'); 

$soalan= $_POST['soalan'];
$jawapan= $_POST['jawapan'];
$guru= $_POST['guru'];
$kuiz= $_POST['kuiz'];

$query ="insert into soalan values ('','$soalan','$jawapan','$guru','$kuiz')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Bina Soalan")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Bina Soalan")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="daftarsoalan.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
