<?php 
	$koneksi = new mysqli("localhost","root","","db_agenproperti");

	$username= $_POST['username'];
	$password= $_POST['password'];

	$sql = "SELECT * FROM user WHERE username='$username'";
	$hasil = $koneksi->query($sql);

	if ($row = $hasil->fetch_array())
	{
		$salt = $row['salt'];
		$md5pass = md5($password);
		$md5salt= $salt.$md5pass.$salt;
		$md5final = md5($md5salt);

		if ($md5final == $row['password'])
		{
			echo "Sukses";

			session_start();
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['username'] = $user;
			header("Location: indexAdmin.php");
		}
			
		else
		{
			echo "<script type='text/javascript'> alert('Gagal untuk melakukan LogIn');window.location.href='FormLogIn.php'</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Username dan Password tidak dapat ditemukan');window.location.href='FormLogIn.php'</script>";
	}
 ?>