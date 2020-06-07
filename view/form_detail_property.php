<?php
	$propid= $_GET['id'];
	$sql = "SELECT * FROM properti AS p INNER JOIN gambar_properti AS gp 
	    	ON p.idproperti=gp.idproperti 
	   		WHERE p.idproperti='$propid'";
	$hasil = $koneksi->query($sql);

	if ($row = $hasil->fetch_array())
	{
?>
	
	<div style="margin-top:2%; margin-left: 10px">
		<p style="font-weight: bold; font-size: 20px;">* DETAIL PROPERTI *</p>
			<table>
				<tr>
					<td width='150px'>Kategori Transaksi</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['kategori_transaksi'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Jenis Properti</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['jenis_properti'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Harga</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['harga'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Alamat</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['alamat'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Luas Tanah</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['luastanah'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Luas Bangunan</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['luasbangunan'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Keterangan</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['keterangan'] ?></td>
				</tr>
				<tr>
					<td width='150px'>Gambar</td>
					<td width='50px'>:</td>
					<td width='300px'>
						<div class="container_gbr"> 
							<img width='120px' src='img/<?php echo $row['idgambar']?>.<?php echo $row['extension'] ?>' >
						</div>
					</td>
				</tr>
			</table>
			<br>
			<center>
				<a href="index.php" class="btn btn-danger"> Kembali Ke Halaman Home </a>	
			</center>
			<br>	
	</div>
	
<?php
	}
	else
	{
		echo "<script type='text/javascript'> alert('terjadi kesalahan');</script>";
	}
?>


