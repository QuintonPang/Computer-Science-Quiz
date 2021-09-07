<?php

session_start();
//elak bypass


if (!(isset($_SESSION['username_murid'])))
{

	header("location:../index.php");
}


?>