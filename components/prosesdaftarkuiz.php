<html>
<head>
<title>Daftar Kuiz</title>
<!--<a href=daftarkuiz.php">Kembali</a>-->
</head>

<body>

<?php 
include ('link_db.php'); 

$kuiz= $_POST['kuiz'];

$query ="insert into kuiz values ('','$kuiz')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Bina Kuiz")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Bina Kuiz")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="daftarkuiz.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
