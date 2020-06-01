<?php 
	require('../connect.php');

	$nama= $_POST['nama'];
	$jenis_poi= $_POST['jenis_poi'];
	$geom = $_POST['geom'];

	$sql = "INSERT INTO point_of_interest(nama,jenis_pointofinterest,geom) VALUES('$nama','$jenis_poi','$geom')";
	if($koneksi->query($sql) === TRUE){
		echo "<script type='text/javascript'> alert('Gagal untuk melakukan LogIn');window.location.href='../index.php'</script>";
	}
	else{
		echo $koneksi->error;
	}
 ?>