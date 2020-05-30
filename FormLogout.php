<?php 
	session_start();
	if(isset($_SESSION['nama']))
	{
		unset($_SESSION['nama']);
		header("Location: index.php");
	}
	else
	{
		header("Location: index.php");
	}
?>