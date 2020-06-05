<?php 
	require('../connect.php');

	$id= $_GET['id'];
	$nama = $_POST['nama'];
	$jenis_poi= $_POST['jenis_poi'];
	$geom =$_POST['geom_point'];

	if(isset($_GET['id']))
	{
		if($nama!="" && $jenis_poi!="" && $geom!="")
		{
			$sql = "UPDATE point_of_interest SET nama='$nama',jenis_pointofinterest='$jenis_poi',geom='$geom' WHERE idpoi=".$id;
			$hasil =$koneksi->query($sql);

			if($hasil === TRUE)
			{
				echo "<script type='text/javascript'> alert('Berhasil Mengubah Data Point Of interest');window.location.href='../view/form_pointofinterest.php'</script>";
			}
			else
			{
				echo "Error: ".$koneksi->error;
			}
		}
		else
		{
			echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../view/form_ubah_pointofinterest.php'</script>";
		}	
	}
	

	

	
 ?>