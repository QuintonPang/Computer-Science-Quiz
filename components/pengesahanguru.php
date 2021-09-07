<?php

session_start();
//elak bypass


if (!(isset($_SESSION['username_guru'])))
{
	header("location:../index.php");
}


?>