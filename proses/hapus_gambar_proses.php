<?php 
	require('../connect.php');

	if(isset($_GET['id']))
	{
		$idgambar = $_GET['id'];
		$idproperti = $_GET['idproperti'];
		$extension = $_GET['extension'];
		


		//HAPUS DATA GAMBAR 
		$sqlgambar= "SELECT * FROM gambar_properti WHERE idgambar=".$idgambar;
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
				header("Location: ../view/form_ubah_properti.php?id=".$idproperti);
			}
			else
			{
				echo "Error: ".$koneksi->Error;
			}
		}

	}
	else
	{
		echo "<script type='text/javascript'> alert('Gagal Menghapus, ID Gambar Properti Tidak Dapat Ditemukan');window.location.href='../view/form_properti.php'</script>";	
	}
 ?>