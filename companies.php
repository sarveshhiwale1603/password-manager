<?php
  
  session_start();

include("include/config.php");
if(isset($_POST['submit1'])){
    
    $company_name=$_POST['company_name'];
    $contact_person=$_POST['contact_person'];
    $mobile_no=$_POST['mobile_no'];
    $whatsapp_no=$_POST['whatsapp_no'];
    $GST_no=$_POST['GST_no'];
    $PAN_no=$_POST['PAN_no'];



    $sql=mysqli_query($conn,"INSERT INTO `companies`(`company_name`,`contact_person`,`mobile_no`,`whatsapp_no`,`GST_no`,`PAN_no`) VALUES ('$company_name','$contact_person','$mobile_no','$whatsapp_no','$GST_no','$PAN_no')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');php</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}




if(isset($_POST['cusEdit'])){
    $id=$_POST['id'];
    $company_name=$_POST['company_name'];
    $contact_person=$_POST['contact_person'];
    $mobile_no=$_POST['mobile_no'];
    $whatsapp_no=$_POST['whatsapp_no'];
    $GST_no=$_POST['GST_no'];
    $PAN_no=$_POST['PAN_no'];
    // $status='available';
    // $type1=$_POST['typeUpdate'];


   
   
    $sql="UPDATE `companies` SET `company_name`='$company_name',`contact_person`='$contact_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`GST_no`='$GST_no',`PAN_no`='$PAN_no' WHERE id='$id.'";

    if (mysqli_query($conn, $sql)){
      header("location:companies.php");
   } else {
      echo "<script> alert('connection failed !'); window.location.href = 'companies.php'</script>";
   }
  }

  if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from companies where id='$id'");
    if($sql=1){
        header("location:companies.php");
    }
    }

?>



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
                        <?php
                                            $sql=mysqli_query($conn,"select * from companies");
                                            $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                        <div class="col-md-3 col-sm-6 col-md-3 my-3">
                            <div class="card text-white text-center h-100">
                                <div class="card-header border-0 pb-0">
                                    <div class="row align-items-center">
                                        <div class="col-1 offset-10">
                                            <div class="p-2 px-3">
                                                <div class="dropdown">
                                                    <a class="" href="#" role="button"
                                                        id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-dark"
                                                    aria-hidden="true"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <button type="button" data-id="<?php echo $row['id'] ?>"
                                                        class="dropdown-item view" href="" data-bs-toggle="modal"
                                                        data-bs-target="#addNewCard">
                                                        <i class="far fa-eye" style="font-size:17px;"></i> View
                                                    </button>
                                                    

                                                    <a type="button" data-id="<?php echo $row['id'] ?>"
                                                        class="dropdown-item edit" data-bs-toggle="modal" href="#"
                                                        data-bs-target="#edit">
                                                        <i class="far fa-edit" style="font-size:17px; style="></i> Edit</a>

                                                        <a class="dropdown-item" href="companies.php?delid=<?php echo $row['id']; ?>"
                                                            type="button"><i class="fa fa-trash-alt text-dark"
                                                    aria-hidden="true"></i> Delete</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                
                                    <a href="company-details.php?id=<?php echo $row['id']; ?>">
                                        <img alt="user-image" class="img-fluid rounded-circle card-avatar"
                                            src="dist/img/user1-128x128.jpg" style="height:100px;width:100px;">
                                    </a>
                                    <h4 class="mt-4"><a href="company-details.php?id=<?php echo $row['id']; ?>"
                                            style="color:#6fd943;">
                                            <?php echo $row['company_name']; ?>
                                        </a>
                                    </h4>
                                    <!-- <h6 class="text-dark mb-0 mb-4">user@example.com</h6> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>



                        <!-- ADD NEW USER -->
                        <div class="col-md-3 my-3">
                            <a href="#" class="btn-addnew-project  h-100" data-toggle="modal"
                                data-target="#modal-default" data-placement="top" title="Create User">
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

                  <!-- view customer -->
                  <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                        <h4 class="modal-title">View Company Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body px-sm-5 mx-50 pb-5 body">

                        </div>

                

                </div>
            </div>
        </div>
        <!--/ view customer -->

        <!-- edit customer -->
        <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                        <h4 class="modal-title">Edit Company Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" action="" method="post">

                        <div class="modal-body px-sm-5 mx-50 pb-5 body1">

                        </div>


                    </form>

                </div>
            </div>
        </div>
        <!--/ Edit customer -->

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Company</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="name">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" required="">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="email">Contact Person</label>
                                    <input type="text" class="form-control" name="contact_person" required="">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="phone">Mobile No</label>
                                    <input type="tel" class="form-control" maxlength="10" name="mobile_no" required="">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="job_title">Whatsapp No</label>
                                    <input type="text" class="form-control" name="whatsapp_no">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="job_title">GST No</label>
                                    <input type="text" class="form-control" name="GST_no">
                                </div>
                                <div class="col-6 form-group">
                                    <label class="col-form-label" for="job_title">PAN No</label>
                                    <input type="text" class="form-control" name="PAN_no">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <?php include"include/footer.php";?>



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


    <script>
        $(document).ready(function () {
            $('.edit').click(function () {
                let dnkk = $(this).data('id');

                $.ajax({
                    url: 'cus2.php',
                    type: 'post',
                    data: {
                        dnkk: dnkk
                    },
                    success: function (response1) {
                        $('.body1').html(response1);
                        $('#editmodal').modal('show');
                    }
                });
            });
        });
    </script>


</body>

</html>