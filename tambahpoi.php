<form method="POST" action="proses/addpoiProses.php">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
	  <h1 class="display-4">ADD POINT OF INTEREST</h1><br>
		<table  class="lead text-left">
			<tr>
			  <td>Nama </td>
			  <td>: <input type="text" name="nama" id="txbPOI"></td>
			</tr>
			<tr>
			  <td>Jenis </td>
			  <td>: 
				<select id="Jenis_poi" name="jenis_poi">
				  <option value="MALL">Mall</option>
				  <option value="SEKOLAH">Sekolah</option>
				  <option value="PASAR">Pasar</option>
				  <option value="TEMPAT WISATA">Tempat Wisata</option>
				  <option value="RESTORAN">Restoran</option>
				</select>
			  </td>
			</tr>
			<tr>
			  <td>Pasang Point &nbsp</td>
			  <td>
				: <button type="button" class="btn_on" id="btnPoin" onclick="on_digit()">PASANG POIN</button><br>
				<span id="wktPoin" class="lead"> </span>
			  </td>
			</tr>
			<tr>
			  <td>goem 
				<td>: <input type="text" name="geom" id="geom"></td>
			</tr>
		  </table><br>
	  <button class="btn btn-primary" id="btnSubmit" name="addpoi">TAMBAH</button>
	</div>
</form>