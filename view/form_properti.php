<?php require('../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agen Properti | Properti</title>
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
   <!--  <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

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
                Point Of Interest
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="form_properti.php" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>
                Properti
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
            <h2 class="m-0 text-dark">Properti</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Properti</li>
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
           <div class="tabledata" style="width: 100%;text-align: center;">
               <table class="table" width="100%">
                <tr class="text-center">
                  <th>Id</th>
                  <th>Kategori</th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Alamat</th>
                  <th>Luas Tanah</th>
                  <th>Luas Bangunan</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                <?php 
                function rupiah($angka)
                {
                  $hasilrupiah ="Rp ".number_format($angka,2,',','.');
                  return $hasilrupiah;
                }


                $sql = "SELECT * FROM properti";
                $hasil = $koneksi->query($sql);
                $i=1;

                while ($row= $hasil->fetch_array()) {
                  ?>
                  <tr class="text-center">
                    <td><?php echo $i."."; ?></td>
                    <td><?php echo $row['kategori_transaksi']; ?></td>
                    <td><?php echo $row['jenis_properti']; ?></td>
                    <td><?php echo rupiah($row['harga']); ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['luastanah']." m<sup>2</sup>"; ?></td>
                    <td><?php echo $row['luasbangunan']." m<sup>2</sup>"; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td>
                      <?php 
                      echo "<a class='btn btn-warning' href='form_ubah_properti.php?id=".$row['idproperti']."'>UBAH</a> &nbsp
                            <a class='btn btn-danger' href='../proses/hapus_properti_proses.php?id=".$row['idproperti']."'>HAPUS</a>";
                       ?>
                    </td>
                  </tr>
                  <?php 
                  $i++;
                }
                   ?>
              </table><br>
              <a class="btn btn-primary" href="form_tambah_properti.php">TAMBAH PROPERTI</a>
            </div>

          <div id="maps_option" style="margin-left: 20px;">
            <p style="font-weight: bold;">Tampilan Peta : &nbsp
            <select id="pilih" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" onchange="pilih_bg(this.value)">
              <option value="osm">OpenStreet Map</option>
              <option value="bing_aerialwithlabels">Bing Aerial (labels)</option>
            </select>
            </p>
          </div>

          <div id="map" class="map" style="width: 100%;height:350px;"></div>

          <!-- TEMPAT DATA -->
        </div>
    
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      if (file_exists('view/' . $page . '.php'))  
      {
        include('view/' . $page . '.php');
      }
    ?>
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

<!--SCRIPT MAPS -->
<script type="text/javascript">

  // SETTINGS STYLE WARNA
  // untuk garis berwarna hitam putus-putus
  var stroke_black = new ol.style.Stroke({
    color:'black',
    width:1
  }); 
  
  // Warna merah tranparant 0.3 
  var fill_red = new ol.style.Fill({
    color:'red',
  });
  // Warna hijau tranparant 0.3
  var fill_green = new ol.style.Fill({
    color:'green'
  });
  // Warna biru tranparant 0.3
  var fill_blue = new ol.style.Fill({
    color:'blue'
  });
  // Warna orange tranparant 0.3
  var fill_orange = new ol.style.Fill({
    color:'orange'
  });
  // Warna abu-abu tranparant 0.3
  var fill_grey = new ol.style.Fill({
    color:'grey'
  });

  // SETTINGS STYLE JENIS PROPERTI
  // Warna untuk jenis bangunan RUMAH
  var style_rumah = new ol.style.Style({
    fill: fill_red,
    stroke: stroke_black,
  });
  // Warna untuk jenis bangunan RUKO
  var style_ruko = new ol.style.Style({
    fill: fill_green,
    stroke: stroke_black,
  });
  // Warna untuk jenis bangunan GUDANG
  var style_gudang = new ol.style.Style({
    fill: fill_blue,
    stroke: stroke_black,
  });
  // Warna untuk jenis bangunan KANTOR
  var style_kantor = new ol.style.Style({
    fill: fill_orange,
    stroke: stroke_black,
  });
  // Warna untuk jenis bangunan TANAH
  var style_tanah = new ol.style.Style({
    fill: fill_grey,
    stroke: stroke_black,
  });



  // Untuk menyimpan format WKT()
  // WKT() : point, line, polygon (dalam bentuk string)
  var format =  new ol.format.WKT();
  var feature;
  var features_polygon_rumah=[];
  var features_polygon_ruko=[];
  var features_polygon_gudang=[];
  var features_polygon_kantor=[];
  var features_polygon_tanah=[];
  
  // PHP POLYGON
  <?php 
    $sql = "SELECT p.idproperti, p.jenis_properti, p.harga, p.alamat, p.geom, g.idgambar AS idGambar, 
            g.extension AS extension 
            FROM properti p LEFT JOIN gambar_properti g ON p.idproperti = g.idproperti";
    $result = $koneksi->query($sql);

    $i_rumah=0;
    $i_ruko=0;
    $i_gudang=0;
    $i_kantor=0;
    $i_tanah=0;

    while($r = $result->fetch_assoc()) {  
      $jenisBangunan = $r['jenis_properti'];

      if($r['geom'] != "")
      {
        ?>
          feature = format.readFeature('<?php echo $r['geom']; ?>', 
          {
            dataProjection: 'EPSG:4326',
            featureProjection: 'EPSG:3857'
          });
          feature.set('id','<?php echo $r['idproperti']; ?>');
          feature.set('jenis','<?php echo $r['jenis_properti']; ?>');
          feature.set('harga','<?php echo $r['harga']; ?>');
          feature.set('alamat','<?php echo $r['alamat']; ?>');
          feature.set('gambar','<?php echo $r['idGambar'].".".$r['extension']; ?>');
            
        <?php
          if($jenisBangunan == "rumah")
          {
          ?>
            features_polygon_rumah[<?php echo $i_rumah; ?>] =feature;
            <?php 
            $i_rumah++; 
          }
          elseif($jenisBangunan=="ruko")
          {
          ?>
            features_polygon_ruko[<?php echo $i_ruko; ?>]=feature;
            <?php  
            $i_ruko++;
          }
          elseif($jenisBangunan=="gudang")
          {
          ?>
            features_polygon_gudang[<?php echo $i_gudang; ?>] =feature;
            <?php
            $i_gudang++;  
          }
          elseif($jenisBangunan=="kantor")
          {
          ?>
            features_polygon_tanah[<?php echo $i_kantor; ?>]=feature;
            <?php  
            $i_kantor++;
          }
          elseif ($jenisBangunan=="tanah")
          {
          ?>
            features_polygon_tanah[<?php echo $i_tanah; ?>]=feature;
            <?php 
            $i_tanah++;
          }
        }
      }
    
    
    ?>


 
  // POLYGON RUMAH
  var source_polygon_rumah = new ol.source.Vector({
    features: features_polygon_rumah
  });
  var layer_polygon_rumah = new ol.layer.Vector({
    source: source_polygon_rumah,
    style:style_rumah,
    opacity:0.3
  });
  // POLYGON RUKO
  var source_polygon_ruko = new ol.source.Vector({
    features: features_polygon_ruko
  });
  var layer_polygon_ruko = new ol.layer.Vector({
    source: source_polygon_ruko,
    style:style_ruko,
    opacity:0.3
  });
  // POLYGON GUDANG
  var source_polygon_gudang = new ol.source.Vector({
    features: features_polygon_gudang
  });
  var layer_polygon_gudang = new ol.layer.Vector({
    source: source_polygon_gudang,
    style:style_gudang,
    opacity:0.3
  });
  // POLYGON KANTOR
  var source_polygon_kantor = new ol.source.Vector({
    features: features_polygon_kantor
  });
  var layer_polygon_kantor = new ol.layer.Vector({
    source: source_polygon_kantor,
    style:style_kantor,
    opacity:0.3
  });
  // POLYGON TANAH
  var source_polygon_tanah = new ol.source.Vector({
    features: features_polygon_tanah
  });
  var layer_polygon_tanah = new ol.layer.Vector({
    source: source_polygon_tanah,
    style:style_tanah,
    opacity:0.3
  });


  // 1.Penampung source bingmaps
  var sourceBingMaps_AerialWithLabels = new ol.source.BingMaps({
    key: 'AjQ2yJ1-i-j_WMmtyTrjaZz-3WdMb2Leh_mxe9-YBNKk_mz1cjRC7-8ILM7WUVEu',
    imagerySet: 'AerialWithLabels',
  });
  // Variabel untuk menampung Layer Tile Bing Map
  // Dipanggil untuk di layer[...]
  var bing_AerialWithLabels = new ol.layer.Tile({
    preload: Infinity,
    source: sourceBingMaps_AerialWithLabels,
    visible: false,
  });

  // 2.Penampung Layer Tile OSM
  // Dipanggil untuk di layer[...]
  var osm = new ol.layer.Tile({
    source: new ol.source.OSM(),
    visible: true,
  });

  // Function untuk aksi yang dilakukan ketika user melakukan pilihan pada combobox yang sebelumnya
  function pilih_bg(pilih){
    if(pilih=='osm'){
      osm.setVisible(true);
      bing_AerialWithLabels.setVisible(false);
    }
    if(pilih=='bing_aerialwithlabels'){
      osm.setVisible(false);
      bing_AerialWithLabels.setVisible(true);
    }
  }

  // Membuat Object Pembentuk Peta
  var map = new ol.Map({
    target: 'map',
    // Dengan 1 layer dari OSM atau bing_aerial(label)
    layers: [
      osm,
      bing_AerialWithLabels,

      layer_polygon_rumah,
      layer_polygon_ruko,
      layer_polygon_gudang,
      layer_polygon_kantor,
      layer_polygon_tanah,
      

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
    
      if(type=="point")
      {
        $('#geom_point').val(wkt);
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
