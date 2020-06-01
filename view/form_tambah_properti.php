<form method="POST" action="proses/tambah_properti_proses.php">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
	  <!-- <h1 class="display-4">TAMBAH POINT OF INTEREST</h1><br> -->
	  <h2 class="m-0 text-dark">TAMBAH PROPERTI</h2>
	  <br>
		<table  class="lead text-left">
			<tr>
			  <td>Kategori Transaksi</td>
			  <td>: 
				<select id="kategori_transaksi" name="kategori_transaksi">
				  <option value="JUAL">Jual</option>
				  <option value="BELI">Beli</option>
				</select> 
			  </td>
			</tr>
			<tr>
			  <td>Jenis Properti</td>
			  <td>: 
				<select id="jenis_properti" name="jenis_properti">
				  <option value="RUMAH">Rumah</option>
				  <option value="RUKO">Ruko</option>
				  <option value="GUDANG">Gudang</option>
				  <option value="KANTOR">Kantor</option>
				  <option value="TANAH">Tanah</option>
				</select> 
			  </td>
			</tr>
			<tr>
			  <td>Harga</td>
			  <td>: Rp. <input type="text" name="harga" id="harga" style="width: 224px"></td>
			</tr>
			<tr>
			  <td>Alamat</td>
			  <td>: <input type="text" name="alamat" id="alamat"></td>
			</tr>
			<tr>
			  <td>Kelurahan</td>
			  <td>: <input type="text" name="kelurahan" id="kelurahan"></td>
			</tr>
			<tr>
			  <td>Kecamatan</td>
			  <td>: <input type="text" name="kecamatan" id="kecamatan"></td>
			</tr>
			<tr>
			  <td>Luas Tanah</td>
			  <td>: <input type="text" name="luas_tanah" id="luas_tanah"> m2</td>
			</tr>
			<tr>
			  <td>Luas Bangunan</td>
			  <td>: <input type="text" name="luas_bangunan" id="luas_bangunan"> m2</td>
			</tr>
			<tr>
			  <td>Pasang Point &nbsp</td>
			  <td>
				: <button type="button" class="btn_on" id="btnPolygon" onclick="on_digit('polygon')">DIGIT POLYGON</button>
				
			  </td>
			</tr>
			<tr>
			  <td>Geom 
				<td>: <input type="text" name="geom" id="geom"></td>
			</tr>
			<tr>
			  <td>Keterangan</td>
			  <td>: <textarea name="keterangan" id="keterangan" style="width: 253px"></textarea></td>
			</tr>
		  </table><br>
	  <button class="btn btn-primary" id="btnSubmit" name="addProperti">TAMBAH</button>
	</div>
</form>