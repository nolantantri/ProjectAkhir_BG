<?php 
	require('../connect.php');

	$id= $_GET['id'];
	$kategori_transaksi= $_POST['kategori_transaksi'];
	$jenis_properti= $_POST['jenis_properti'];
	$harga= $_POST['harga'];
	$alamat= $_POST['alamat'];
	$luas_tanah= $_POST['luas_tanah'];
	$luas_bangunan= $_POST['luas_bangunan'];	
	$geom = $_POST['geom_polygon'];
	$keterangan= $_POST['keterangan'];

	if(isset($_GET['id']))
	{
		if($kategori_transaksi!="" && $jenis_properti!="" && $harga!="" && $alamat!="" && $luas_tanah!="" && $luas_bangunan!="" && $geom!="" && $keterangan!="")
		{
			$sql = "UPDATE properti SET kategori_transaksi='$kategori_transaksi', jenis_properti='$jenis_properti'    , harga='$harga', alamat='$alamat', luastanah='$luas_tanah', luasbangunan= '$luas_bangunan'    , geom='$geom', keterangan='$keterangan'  WHERE idproperti=".$id;
			$hasil =$koneksi->query($sql);

			if($hasil === TRUE)
			{
				if(file_exists($_FILES['gambar']['tmp_name'][0]))
				{
					$id_properti = $koneksi->insert_id;

					$total = count($_FILES['gambar']['name']);
					for($i=0; $i<$total; $i++)
					{
						$path = "../img";
			    		$idgambar = 1;
			    		$sql2 = "SELECT * FROM gambar_properti ORDER BY idgambar DESC LIMIT 1";
			    		$hasil2 = $koneksi->query($sql2);
				    	if($hasil2->num_rows > 0){
				    		while($row = $hasil2->fetch_assoc()){
				    			$idgambar = $row['idgambar']+1;
				    		}
				    	}

				    

				    	$ext = pathinfo($_FILES['gambar']['name'][$i], PATHINFO_EXTENSION);
				    	$namagambarterbaru = $idgambar.".".$ext;
						$destination = $path."/".$namagambarterbaru;
						move_uploaded_file($_FILES['gambar']['tmp_name'][$i], $destination);

						$sql3 = "INSERT INTO gambar_properti VALUES('$idgambar', '$ext', '$id')";
						if($koneksi->query($sql3) === FALSE)
						{
							echo "Error: ".$koneksi->error;
						}
				    }
				}
				echo "<script type='text/javascript'> alert('Berhasil Mengubah Data Properti');window.location.href='../view/form_properti.php'</script>";
			}
			else
			{
				echo "Error: ".$koneksi->error;
			}
		}
		else
		{
			echo "<script type='text/javascript'> alert('Pastikan Anda Mengisikan Seluruh Inputan yang Telah di Sediakan.');window.location.href='../view/form_ubah_properti.php'</script>";
		}	
	}
	

	

	
 ?>