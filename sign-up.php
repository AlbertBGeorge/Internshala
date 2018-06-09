<?php 

session_start();

if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
  header("Location: index.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Internshala</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Bootsnav -->
    <link href="assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
    <!-- Icons -->
    <link href="assets/plugins/icons/css/icons.css" rel="stylesheet">
    <!-- Animate -->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet">
  <!-- Nice Select Option css -->
  <link rel="stylesheet" href="assets/plugins/nice-select/css/nice-select.css">
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/responsiveness.css" rel="stylesheet">
  <!-- Custom Color -->
    <link href="assets/css/skin/default.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
    <nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
      <div class="container">
      
        <!-- Start Logo Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="assets/img/internshala_logo.png" class="logo logo-display" alt="">
            <img src="assets/img/internshala_logo.png" class="logo logo-scrolled" alt="">
          </a>

        </div>
        <!-- End Logo Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
        
          <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
          
            <li>
              <a href="index.php" class="dropdown-toggle">Home</a>
            </li>
            <li>
              <a href="jobs.php" class="dropdown-toggle">Jobs</a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle">Candidates</a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle">Company</a>
            </li>
            <li>
              <a href="#" class="dropdown-toggle">About Us</a>
            </li>
            
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
            <li class="br-right"><a href="login.php"><i class="login-icon ti-user"></i>Login</a></li>
            <li class="sign-up"><a class="btn-signup red-btn" href="sign-up.php"><span class="ti-briefcase"></span>Create Account</a></li>
              <?php } else { 
                    if(isset($_SESSION['id_user'])) { 
                  ?>
                  <li>
                    <a href="user/index.php">Dashboard</a>
                  </li>
                  <?php
                  } else if(isset($_SESSION['id_company'])) { 
                  ?>        
                  <li>
                    <a href="company/index.php">Dashboard</a>
                  </li>
                  <?php } ?>
                  <li>
                    <a href="logout.php">Logout</a>
                  </li>
                  <?php } ?>
          </ul>
            
        </div>
        <!-- /.navbar-collapse -->
      </div>   
    </nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20">
          <h1 class="text-center margin-bottom-20">Sign Up</h1>
          <br />
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-yellow padding-5">
              <div class="inner">
                <h3 class="text-center">Candidates</h3>
              </div>
              <a href="register-candidates.php" class="small-box-footer">
                Signup <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-red padding-5">
              <div class="inner">
                <h3 class="text-center">Company</h3>
              </div>
              <a href="register-company.php" class="small-box-footer">
                Signup <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="footer">
      <div class="container">
        
        <!-- Row Start -->
        <div class="row">
        
          <div class="col-md-8 col-sm-8">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <h4>Featured Job</h4>
                <ul>
                  <li><a href="#">Browse Jobs</a></li>
                  <li><a href="#">Premium MBA Jobs</a></li>
                  <li><a href="#">Access Database</a></li>
                  <li><a href="#">Manage Responses</a></li>
                  <li><a href="#">Report a Problem</a></li>
                  <li><a href="#">Mobile Site</a></li>
                  <li><a href="#">Jobs by Skill</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-4">
                <h4>Featured Job</h4>
                <ul>
                  <li><a href="#">Browse Jobs</a></li>
                  <li><a href="#">Premium MBA Jobs</a></li>
                  <li><a href="#">Access Database</a></li>
                  <li><a href="#">Manage Responses</a></li>
                  <li><a href="#">Report a Problem</a></li>
                  <li><a href="#">Mobile Site</a></li>
                  <li><a href="#">Jobs by Skill</a></li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-4">
                <h4>Featured Job</h4>
                <ul>
                  <li><a href="#">Browse Jobs</a></li>
                  <li><a href="#">Premium MBA Jobs</a></li>
                  <li><a href="#">Access Database</a></li>
                  <li><a href="#">Manage Responses</a></li>
                  <li><a href="#">Report a Problem</a></li>
                  <li><a href="#">Mobile Site</a></li>
                  <li><a href="#">Jobs by Skill</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4">
            <h4>Featured Job</h4>
            <!-- Newsletter -->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter Email">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-location-arrow font-20"></i></button>
              </span>
            </div>
            
            <!-- Social Box -->
            <div class="f-social-box">
              <ul>
                <li><a href="#"><i class="fa fa-facebook facebook-cl"></i></a></li>
                <li><a href="https://www.linkedin.com/in/AlbertBGeorge"><i class="fa fa-linkedin linkedin-cl"></i></a></li>
                <li><a href="https://www.twitter.com/AlbertBGeorge"><i class="fa fa-twitter twitter-cl"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest pinterest-cl"></i></a></li>
                <li><a href="https://instagram.com/albertbgeorge"><i class="fa fa-instagram instagram-cl"></i></a></li>
              </ul>
            </div>
            
            <!-- App Links -->
            <div class="f-app-box">
              <ul>
                <li><a href="#"><i class="fa fa-apple"></i>App Store</a></li>
                <li><a href="#"><i class="fa fa-android"></i>Play Store</a></li>
              </ul>
            </div>
            
          </div>
          
        </div>
        
        <!-- Row Start -->
        <div class="row">
          <div class="col-md-12">
            <div class="copyright text-center">
              <p>&copy; Copyright 2018 <a href="albertbgeorge.github.io">Albert B George</a></p>
            </div>
          </div>
        </div>
        
      </div>
    </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
