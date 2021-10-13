<?php


session_start();

//remove variable from session
unset($_SESSION['username_guru']);
unset($_SESSION['id_kuiz']);
?>
<html>

	<script>
		alert("Logged Out Successfully!");
		window.location.href="/kuizsainskomputer";
	</script>
</html>