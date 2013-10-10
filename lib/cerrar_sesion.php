<?php
        session_start();
	session_destroy();
	$_SESSION["usuario"]="";
	header("Location: ../login.php");
?>
