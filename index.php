<?php
session_start();
include("include/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | CRM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <!-- summernote -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- calendar -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/theme1.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed theme-3">

  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Navbar -->
     <?php include"include/header.php";?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
   <?php include"include/sidebar.php";?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>

            </div><!-- /.col -->

            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <!-- <div class="card"> -->
        <!-- <div class="card-body" style="padding: 0.9rem;"> -->

        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row" id="leads">
            <div class="col-lg-3 col-md-3 col-6">
              <div class="card dash-card">
                <div class="card-body">
                  <div class="theme-avtar bg-success">
                    <i class="fa fa-user-alt"></i>
                  </div>
                  <p class="text-muted text-m mt-4 mb-4">Companies</p>
                  <!-- <?php
                                                $query=mysqli_query($conn,"select * from companies");
                                                 $count1=mysqli_num_rows($query);
                                                  ?> -->
                  <h3 class="mb-0"><?php echo $count1; ?></h3>
                </div>
              </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->

            <div class="col-lg-3 col-md-3 col-6">
              <div class="card dash-card">
                <div class="card-body">
                  <div class="theme-avtar bg-info">
                    <i class="fa fa-user-alt"></i>
                  </div>
                  <p class="text-muted text-m mt-4 mb-4">Companies</p>
                <?php
                                                $query=mysqli_query($conn,"select * from companies");
                                                $count1=mysqli_num_rows($query);
                                                 ?>
                 <h3 class="mb-0"><?php echo $count1; ?></h3>
                </div>
              </div>
            </div>
            <!-- ./col -->


            <!-- ./col -->

            <div class="col-lg-3 col-md-3 col-6">
              <div class="card dash-card">
                <div class="card-body">
                  <div class="theme-avtar bg-warning">
                    <i class="fa fa-user-alt"></i>
                  </div>
                  <p class="text-muted text-m mt-4 mb-4">Companies</p>
                <?php
                                                $query=mysqli_query($conn,"select * from companies");
                                                $count1=mysqli_num_rows($query);
                                                 ?>
                 <h3 class="mb-0"><?php echo $count1; ?></h3>
                </div>
              </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->

            <div class="col-lg-3 col-md-3 col-6">
              <div class="card dash-card">
                <div class="card-body">
                  <div class="theme-avtar bg-danger">
                    <i class="fa fa-user-alt"></i>
                  </div>
                  <p class="text-muted text-m mt-4 mb-4">Companies</p>
                <?php
                                                $query=mysqli_query($conn,"select * from companies");
                                                $count1=mysqli_num_rows($query);
                                                 ?>
                 <h3 class="mb-0"><?php echo $count1; ?></h3>
                </div>
              </div>
            </div>

            <!-- ./col -->
          </div>
          <!-- </div> -->
        </div>
        <!-- </div -->
        <!-- </div> -->
        <!-- /.row -->



        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include"include/footer.php";?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

</body>

</html>