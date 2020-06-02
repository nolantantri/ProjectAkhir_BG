<form method="POST" action="proses/tambah_pointofinterest_proses.php">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
	  <!-- <h1 class="display-4">TAMBAH POINT OF INTEREST</h1><br> -->
	  <h2 class="m-0 text-dark">TAMBAH POINT OF INTEREST</h2>
	  <br>
		<table  class="lead text-left">
			<tr>
			  <td>Nama Point</td>
			  <td>: <input type="text" name="nama" id="txbPOI"></td>
			</tr>
			<tr>
			  <td>Jenis</td>
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
				: <button type="button" class="btn_on" id="btnPoin" onclick="on_digit('point')">DIGIT TITIK</button><br>
				<span id="wktPoin" class="lead"> </span>
			  </td>
			</tr>
			<tr>
			  <td>Geom 
				<td>: <input type="text" name="geom_point" id="geom_point"></td>
			</tr>
		  </table><br>
	  <button class="btn btn-primary" id="btnSubmit" name="addpoi">TAMBAH</button>
	</div>
</form>