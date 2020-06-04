<?php 
	require('../connect.php');

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		//HAPUS DATA GAMBAR 
		$sqlgambar= "SELECT * FROM gambar_properti WHERE idproperti=".$id;
		$hasilgambar = $koneksi->query($sqlgambar);

		if($hasilgambar->num_rows >0)
		{
			while ($row = $hasilgambar->fetch_array()) {
				$idgambar = $row['idgambar'];
				$extension = $row['extension'];
			}

			$sql_hapus_gambar = "DELETE FROM gambar_properti WHERE idgambar=".$idgambar;
			$hasil_hapus_gambar = $koneksi->query($sql_hapus_gambar);
			if($hasil_hapus_gambar==TRUE)
			{
				unlink('../img/'.$idgambar.".".$extension);
			}
		}


		// HAPUS DATA PROPERTI
		$sql = "DELETE FROM properti WHERE idproperti =".$id;
		$hasil = $koneksi->query($sql);

		if($hasil==TRUE)
		{
			echo "<script type='text/javascript'> alert('Berhasil Menghapus Data Properti');window.location.href='../view/form_properti.php'</script>";
		}
		else
		{
			echo "Error: ".$koneksi->error;
		}
	}
	else
	{
		echo "<script type='text/javascript'> alert('Gagal Menghapus, ID Properti Tidak Dapat Ditemukan');window.location.href='../view/form_properti.php'</script>";	
	}
 ?>