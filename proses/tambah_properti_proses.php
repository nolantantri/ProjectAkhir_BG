<?php 
	require('../connect.php');

	$kategori_transaksi= $_POST['kategori_transaksi'];
	$jenis_properti= $_POST['jenis_properti'];
	$harga= $_POST['harga'];
	$alamat= $_POST['alamat'];
	$luas_tanah= $_POST['luas_tanah'];
	$luas_bangunan= $_POST['luas_bangunan'];	
	$geom = $_POST['geom_polygon'];
	$keterangan= $_POST['keterangan'];


	if($kategori_transaksi!="" && $jenis_properti!="" && $harga!="" && $alamat!="" && $luas_tanah!="" && $luas_bangunan!="" && $geom!="" && $keterangan!="")
	{
		$sql1 = "INSERT INTO properti(kategori_transaksi,jenis_property,harga,alamat,luastanah,luasbangunan,geom,keterangan) 
		        VALUES('$kategori_transaksi','$jenis_properti','$harga','$alamat','$luas_tanah','$luas_bangunan','$geom','$keterangan')";
		$hasil1= $koneksi->query($sql1);
		if($hasil1)
		{
			if(file_exists($_FILES['gambar']['tmp_name'][0]))
			{
				$sql2 = "SELECT * FROM properti ORDER BY idproperti DESC LIMIT 1";
				$query = $koneksi->query($sql2);
				$hasil2 = $query->fetch_assoc();
				$id_properti = $hasil2['idproperti'];

				$total = count($_FILES['gambar']['name']);
				for($i=0; $i<$n; $i++){
		    		$idgambar = 1;
		    		$sql3 = "SELECT * FROM gambar_properti ORDER BY idgambar DESC LIMIT 1";
		    		$hasil3 = $connection->query($sql3);
			    	if($hasil3->num_rows > 0){
			    		while($r2 = $hasil3->fetch_assoc()){
			    			$idgambar = $r2['idgambar']+1;
			    		}
			    	}

			    	$ext = pathinfo($_FILES['gambar']['name'][$i], PATHINFO_EXTENSION);
			    	$newfilename = $idgambar.".".$ext;
					$destination = "img/".$newfilename;
					move_uploaded_file($_FILES['gambar']['tmp_name'][$i], $destination);

					$sql4 = "INSERT INTO gambar_properti VALUES('$idgambar', '$ext', '$idProperti')";
					if($connection->query($sql4) === FALSE)
					{
						echo $connection->error;
					}
			    }
			}
			echo "<script type='text/javascript'> alert('Berhasil Menambahkan Data Properti');window.location.href='../view/form_properti.php'</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../view/form_tambah_properti.php'</script>";
	}
 ?>