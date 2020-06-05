<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Agen Properti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="view/form_pointofinterest.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
                Point Of Interest
              </p>
            </a>
          <!--   <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=form_tambah_pointofinterest" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah POI</p>
                </a>
              </li>
            </ul> -->
          </li>

           <li class="nav-item has-treeview">
            <a href="view/form_properti.php" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>
                Properti
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=form_tambah_properti" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Property</p>
                </a>
              </li>
            </ul> -->
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>  
    <!-- /.sidebar -->
  </aside>