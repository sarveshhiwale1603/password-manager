<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Companies | Password Manager</title>

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
                    <div class="row m-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Companies</h1>

                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Companies</li>
                            </ol>
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

                        <div class="col-md-3 col-sm-6 col-md-3">
                            <div class="card text-white text-center">
                                <div class="card-header border-0 pb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="d-grid">
                                            <!-- <div class="badge bg-success p-2 px-3 rounded">Employee
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <a href="company-details.php" target="_blank">
                                        <img alt="user-image" class="img-fluid rounded-circle card-avatar"
                                            src="dist/img/user1-128x128.jpg" style="height:100px;width:100px;">
                                    </a>
                                    <h4 class="mt-4"><a href="company-details.php" style="color:#6fd943;">User NAME</a>
                                    </h4>
                                    <!-- <h6 class="text-dark mb-0 mb-4">user@example.com</h6> -->
                                </div>
                            </div>
                        </div>



                        <!-- ADD NEW USER -->
                        <div class="col-md-3">
                            <a href="#" class="btn-addnew-project" data-toggle="modal" data-target="#modal-default"
                                data-placement="top" title="Create User">
                                <div class="bg-success proj-add-icon">
                                    <i class="bx bx-plus"></i>
                                </div>
                                <h5 class="mt-4 mb-2 text-dark">New User</h5>
                                <p class="text-muted text-center">Click here to add New User</p>
                            </a>
                        </div>
                        <!-- ./col -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Company</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 form-group">
                                <label class="col-form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required="">
                            </div>
                            <div class="col-6 form-group">
                                <label class="col-form-label" for="email">E-Mail Address</label>
                                <input type="email" class="form-control" id="email" name="email" required="">
                            </div>
                            <div class="col-6 form-group">
                                <label class="col-form-label" for="phone">Phone</label>
                                <input type="tel" class="form-control" maxlength="10" id="phone" name="phone"
                                    required="">
                            </div>
                            <div class="col-6 form-group">
                                <label class="col-form-label" for="job_title">Contact Person Name</label>
                                <input type="text" class="form-control" id="job_title" name="job_title">
                            </div>
                            <div class="col-6 form-group">
                                <label class="col-form-label" for="logo">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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