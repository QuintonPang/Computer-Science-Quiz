<?php
//sambungan MYSQLI dengan nama $conn
$conn = mysqli_connect("localhost","root","","kuizsainskomputer");

// semak sambungan jika gagal
if (mysqli_connect_errno()){
echo "Gagal sambungkan pangkalan data mysql: ".mysqli_connect_error();
}
?>