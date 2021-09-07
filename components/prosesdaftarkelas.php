<html>
<head>
<title>Daftar Guru</title>

</head>

<body>

<?php 
include ('link_db.php'); 

$class= $_POST['class'];

$query ="insert into kelas values ('','$class')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Daftar Kelas")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Daftar Kelas")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="daftarkelas.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
