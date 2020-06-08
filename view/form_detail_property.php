<?php
	
	$propid= $_GET['id'];

	$sql = "SELECT * FROM properti WHERE idproperti='$propid'";
	$hasil = $koneksi->query($sql);
	while ($row = $hasil->fetch_assoc())
	{
		
?>
	
	<div style="margin-top:2%;">
		<center> Detail Properti
			<table>
				<tr>
					<td width='150px'>kategori transaksi</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['kategori_transaksi'] ?></td>
				</tr>
				<tr>
					<td width='150px'>jenis properti</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['jenis_properti'] ?></td>
				</tr>
				<tr>
					<td width='150px'>harga</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['harga'] ?></td>
				</tr>
				<tr>
					<td width='150px'>alamat</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['alamat'] ?></td>
				</tr>
				<tr>
					<td width='150px'>luat tanah</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['luastanah'] ?></td>
				</tr>
				<tr>
					<td width='150px'>luat bangunan</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['luasbangunan'] ?></td>
				</tr>
				<tr>
					<td width='150px'>keterangan</td>
					<td width='50px'>:</td>
					<td width='300px'><?php echo $row['keterangan'] ?></td>
				</tr>
				<tr>
					<td width='150px'>gambar</td>
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
				</tr>
			</table>
		</center>
	</div>
<?php
	}
	// else
	// {
		// echo "<script type='text/javascript'> alert('terjadi kesalahan');</script>";
	// }
?>


