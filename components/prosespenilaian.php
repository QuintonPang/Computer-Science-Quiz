<html>
<head>
<title>Daftar Penilaian</title>
<!--<a href="senaraikuiz.php">Kembali</a>-->
</head>

<body>

<?php 
include ('link_db.php'); 

$idkuiz= $_POST['idkuiz'];
$peratus= $_POST['peratus'];
$idmurid= $_POST['idmurid'];

$query ="insert into penilaian values ('','$peratus','$idkuiz','$idmurid')";
if (mysqli_query($conn, $query)) {
	echo '<script language="javascript">';
	echo 'alert("Berjaya Rekod Markah")'; 
	echo '</script>';
	
} else {
    //die ('Error: ' . mysql_error());
	echo '<script language="javascript">';
	echo 'alert("Gagal Rekod Markah")';
	echo'</script>';

}
echo '<script language="javascript">';
echo 'window.location="senaraikuiz.php"';
echo'</script>'; 

mysqli_close($conn);
?> 

</body>
</html>
