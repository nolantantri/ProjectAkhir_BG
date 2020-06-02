<?php 
	require('../connect.php');

	$kategori_transaksi= $_POST['kategori_transaksi'];
	$jenis_properti= $_POST['jenis_properti'];
	$harga= $_POST['harga'];
	$alamat= $_POST['alamat'];
	$kelurahan= $_POST['kelurahan'];
	$kecamatan= $_POST['kecamatan'];
	$luas_tanah= $_POST['luas_tanah'];
	$luas_bangunan= $_POST['luas_bangunan'];	
	$geom = $_POST['geom_polygon'];
	$keterangan= $_POST['keterangan'];


	if($kategori_transaksi!="" && $jenis_properti!="" && $harga!="" && $alamat!="" && $kelurahan!="" && $kecamatan!="" && $luas_tanah!="" && $luas_bangunan!="" && $geom!="" && $keterangan!="")
	{
		$sql = "INSERT INTO property(kategori_transaksi,jenis_property,harga,alamat,kelurahan,
		                             kecamatan,luastanah,luasbangunan,geom,keterangan) 
		        VALUES('$kategori_transaksi','$jenis_properti','$harga','$alamat','$kelurahan',
		               '$kecamatan','$luas_tanah','$luas_bangunan','$geom','$keterangan')";

		$hasil= $koneksi->query($sql);
		if($hasil === TRUE)
		{
			echo "<script type='text/javascript'> alert('Berhasil Menambahkan Data Properti');window.location.href='../index.php'</script>";
		}
		else
		{
			echo "<script type='text/javascript'> alert('Terjadi Kesalahan dalam menambahkan data properti.');window.location.href='../index.php?page=form_tambah_properti'</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../index.php?page=form_tambah_properti'</script>";
	}
 ?>