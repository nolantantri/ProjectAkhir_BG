<?php 
	$koneksi = new mysqli("localhost","root","","db_agenproperti");

	$username= $_POST['username'];
	$nama= $_POST['nama'];
	$password= $_POST['password'];
	$konfirmasipassword= $_POST['konfirmasipassword'];
	$terms = $_POST['terms'];

	if($username!="" && $nama!="" && $password!="" && $konfirmasipassword!="")
	{
		if ($password==$konfirmasipassword)
		{
			if($terms=='agree')
			{
				$salt= getSalt();
				$md5pass = md5($password);
				$md5salt= $salt.$md5pass.$salt;
				$md5final = md5($md5salt);

				$sql="INSERT INTO user VALUES('','$username','$nama','$md5final', '$salt')";
				$hasil= $koneksi->query($sql);	

				if ($hasil === true)
				{
					echo "<script type='text/javascript'> alert('Berhasil melakukan registrasi akun pengguna.'); window.location.href='../view/form_login.php' </script>";
				}
				else
				{
					echo "<script type='text/javascript'> alert('Mohon maaf, Gagal melakukan registrasi akun pengguna.');window.location.href='../view/form_registrasi.php'</script>";
				}
			}
			else
			{
				echo "<script type='text/javascript'> alert('Anda Belum Menyetujui Kebijakan yang Telah Kami Buat.');window.location.href='../view/form_registrasi.php'</script>";
			}	
		}
		else
		{
			echo "<script type='text/javascript'> alert('Konfirmasi Password yang di Inputkan Salah.');window.location.href='../view/form_registrasi.php'</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../view/form_registrasi.php'</script>";
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