<?php 
	session_start();
	if(isset($_SESSION['nama']))
	{
		unset($_SESSION['nama']);
		echo "<script type='text/javascript'> alert('Berhasil melakukan SignOut');window.location.href='index.php'</script>";

	}
	else
	{
		header("Location: index.php");
	}
?>