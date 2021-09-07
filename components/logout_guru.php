<?php


session_start();

//remove variable from session
unset($_SESSION['username_guru']);
?>
<html>

	<script>
		alert("Logged Out Successfully!");
		window.location.href="/kuizsainskomputer";
	</script>
</html>