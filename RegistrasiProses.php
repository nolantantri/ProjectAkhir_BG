<?php 
	$koneksi = new mysqli("localhost","root","","db_agenproperti");

	$username= $_POST['username'];
	$nama= $_POST['nama'];
	$password= $_POST['password'];
	$konfirmasipassword= $_POST['konfirmasipassword'];

	if ($password==$konfirmasipassword)
	{
		$salt= getSalt();
		$md5pass = md5($password);
		$md5salt= $salt.$md5pass.$salt;
		$md5final = md5($md5salt);

		$sql="INSERT INTO user VALUES('','$username','$nama','$md5final', '$salt')";
		$hasil= $koneksi->query($sql);	

		if ($hasil === true)
		{
			echo "<script type='text/javascript'> alert('Berhasil melakukan registrasi akun pengguna'); window.location.href='FormLogIn.php' </script>";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Mohon maaf, Gagal melakukan registrasi akun pengguna');window.location.href='FormRegistrasi.php'</script>";
			echo $password;
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Konfirmasi Password yang di Inputkan Salah');window.location.href='FormRegistrasi.php'</script>";;
	}


	function getSalt()
	{
		$newsalt="";
		$character ="WebgisAgenProperti";
		for ($i=0; $i<10; $i++)
			$newsalt.=$character[mt_rand(0,strlen($character)-1)];

		return $newsalt;
	}
 ?>