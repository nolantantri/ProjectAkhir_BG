<?php 
	require('connect.php');

	$nama= $_POST['nama'];
	$jenis_poi= $_POST['jenis_poi'];
	$point_x = $_POST['x_point'];
	$point_y= $_POST['y_point'];

	$sql = "INSERT INTO point_of_interest(nama,jenis_pointofinterest,pointX,pointY) VALUES('$nama','$jenis_poi','$point_x','$point_y')";
	if($koneksi->query($sql) === TRUE){
		
		header("Location: index.php");
	}
	else{
		echo $koneksi->error;
	}
 ?>