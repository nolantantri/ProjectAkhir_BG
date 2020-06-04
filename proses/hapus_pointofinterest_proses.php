<?php 
	require('../connect.php');

	if(isset($_GET['id']))
	{
		$idpoi = $_GET['id'];
		$sql = "DELETE FROM point_of_interest WHERE idpoi =".$idpoi;
		$hasil = $koneksi->query($sql);

		if($hasil==TRUE)
		{
			echo "<script type='text/javascript'> alert('Berhasil Menghapus Data Point Of interest');window.location.href='../view/form_pointofinterest.php'</script>";
		}
		else
		{
			echo "Error: ".$koneksi->error;
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Gagal Menghapus ID Point Of Interest Tidak Dapat Ditemukan');window.location.href='../view/form_pointofinterest.php'</script>";	
	}
 ?>