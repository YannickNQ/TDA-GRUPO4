<?php
if(!isset($subtitle))
  $subtitle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <link rel="stylesheet" href="<?php echo base_url('/public/assets/template_extras/css/font_sansPro.css') ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="<?php echo base_url('/public/assets/template_extras/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/dist/css/adminlte.min.css">
  <!-- DataTable -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/public/plugins/select2/css/select2.min.css">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="<?php echo base_url('/public/sweetalert2/dist/sweetalert2.min.css') ?>">
  <!-- Bootstrap Switch -->
  <link rel="stylesheet" href="<?php echo base_url('/public/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') ?>">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-lightblue">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-flex align-items-center mx-2">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"> Modo Oscuro</label>
          </div>
        </li>
    <script type="text/javascript">
    // $(document).ready(function(){
    //   $('.custom-switch.custom-control').click(function(){
    //     alert("ara");
    //   });
    // });
    </script>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a href="<?php echo base_url('/Login/cerrarSesion')?>" class="btn btn-danger">Cerrar Sesion <i class="fas fa-sign-out-alt"></i></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
    <aside class="main-sidebar elevation-4 sidebar-light-lightblue">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo base_url() ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TDA GRUPO - 04</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo session('username')?></a>
          </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
            <!-- <div class="nav-header">UNIVERSIDAD</div> -->
            <li class="nav-item <?php echo ($title == "Docentes")?"menu-open":"" ?>" title="docente">
              <!-- <a href="<?php echo base_url('/Docente') ?>" class="nav-link"> -->
              <a href="<?php echo base_url('/Docente') ?>" class='nav-link <?php echo ($title == "Docentes")?"active":"" ?>'>
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  Docentes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('/Docente/SimpleTable') ?>" class="nav-link <?php echo ($subtitle == "SimpleTable" && $title == "Docentes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tabla Simple</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('/Docente/DataTable') ?>" class="nav-link <?php echo ($subtitle == "DataTable" && $title == "Docentes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Table</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('/Docente/Select2') ?>" class="nav-link <?php echo ($subtitle == "Select2" && $title == "Docentes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Select 2</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /. Docentes -->
            <!-- Estudiantes -->
            <li class="nav-item <?php echo ($title == "Estudiantes")?"menu-open":"" ?>" title="estudiante">
              <a href="<?php echo base_url()?>/Estudiante" class="nav-link <?php echo ($title == "Estudiantes")?"active":"" ?>">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>Estudiantes<i class="fas fa-angle-left right"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url()?>/Estudiante/SimpleTable" class="nav-link <?php echo ($subtitle == "SimpleTable" && $title == "Estudiantes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tabla Simple</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url()?>/Estudiante/DataTable" class="nav-link <?php echo ($subtitle == "DataTable" && $title == "Estudiantes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DataTables</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url()?>/Estudiante/Select2" class="nav-link <?php echo ($subtitle == "Select2" && $title == "Estudiantes")?"active":"" ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Select 2</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /. Estudiantes -->
            <!-- Users -->
            <li class="nav-header">USUARIOS</li>
            <li class="nav-item">
              <a href="<?php echo base_url('/Usuario/Index')?>" class="nav-link <?php echo ($title == "Usuarios")?"active":"" ?>">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>
                  Ver Usuarios
                  <span class="badge badge-info right"><?php echo (isset($cant)) ? $cant : 6 ?></span>
                </p>
              </a>
            </li>
          <!-- /.nav-item -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- ./wrapper -->
    <div class="content-wrapper pb-3">
      <?php echo $this->renderSection('content') ?>
    </div>
    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021-2022 <a href="https://cdn.jwplayer.com/players/vW9mB8fi-QGPbMZjv.html">Adoradores del Rey</a>.</strong>
      Todos los derechos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>UNAP</b>
      </div>
    </footer>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>/public/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="<?php echo base_url() ?>/public/dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <!-- <script src="<?php echo base_url() ?>/public/plugins/chart.js/Chart.min.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>/public/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() ?>/public/dist/js/pages/dashboard3.js"></script>

  <!-- Nuestros Scripts -->
  <script src="<?php echo base_url() ?>/public/assets/my_scripts/for_tables.js"></script>
  <script src="<?php echo base_url() ?>/public/assets/my_scripts/sidebar_template.js"></script>

  <!-- Select2 -->
  <script src="<?php echo base_url() ?>/public/plugins/select2/js/select2.min.js"></script>

  <!-- SweetAlert -->
  <script src="<?php echo base_url('/public/sweetalert2/dist/sweetalert2.min.js') ?>"></script>

  <!-- Bootstrap Switch -->
  <script src="<?php echo base_url('/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>

  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url('/public/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/jszip/jszip.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/pdfmake/pdfmake.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/pdfmake/vfs_fonts.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

  <script src="<?php echo base_url('/public/DataTable/buttons.html5.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/DataTable/dataTables.buttons.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/DataTable/jszip.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/DataTable/pdfmake.min.js') ?>"></script>
  <script src="<?php echo base_url('/public/DataTable/vfs_fonts.js') ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#DT").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#CD .col-md-6:eq(0)');

      omms_a = true;
      $('#customSwitch1').click(function(){
        if(omms_a){
          $('body').addClass('dark-mode');
          $('body').addClass('accent-olive');
          // $('nav.main-header').removeClass("navbar-white");
          $('nav.main-header').removeClass("navbar-light");
          $('nav.main-header').addClass('navbar-dark navbar-gray-dark');
          $('aside.main-sidebar').removeClass('sidebar-light-lightblue');
          $('aside.main-sidebar').addClass('sidebar-dark-olive');
          omms_a = false;
        } else {
          $('body').removeClass('dark-mode');
          $('body').removeClass('accent-olive');
          $('nav.main-header').removeClass('navbar-dark navbar-gray-dark');
          // $('nav.main-header').addClass("navbar-white");
          $('nav.main-header').addClass("navbar-light");
          $('aside.main-sidebar').removeClass('sidebar-dark-olive');
          $('aside.main-sidebar').addClass('sidebar-light-lightblue');
          omms_a = true;
        }
      });
    });
    </script>
</body>

</html>