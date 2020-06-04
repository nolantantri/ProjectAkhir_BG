<?php require('../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agen Properti | Tambah Properti</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- Javascript untuk Maps -->
  <link rel="stylesheet" href="../css/ol.css" type="text/css">
  <!-- CSS untuk Maps -->
  <script src="../js/ol.js" type="text/javascript"></script>
  <!-- Bootstrap untuk Maps -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php  
  if(isset($_SESSION['nama'])){ 
  ?>
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">  
  <?php 
    }
    else{ 
  ?>
    <nav class="main-header navbar navbar-expand navbar-dark navbar-primary" style="margin-left:0px;">
  <?php 
  }
  ?>
  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
       <?php  
       if(isset($_SESSION['nama'])){ 
       ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       <?php 
       }
       ?> 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link"  href="../proses/form_login.php">
          <i class="far fa-user"></i>
        </a>        
      </li>

  <?php if(isset($_SESSION['nama'])){ ?>
      <li class="nav-item">
        <a class="nav-link"  href="../proses/logout_proses.php">
          <i class="fa fa-sign-out"></i>
        </a>        
      </li>
  <?php } ?>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Agen Properti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
              if (isset($_SESSION['nama']))
              {
                $nama = $_SESSION['nama'];
                echo $nama;
              }
              else
              {
                echo "-";
              }
            ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">
            <a href="form_pointofinterest.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
                 Data Point Of Interest
              </p>
            </a>

          </li>

           <li class="nav-item has-treeview">
            <a href="form_properti.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
                Data Property
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>  
    <!-- /.sidebar -->
  </aside>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <?php if(isset($_SESSION['nama'])){ ?>
    <div class="content-wrapper" >
  <?php }else{ ?>
    <div class="content-wrapper" style="margin-left:0px;">
  <?php }?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark">Tambah Data Properti</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Properti</li>
            </ol>
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div id="map" class="map" style="width: 100%;height:350px;"></div>
        </div>

        <form method="POST" action="../proses/tambah_properti_proses.php" enctype="multipart/form-data">
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
					  <td>Luas Tanah</td>
					  <td>: <input type="text" name="luas_tanah" id="luas_tanah"> meter<sup> 2</sup></td>
					</tr>
					<tr>
					  <td>Luas Bangunan</td>
					  <td>: <input type="text" name="luas_bangunan" id="luas_bangunan"> meter<sup> 2</sup></td>
					</tr>
					<tr>
					  <td>Pasang Point &nbsp</td>
					  <td>
						: <button type="button" class="btn_on" id="btnPolygon" onclick="on_digit('polygon')">DIGIT POLYGON</button>
						
					  </td>
					</tr>
					<tr>
					  	<td>Geom</td>
						<td>: <textarea name="geom_polygon" id="geom_polygon"></textarea></td>
					</tr>
					<tr>
						<td>Upload Gambar</td>
						<td>: <input type="file" name="gambar[]" accept="image/*" multiple></td>
					</tr>
					<tr>
					  <td>Keterangan</td>
					  <td>: <textarea name="keterangan" id="keterangan" style="width: 253px"></textarea></td>
					</tr>
				  </table><br>
			  <button class="btn btn-primary" id="btnSubmit" name="addProperti">TAMBAH DATA</button>
			</div>
		</form>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php  
  if(isset($_SESSION['nama'])){ 
  ?>
    <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="http://ubaya.ac.id">Bussiness Geographics</a>.</strong>
      <br>
      Nolan (160417031) - Antonius Paulus. W (160417064).
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>
  <?php 
    }
    else{ 
  ?>
     <footer class="main-footer" style="margin-left: 0px;">
      <strong>Copyright &copy; 2019 <a href="http://ubaya.ac.id">Bussiness Geographics</a>.</strong>
      <br>
      Nolan (160417031) - Antonius Paulus. W (160417064).
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>
  <?php 
  }
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Script untuk mengatur Maps -->
<script type="text/javascript">

  // Untuk menyimpan format WKT()
  // WKT() : point, line, polygon (dalam bentuk string)
  var format =  new ol.format.WKT();
  var feature;
  var features_polygon=[];
  
  // POINT
  var source_polygon = new ol.source.Vector({
     features: features_polygon
  });
  var contoh_polygon = new ol.layer.Vector({
    source: source_polygon
  });

  // POLYGON
  var layer_polygon = new ol.layer.Vector({
    source: new ol.source.Vector({
      features:features_polygon
    }),
  });


  
  // 1.Penampung Layer Tile OSM
  // Dipanggil untuk di layer[...]
  var osm = new ol.layer.Tile({
    source: new ol.source.OSM(),
    visible: true,
  });

  

  // Membuat Object Pembentuk Peta
  var map = new ol.Map({
    target: 'map',
    // Dengan 1 layer dari OSM atau bing_aerial(label)
    layers: [
      osm,
    
      layer_polygon,
      contoh_polygon,
    ],
    controls:[
      //Define the default controls
      new ol.control.Zoom(),
      new ol.control.Rotate(),
      new ol.control.Attribution(),
      //Define some new controls
      // Untuk menambahkan controls baru pada maps
      new ol.control.ZoomSlider(),
      new ol.control.MousePosition(),
      new ol.control.ScaleLine(),
      new ol.control.OverviewMap()
    ],
    // Dengan view pusat di (0,0) dan Zoom level = 3
    view: new ol.View({
      center: ol.proj.fromLonLat([112.572597,-7.2755979]),
      zoom: 11
    })
  });


  function on_digit(type) {
    var draw = "";
    if(type=="polygon")
    {
      draw = new ol.interaction.Draw({
        source: source_polygon,
        type: 'Polygon'
      });
    }
   
    // Fungsi untuk mengaktifkan kursor digitasi
    map.addInteraction(draw);
      draw.on('drawend', function(evt){
      // Hapus source point dan polygon
      source_polygon.refresh({force:true});
      
      var feature = evt.feature;
      var geom = feature.getGeometry().clone();
      geom = geom.transform('EPSG:3857','EPSG:4326');
      var wkt  = format.writeGeometry(geom);
    
      if(type=="polygon")
      {
        $('#geom_polygon').val(wkt);
      }
    });
  } 

</script>



<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

</body>
</html>


