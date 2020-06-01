<?php 
	require('../connect.php');

	$nama= $_POST['nama'];
	$jenis_poi= $_POST['jenis_poi'];
	$geom = $_POST['geom'];


	if($nama!="" && $jenis_poi!="" && $geom!="")
	{
		$sql = "INSERT INTO point_of_interest(nama,jenis_pointofinterest,geom) 
			VALUES('$nama','$jenis_poi','$geom')";

		$hasil =$koneksi->query($sql);
		if($hasil === TRUE)
		{
			echo "<script type='text/javascript'> alert('Berhasil Menambahkan Data Point Of interest');window.location.href='../index.php'</script>";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Terjadi Kesalahan dalam menambahkan data point of interest.');window.location.href='../index.php?page=form_tambah_pointofinterest'</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../index.php?page=form_tambah_pointofinterest'</script>";
	}

	

	
 ?>