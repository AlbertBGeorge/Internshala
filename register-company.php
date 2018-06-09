<?php
session_start();

if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
  header("Location: index.php");
  exit();
}

require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Internshala</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index,follow">
    <title>Internshala</title>
    <!-- Bootstrap Core CSS -->
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

<body class="hold-transition skin-green sidebar-mini">
  
  <!-- ======================= Start Navigation ===================== -->
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
              <a href="browse-job.php" class="dropdown-toggle">Jobs</a>
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
    <!-- ======================= End Navigation ===================== -->

  <div class="page-title">
      <div class="container">
        <div class="page-caption">
          <h2>Create Company Profile</h2>
          <p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Register</p>
        </div>
      </div>
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

   <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <h3 class="text-center margin-bottom-20">Start hiring now!</h3>
          <br />
          <form method="post" id="registerCompanies" action="addcompany.php" enctype="multipart/form-data">
            <div class="col-md-6 latest-job ">
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="name" placeholder="Full Name" required>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="companyname" placeholder="Company Name" required>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="website" placeholder="Website">
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <textarea class="form-control input-lg" rows="4" name="aboutme" placeholder="Brief info about your company"></textarea>
              </div>
              <div class="form-group checkbox">
                <label><input type="checkbox" required> I accept terms & conditions</label>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-flat btn-success">Register</button>
              </div>
              <?php 
              //If Company already registered with this email then show error message.
              if(isset($_SESSION['registerError'])) {
                ?>
                <div>
                  <p class="text-center" style="color: red;">Email Already Exists! Choose A Different Email!</p>
                </div>
              <?php
               unset($_SESSION['registerError']); }
              ?> 
              <?php 
              if(isset($_SESSION['uploadError'])) {
                ?>
                <div>
                  <p class="text-center" style="color: red;"><?php echo $_SESSION['uploadError']; ?></p>
                </div>
              <?php
               unset($_SESSION['uploadError']); }
              ?> 
            </div>
            <div class="col-md-6 latest-job ">
              <div class="form-group">
                <input class="form-control input-lg" type="password" name="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="password" name="cpassword" placeholder="Confirm Password" required>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="contactno" placeholder="Phone Number" minlength="10" maxlength="10" autocomplete="off" onkeypress="return validatePhone(event);" required>
              </div>
              <div class="form-group">
                <select class="form-control  input-lg" id="country" name="country" required>
                <option selected="" value="">Select Country</option>
                <?php
                  $sql="SELECT * FROM countries";
                  $result=$conn->query($sql);

                  if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<option value='".$row['name']."' data-id='".$row['id']."'>".$row['name']."</option>";
                    }
                  }
                ?>
                  
                </select>
              </div>  
              <div id="stateDiv" class="form-group" style="display: none;">
                <select class="form-control  input-lg" id="state" name="state" required>
                  <option value="" selected="">Select State</option>
                </select>
              </div>   
              <div id="cityDiv" class="form-group" style="display: none;">
                <select class="form-control  input-lg" id="city" name="city" required>
                  <option selected="">Select City</option>
                </select>
              </div>
              <div class="form-group">
                <label>Attach Company Logo</label>
                <input type="file" name="image" class="form-control input-lg" required>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->

  <!-- ================= footer start ========================= -->
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

<script type="text/javascript">
  function validatePhone(event) {

    //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
    //event.which will return key for mouse events and other events like ctrl alt etc. 
    var key = window.event ? event.keyCode : event.which;

    if(event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
      // 8 means Backspace
      //46 means Delete
      // 37 means left arrow
      // 39 means right arrow
      return true;
    } else if( key < 48 || key > 57 ) {
      // 48-57 is 0-9 numbers on your keyboard.
      return false;
    } else return true;
  }
</script>

<script>
  $("#country").on("change", function() {
    var id = $(this).find(':selected').attr("data-id");
    $("#state").find('option:not(:first)').remove();
    if(id != '') {
      $.post("state.php", {id: id}).done(function(data) {
        $("#state").append(data);
      });
      $('#stateDiv').show();
    } else {
      $('#stateDiv').hide();
      $('#cityDiv').hide();
    }
  });
</script>

<script>
  $("#state").on("change", function() {
    var id = $(this).find(':selected').attr("data-id");
    $("#city").find('option:not(:first)').remove();
    if(id != '') {
      $.post("city.php", {id: id}).done(function(data) {
        $("#city").append(data);
      });
      $('#cityDiv').show();
    } else {
      $('#cityDiv').hide();
    }
  });
</script>
<script>
  $("#registerCompanies").on("submit", function(e) {
    e.preventDefault();
    if( $('#password').val() != $('#cpassword').val() ) {
      $('#passwordError').show();
    } else {
      $(this).unbind('submit').submit();
    }
  });
</script>
</body>
</html>
