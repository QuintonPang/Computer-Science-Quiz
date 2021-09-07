<?php
//sambung ke pangkalan data
require('link_db.php');
//mulakan session login untuk kekalkan login
session_start();

//semak sama ada data dengan id pengguna telah dihantar
if(isset($_POST['username']))
{

$username=$_POST['username'];
$password=$_POST['password'];


$query = mysqli_query($conn,"select * from guru where katalaluan='$password' 
AND namaguru='$username'");
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) == 0||$row['katalaluan']!=$password)
{
	//papar mesej gagal login
	echo "<script>alert('ID Pengguna atau Kata Laluan salah');
	window.location='loginguru.php'</script>";
}
else
{
	session_start();
	$_SESSION['username_guru']=$row['namaguru'];
	//$guru=$_SESSION['username_guru'];
	
	header("Location: ../frames/frameguru/frameguru.php");
}
}

?>
<!-- End of Login Check -->
</font></p>

</body>

</html>