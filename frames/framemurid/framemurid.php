<?php
/**
session_start();
//elak bypass
include("pengesahan_murid.php");
//sambung ke pangkalan data
require('link_db.php');
//require('header.html');
*/
?>


<!DOCTYPE html>
<html>
<head>
<title>.:: KUIZ SAINS KOMPUTER ::.</title>
</head>

<frameset rows = "5%,8.5%,82.5%,5%" border="0">
  <frame name="header" src="header.html" noresize>
  <frame name="mheader" src="pautanmurid.html" noresize>
  <frame name="body" src="bodymurid.html" noresize>
  <frame name="footer" src="footer.html" noresize>
</frameset>

</html>


