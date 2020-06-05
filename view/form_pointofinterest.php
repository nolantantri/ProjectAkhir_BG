<?php require('../connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agen Properti | Point Of Interest</title>
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
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>  -->

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
            <h2 class="m-0 text-dark">Point Of Interest</h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Point Of Interest</li>
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
                  <th>No.</th>
                  <th>Nama Point</th>
                  <th>Jenis</th>
                  <th>Action</th>
                </tr>
                <?php 
                $sql = "SELECT * FROM point_of_interest";
                $hasil = $koneksi->query($sql);
                $i = 1;
                while ($row= $hasil->fetch_array()) {
                  ?>
                  <tr class="text-center">
                    <td><?php echo $i."."; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jenis_pointofinterest']; ?></td>
                    <td>
                      <?php 
                      echo "<a class='btn btn-warning' href='#'>UBAH</a> &nbsp
                            <a class='btn btn-danger' href='../proses/hapus_pointofinterest_proses.php?id=".$row['idpoi']."'>HAPUS</a>";
                       ?>
                    </td>
                  </tr>
                  <?php 
                  $i++;
                }
                   ?>
              </table><br>
              <a class="btn btn-primary" href="form_tambah_pointofinterest.php">TAMBAH POINT OF INTEREST</a>
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

<script type="text/javascript">
   // Style untuk Mall
    var style_icon_mall =new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5 , 1],
        anchorXunits:'fraction',
        anchorYunits: 'fraction',
        src:'../icons/fashion.png'
      })
    });
    // Style untuk Sekolah
    var style_icon_sekolah =new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5 , 1],
        anchorXunits:'fraction',
        anchorYunits: 'fraction',
        src:'../icons/schools.png'
      })
    });
    // Style untuk Pasar
    var style_icon_pasar =new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5 , 1],
        anchorXunits:'fraction',
        anchorYunits: 'fraction',
        src:'../icons/shopping.png'
      })
    });
   // Style untuk Tempat Wisata
   var style_icon_wisata =new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5 , 1],
        anchorXunits:'fraction',
        anchorYunits: 'fraction',
        src:'../icons/tours.png'
      })
    });
   // Style untuk Tempat Restaurant
   var style_icon_restaurant =new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5 , 1],
        anchorXunits:'fraction',
        anchorYunits: 'fraction',
        src:'../icons/restaurants.png'
      })
    });

    var jenis_icons = function(){
      return function(feature, resolution){
        if (feature.get('jenis') == "mall") 
        {
          return [style_icon_mall]
        }
        else if (feature.get('jenis') == "sekolah")
        {
          return [style_icon_sekolah]
        }
        else if (feature.get('jenis') == "pasar") 
        {
          return [style_icon_pasar]
        }
        else if (feature.get('jenis')== "tempat wisata")
        {
          return [style_icon_wisata]
        }
        else if (feature.get('jenis') == "restoran")
        {
          return [style_icon_restaurant]
        }
      };
    };


  // Untuk menyimpan format WKT()
  // WKT() : point, line, polygon (dalam bentuk string)
  var format =  new ol.format.WKT();
  var feature;
  var features_point_mall=[];
  var features_point_sekolah=[];
  var features_point_pasar=[];
  var features_point_wisata=[];
  var features_point_restoran=[];
  
  //PHP Point 
  <?php 
  $sql = "SELECT * from point_of_interest";
  $result = $koneksi->query($sql);

  $i_mall=0;
  $i_sekolah=0;
  $i_pasar=0;
  $i_wisata=0;
  $i_restoran=0;

  while ($r = $result->fetch_assoc()){
    $jenisTempat= $r['jenis_pointofinterest'];
  ?>
    feature = format.readFeature('<?php echo $r['geom'] ?>',
    {
      dataProjection: 'EPSG:4326',
      featureProjection: 'EPSG:3857'
    });
    feature.set('nama','<?php echo $r['nama'] ?>');
    feature.set('jenispoi','<?php echo $r['jenis_pointofinterest'] ?>');
    feature.set('geom','<?php echo $r['geom'] ?>');

   
  <?php  
    if($jenisTempat == "mall" )
    {
      ?>
      features_point_mall[<?php echo $i_mall; ?>]=feature;
      <?php  
      $i_mall++;
    }
    else if($jenisTempat == "sekolah")
    {
      ?>
      features_point_sekolah[<?php echo $i_sekolah; ?>]=feature;
      <?php  
      $i_sekolah++;
    }
    else if($jenisTempat=="pasar")
    {
      ?>
      features_point_pasar[<?php echo $i_pasar; ?>]=feature;
      <?php  
      $i_pasar++;
    }
    else if($jenisTempat=="tempat wisata")
    {
      ?>
      features_point_wisata[<?php echo $i_wisata; ?>]=feature;
      <?php  
      $i_wisata++;
    }
    else if ($jenisTempat=="restoran")
    {
      ?>
      features_point_restoran[<?php echo $i_restoran; ?>]=feature;
      <?php  
      $i_restoran++;
    }
  }
  ?>


  // POINT MALL
  var source_point_mall = new ol.source.Vector({
     features: features_point_mall
  });
  var contoh_point_mall = new ol.layer.Vector({
    source: source_point_mall,
    style:style_icon_mall
  });

  // POINT SEKOLAH
  var source_point_sekolah = new ol.source.Vector({
     features: features_point_sekolah
  });
  var contoh_point_sekolah = new ol.layer.Vector({
    source: source_point_sekolah,
    style:style_icon_sekolah
  });

  // POINT PASAR
  var source_point_pasar = new ol.source.Vector({
     features: features_point_pasar
  });
  var contoh_point_pasar = new ol.layer.Vector({
    source: source_point_pasar,
    style:style_icon_pasar
  });

  // POINT WISATA
  var source_point_wisata = new ol.source.Vector({
     features: features_point_wisata
  });
  var contoh_point_wisata = new ol.layer.Vector({
    source: source_point_wisata,
    style:style_icon_wisata
  });

  // POINT RESTORAN
  var source_point_restoran = new ol.source.Vector({
     features: features_point_restoran
  });
  var contoh_point_restoran = new ol.layer.Vector({
    source: source_point_restoran,
    style:style_icon_restaurant
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

      contoh_point_mall,
      contoh_point_sekolah,
      contoh_point_pasar,
      contoh_point_wisata,
      contoh_point_restoran,
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
    if(type=="point")
    {
      draw = new ol.interaction.Draw({
        source: source_point,
        type: 'Point'
      });
    }
   
    // Fungsi untuk mengaktifkan kursor digitasi
    map.addInteraction(draw);
      draw.on('drawend', function(evt){
      // Hapus source point dan polygon
      source_point.refresh({force:true});
      
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
