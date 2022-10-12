<?php
  
session_start();

$clientId=$_GET['id'];
include("include/config.php");
if(isset($_POST['add-category'])){
    
    $socialMedia=$_POST['socialMedia'];
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql=mysqli_query($conn,"INSERT INTO `company_details`(`company_id`,`category`,`username`,`password`) VALUES ('$clientId','$socialMedia','$username','$password')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');php</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}
 



if(isset($_POST['cusEdit3'])){
    $id1=$_POST['id12'];
    $username=$_POST['username'];
    $password=$_POST['password'];


   
   
    $sql="UPDATE `company_details` SET `username`='$username',`password`='$password' WHERE id='$id1.'";

    if (mysqli_query($conn, $sql)){
      header("location:company-details.php?id=".$clientId."");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='company-details.php?id=".$clientId."'</script>";
   }
  }

  if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from company_details where id='$id'");
    if($sql=1){
        header("location:company-details.php?id=".$clientId."");    }
    }
?>
<?php
    if(isset($_POST['deletepassword'])){
        $checkPassword1=$_POST['checkPassword1'];
        $id=$_POST['id1'];
        $sql=mysqli_query($conn,"select * from universal_password");
        while ($row=mysqli_fetch_array($sql)){ 
          $rowPass=$row['password'];
            $pass=password_verify($checkPassword1,$rowPass);
            if($pass==1){
                $sql=mysqli_query($conn,"delete from company_details where id='$id'");
                header("location:company-details.php?id=".$clientId."");
            }
            else{
                echo"<script>alert('invalid Password');</script>";
            }
    
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
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- calendar -->
    <link rel="stylesheet" href="dist/css/theme1.css" />

    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #d3d9df;
            border-radius: 10px;
            padding-bottom: 28px !important;
            box-shadow: none;
        }

        .select2-selection--single:focus {
            outline: none !important;
            border-color: #6fd943 !important;
            box-shadow: 0 0 4px #9cdd80 !important;
        }

        /* .select2-container--default.select2-container--focus .select2-selection--multiple,
    .select2-container--default.select2-container--focus .select2-selection--single {
        border-color: #d3d9df;
    } */

.hidetext { -webkit-text-security: disc; /* Default */ }
    </style>
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
                    <?php
                                            $sql=mysqli_query($conn,"select * from companies where id='$clientId'");
                                            // $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $row['company_name']; ?></h1>

                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="companies.php">Companies</a></li>
                                <li class="breadcrumb-item"><?php echo $row['company_name']; ?></li>
                            </ol>
                        </div><!-- /.col -->
                        <?php }  ?>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Social Media</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post">
                                <div class="row">
                                    <div class="col-6 form-group" id="socialMediaDiv">
                                        <label class="col-form-label" for="socialMedia">Select Social Media</label>
                                        <select class="select2 form-control" id="socialMedia" name="socialMedia"
                                            required>
                                            <option value="" disabled>Select</option>
                                            <?php
                                            $sql=mysqli_query($conn,"select * from account_category");
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>

                                        <?php }  ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 form-group">
                                        <label class="col-form-label" for="name">Username</label>
                                        <input type="text" class="form-control" id="name" name="username"
                                            placeholder="enter username..." required>
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="col-form-label" for="phone">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="enter password..." required>
                                    </div>
                                </div>
                                <div class="justify-content-center row">
                                    <button type="submit" name="add-category" class="btn px-5 btn-primary">Add</button>
                                </div>
                            </form>
                            <!-- /.card-body -->
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Accounts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Social Media Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $sql=mysqli_query($conn,"select *,company_details.id as id from companies inner join company_details on companies.id=company_details.company_id inner join account_category on company_details.category=account_category.id where company_details.company_id='$clientId';");
                                            $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $row['category_name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><a data-toggle="modal" class="view_id" data-id="<?php echo $row['id']; ?>"><i class="ml-1 text-dark far fa-eye"></i></a></td>
                                            <td><a type="button" data-id="<?php echo $row['id'] ?>"
                                                        class="edit" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><i class="ml-1 text-dark far fa-edit"></i></a>

                                            <a data-toggle="modal" class="delete_id" data-id="<?php echo $row['id']; ?>"><i class="ml-1 text-dark fa fa-trash-alt"></i></a></td>
                                        </tr>
                                        <?php $count++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">View Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="hidden" name="id" id="idShow" >
                                    <label class="col-form-label" for="name">Enter Password</label>
                                    <input type="password" class="form-control" name="checkPassword" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary sub" data-toggle="modal"  name="checkPasswordBtn">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="hidden" name="id1" id="deleteid" >
                                    <label class="col-form-label" for="name">Enter Password</label>
                                    <input type="password" class="form-control" name="checkPassword1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary sub" data-toggle="modal"  name="deletepassword">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <div class="modal fade" id="modal-default1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Social Media Name</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label class="col-form-label" for="name">Password</label>
                                    <input type="text" id="show_pass" class="form-control" name="checkPassword" required="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

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

        <?php include"include/footer.php";?>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>


// function displayDivDemo(elementValue) {
//       document.getElementById('otherMedia').style.display = elementValue.value == 'Other' ? 'block' : 'none';
//    }    
    // var socialMedia = document.getElementById('socialMedia');
    // var otherMedia = document.getElementById('otherMedia');


    // function socialMediaAdd() {
    //     if (socialMedia.value === 'Other') {

    //         otherMedia.removeAttribute("style");


    //         console.log(socialMedia.value);
    //     }

    // }
    </script>

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

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <script src="plugins/select2/js/select2.full.min.js"></script>

<script>
$(document).on('click','.view_id',function(){
    let id=$(this).data('id');
    $('#idShow').val(id);
    $('#modal-default').modal('show');
})
$(document).on('click','.delete_id',function(){
    let id=$(this).data('id');
    $('#deleteid').val(id);
    $('#modal-delete').modal('show');
})

</script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                // "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>



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



    <?php
    if(isset($_POST['checkPasswordBtn'])){
        $checkPassword=$_POST['checkPassword'];
    $id=$_POST['id'];
    $comsql=mysqli_query($conn,"select * from company_details where id='$id'");
    $arr=mysqli_fetch_array($comsql);
        $sql=mysqli_query($conn,"select * from universal_password");
        while ($row=mysqli_fetch_array($sql)){ 
          $rowPass=$row['password'];
            $pass=password_verify($checkPassword,$rowPass);
            if($pass==1){
                echo"<script>$('#modal-default1').modal('show');$('#show_pass').val('".$arr['password']."');</script>";
            }
            else{
                echo"<script>alert('invalid Password');</script>";
            }
    
        }
    }
    ?>


</body>

</html>