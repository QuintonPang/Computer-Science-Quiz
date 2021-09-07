<?php


session_start();

//remove variable from session
unset($_SESSION['username_murid']);

//on the other hand, session.unset() frees ALL variable

//Just a debugging process by listing out all variables in session
//echo "<script>alert('".var_dump($_SESSION)."')";

?>
<html>

	<script>
		alert("Logged Out Successfully!");
		window.location.href="/kuizsainskomputer";
	</script>
</html>