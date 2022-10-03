<?php
session_start();
if(!isset($_SESSION['admin']) == 1) // If session is not set then redirect to Login Page
{
// header("Location:dashboard.php"); 
}
if(!isset($_SESSION['id'])) 
{
 header("Location:login.php"); 
}
include("config.php");
$id=$_SESSION['id'];
  
if(isset($_POST["login"])){
	$password=$_POST["password"];
	$newpassword=$_POST["newpassword"];


	$sql = mysqli_query($conn,"SELECT * FROM login WHERE id='$id'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
	
	$hashpassword=password_hash($newpassword,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `login` SET `password`='$hashpassword' WHERE id='$id'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='login.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>

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
    <link rel="stylesheet" href="dist/css/login.css" />

</head>

<body class="hold-transition sidebar-mini layout-fixed theme-3">

    <div class="wrapper">



        <div class="auth-wrapper auth-v3">
            <div class="bg-auth-side bg-primary"></div>
            <div class="auth-content">

                <div class="card">
                    <div class="row align-items-center text-start">


                        <div class="col-xl-6">

                            <div class="card-body">
                                <div class="">
                                    <h2 class="mb-3 f-w-600">Change Password</h2>
                                </div>
                                <form method="POST">
                                    <!-- <input type="hidden" name="_token" value=""> -->
                                    <div class="">
                                        <div class="form-group mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <label class="form-label">Old Password</label>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control " name="password"
                                                placeholder="enter old password..." required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <label class="form-label">New Password</label>
                                                </div>

                                            </div>

                                            <input id="newpassword" type="password"  placeholder="enter new password..." class="form-control "
                                                name="newpassword" required>
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-block mt-2 login-do-btn"
                                                id="login_button" name="login" >Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-xl-6 img-card-side">
                            <div class="auth-img-content">
                                <img src="dist/img/login.webp" alt=""
                                    class="img-fluid">
                                <h3 class="text-white mb-4 mt-5">“Attention is the new currency”</h3>
                                <p class="text-white">The more effortless the writing looks, the more effort the writer
                                    actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auth-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                Copyright © <b><a href="https://tectignis.in/" style="color:#6fd943;" target="_blank"> Tectignis IT Solutions</a></b> 2022
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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