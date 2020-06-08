<?php
	$propid= $_GET['id'];

	$sql = "SELECT * FROM properti WHERE idproperti='$propid'";
	$hasil = $koneksi->query($sql);
	while ($row = $hasil->fetch_assoc())
	{
?>
	
	<div style="margin-top:2%; margin-left: 10px">
		<center>
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
						<div class='container' style='width:100%;'>
							<?php 
								$sql2 = "SELECT * FROM properti as p inner join gambar_properti as gp ON p.idproperti=gp.idproperti WHERE p.idproperti='$propid'";
								$hasil2 = $koneksi->query($sql2);
								while ($row2 = $hasil2->fetch_assoc())
								{
									echo "<img width='120' src='img/" . $row2['idgambar'] . "." . $row2['extension'] . "'	>";
								}
							?>
						</div>
					</td>
				</tr>
				
				<tr>
					<td width='150px'><a href="index.php"> kembali </a></td>
					<td width='50px'></td>
					<td width='300px'></td>
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
			</center>
	</div>
	
<?php
	}
	// else
	// {
		// echo "<script type='text/javascript'> alert('terjadi kesalahan');</script>";
	// }
?>


