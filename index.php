<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">

    <title>Internshala</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap Select Option css -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-select.min.css">
    <!-- Icons -->
    <link href="assets/plugins/icons/css/icons.css" rel="stylesheet">
    <!-- Animate -->
    <link href="assets/plugins/animate/animate.css" rel="stylesheet">
    <!-- Bootsnav -->
    <link href="assets/plugins/bootstrap/css/bootsnav.css" rel="stylesheet">
	<!-- Nice Select Option css -->
	<link rel="stylesheet" href="assets/plugins/nice-select/css/nice-select.css">
	<!-- Aos Css -->
    <link href="assets/plugins/aos-master/aos.css" rel="stylesheet">
	<!-- Slick Slider -->
    <link href="assets/plugins/slick-slider/slick.css" rel="stylesheet">	
    <!-- Custom style -->
    <link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsiveness.css" rel="stylesheet">
	<!-- Custom Color -->
    <link href="assets/css/skin/default.css" rel="stylesheet">    
</head>

	<body>
		
		<!-- ======================= Start Navigation ===================== -->
		<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
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
							<a href="#" class="dropdown-toggle">Home</a>
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
		<!-- ======================= End Navigation ===================== -->
		
		<!-- ======================= Start Banner ===================== -->
		<div class="main-banner" style="background-image:url(assets/img/slider-1.jpg);">
			<div class="container">
				<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
				
					<div class="caption text-center cl-white">
						<h2><strong>Get ahead.</strong> Get an internship!</h2>
						<p>An Internship portal designed by Albert B George</p>

						<a href="jobs.php" class="btn btn-hiring btn-m mrg-5"><span class="ti-briefcase padd-r-5"></span>Search Jobs</a>
					</div>
					
					<div class="row">
					
						<div class="col-md-4 col-sm-4">
							<div class="cmp-overview">
								<div class="cmp-icon">
									<i class="cmp-i icon-profile-male"></i>
									<i class="fa fa-check"></i>
								</div>
								<div class="cmp-detail">
								<?php
                      				$sql = "SELECT * FROM users WHERE active='1'";
                      				$result = $conn->query($sql);
                      				if($result->num_rows > 0) {
                        				$totalno = $result->num_rows;
                      				} else {
                        				$totalno = 0;
                      				}
                    			?>							
									<h3><?php echo $totalno; ?></h3>
									<span>Active Workers</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="cmp-overview">
								<div class="cmp-icon">
									<i class="cmp-i icon-desktop"></i>
									<i class="fa fa-check"></i>
								</div>
								<div class="cmp-detail">
								<?php
                      				$sql = "SELECT * FROM company WHERE active='1'";
                      				$result = $conn->query($sql);
                      				if($result->num_rows > 0) {
                        				$totalno = $result->num_rows;
                      				} else {
                        				$totalno = 0;
                      				}
                    			?>							
									<h3><?php echo $totalno; ?></h3>
									<span>Companies</span>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="cmp-overview">
								<div class="cmp-icon">
									<i class="cmp-i icon-global"></i>
									<i class="fa fa-check"></i>
								</div>
								<div class="cmp-detail">
								<?php
                      				$sql = "SELECT * FROM job_post";
                      				$result = $conn->query($sql);
                      				if($result->num_rows > 0) {
                        				$totalno = $result->num_rows;
                      				} else {
                        				$totalno = 0;
                      				}
                    			?>							
									<h3><?php echo $totalno; ?></h3>
									<span>Job Offers</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- ======================= End Banner ===================== -->

		<!-- ================= Job start ========================= -->
		<section>
			<div class="container">
			
				<!-- Nav tabs -->
				<div class="heading">
					<h2>Latest Internships</h2>
				</div>

				<div class="tab-content">
					
					<!-- Recent Job -->
					<div class="tab-pane fade in show active" id="recent" role="tabpanel">
						<div class="row">
						
						<?php
						$pictures = array("assets/img/c-1.png", "assets/img/c-2.png", "assets/img/c-3.png", "assets/img/c-4.png", "assets/img/c-5.png", "assets/img/c-6.png", "assets/img/c-7.png", "assets/img/c-8.png", "assets/img/c-9.png");
          				$sql = "SELECT * FROM job_post Order By Rand() Limit 4";
          				$result = $conn->query($sql);
          				if($result->num_rows > 0) {
            				while($row = $result->fetch_assoc()) 
            				{
              					$sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
              					$result1 = $conn->query($sql1);
              					if($result1->num_rows > 0) {
                					while($row1 = $result1->fetch_assoc()) 
                					{
             			?>
							<div class="col-md-3 col-sm-6">
								<div class="grid-job-widget">
								
									<span class="job-type full-type">Full Time</span>
									<div class="job-like">
										<label class="toggler toggler-danger">
											<input type="checkbox">
											<i class="fa fa-heart"></i>
										</label>
									</div>
									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>">
												<img class="img-responsive" src="<?php echo $pictures[array_rand($pictures)]; ?>" alt="">
											</a>
										</div>
										<h5><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a></h5>
										<p class="text-muted"><?php echo $row1['companyname']; ?> | <?php echo $row1['city']; ?> | Experience <?php echo $row['experience']; ?> Years</p>
									</div>
									
									<div class="job-type-grid">
										<a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>" class="btn job-browse-btn btn-radius br-light">Browse Now</a>
									</div>
									
								</div>
							</div>
						<?php
              					}
            				}
            				}
          				}
          				?>
		</section>
		
		<!-- ====================== How It Work ================= -->
		<section class="how-it-works">
			<div class="container">
				
				<div class="row" data-aos="fade-up">
					<div class="col-md-12">
						<div class="heading">
							<h2>How It Works?</h2>
							<p>Post A Job To Tell Us About Your Project. We'll Quickly Match You With The Right Freelancers.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
				
					<div class="col-md-4 col-sm-4">
						<div class="work-process">
							<span class="process-icon bg-danger-light">
								<i class="ti-user"></i>
								<span class="process-count bg-danger cl-white">1</span>
							</span>
							<h4>Create An Account</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="work-process step-2">
							<span class="process-icon bg-success-light">
								<i class="ti-pencil-alt"></i>
								<span class="process-count bg-success cl-white">2</span>
							</span>
							<h4>Find & Hire</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="work-process step-3">
							<span class="process-icon bg-purple-light">
								<i class="ti-thumb-up"></i>
								<span class="process-count bg-purple cl-white">3</span>
							</span>
							<h4>Start Work</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
					
				</div>
				
			</div>
		</section>
		
		<!-- ================= Category start ========================= -->
		<section class="gray-bg">
			<div class="container">
			
				<div class="row" data-aos="fade-up">
					<div class="col-md-12">
						<div class="heading">
							<h2>Browse By Category</h2>
							<p>Each month, more than 7 million Jobhunt turn to website in their search for work, making over<br>160,000 applications every day.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="icon-bargraph" aria-hidden="true"></i>
									<i class="icon-bargraph abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Accounting & Finance</h4></a>
									<p>122 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="icon-tools-2" aria-hidden="true"></i>
									<i class="icon-tools-2 abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Automotive Jobs</h4></a>
									<p>155 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="ti-briefcase" aria-hidden="true"></i>
									<i class="ti-briefcase abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Business</h4></a>
									<p>300 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="ti-ruler-pencil" aria-hidden="true"></i>
									<i class="ti-ruler-pencil abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Education Training</h4></a>
									<p>80 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="ti-heart-broken" aria-hidden="true"></i>
									<i class="ti-heart-broken abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Healthcare</h4></a>
									<p>120 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="icon-wine" aria-hidden="true"></i>
									<i class="icon-wine abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Restaurant & Food</h4></a>
									<p>78 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="ti-world" aria-hidden="true"></i>
									<i class="ti-world abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4>Transportation</h4></a>
									<p>90 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="category-box" data-aos="fade-up">
							<div class="category-desc">
								<div class="category-icon">
									<i class="ti-desktop" aria-hidden="true"></i>
									<i class="ti-desktop abs-icon" aria-hidden="true"></i>
								</div>

								<div class="category-detail category-desc-text">
									<a href="browse-job.html" title=""><h4> Telecommunications</h4></a>
									<p>210 Jobs</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="text-center">
							<a href="#" class="btn theme-btn btn-m">Browse All Category</a>
						</div>
					</div>
					
				</div>
				
			</div>
		</section>
		
		
		
		<!-- ====================== Tag Section ============================ -->
		<section class="tag-sec" style="background:url(assets/img/slider-01.jpg);">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<div class="tag-content">
						<img src="assets/img/s-logo.png" class="img-responsive" alt="" />
						<h2>Hello favourite day</h2>
						<p>Internshala is a dot com business with the heart of dot org. At the core of the idea is the belief that internships, if managed well, can make a positive difference to the student, to the employer, and to the society at large. Hence, the ad-hoc culture surrounding internships in India should and would change. Internshala aims to be the driver of this change.</p>
						<a href="#" class="btn theme-btn btn-radius" title="">EXPLORE US<i class="ti-shift-right"></i></a>
					</div>
				</div>
			</div>
		</section>
		<!-- =================== End Tag Section ==================== -->
		
		<!-- =================== Newsletter ==================== -->
		<section class="newsletter" style="background-image:url(assets/img/trans-bg.png);">
			<div class="container">
				<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
					<div class="newsletter-box text-center">
						<div class="input-group">
							<span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
							<input type="text" class="form-control" placeholder="Enter your Email..">
						</div>
						<button type="button" class="btn theme-btn btn-radius btn-m">subscribe Me!</button>
					</div>
				</div>
			</div>
		</section>
		<!-- =================== End Newsletter ==================== -->
			
			
		
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
							<p>&copy; Copyright 2018 <a href="https://albertbgeorge.github.io">Albert B George</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		
		<!-- Sign Up Window Code -->
		<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" id="myModalLabel1">
					<div class="modal-body">
						<div class="text-center"><img src="assets/img/logo.png" alt="" class="img-responsive"></div>
						
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
							<li class="nav-item active">
								<a class="nav-link" data-toggle="tab" href="#employer" role="tab">
								<i class="ti-user"></i> Employer</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
								<i class="ti-user"></i> Candidate</a>
							</li>
						</ul>
						<!-- Nav tabs -->
							
						<!-- Tab panels -->
						<div class="tab-content">
						
							<!-- Employer Panel 1-->
							<div class="tab-pane fade in show active" id="employer" role="tabpanel">
								<form>
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="4">
											<label for="4"></label>Remember me
										</span>
										<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								
								<div class="log-option"><span>OR</span></div>
								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
					
							</div>
							<!--/.Panel 1-->
							
							<!-- Candidate Panel 2-->
							<div class="tab-pane fade" id="candidate" role="tabpanel">
								<form>
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="44">
											<label for="44"></label>Remember me
										</span>
										<a href="#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								
								<div class="log-option"><span>OR</span></div>
								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
								
							</div>
							<!--/.Panel 2-->
							
						</div>
						<!-- Tab panels -->
					</div>
				</div>
			</div>
		</div>   
		<!-- End Sign Up Window -->
		 
		<!-- =================== START JAVASCRIPT ================== -->
		<!-- Jquery js-->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Bootsnav js-->
		<script src="assets/plugins/bootstrap/js/bootsnav.js"></script>
		<script src="assets/js/viewportchecker.js"></script>
		
		<!-- Slick Slider js-->
		<script src="assets/plugins/slick-slider/slick.js"></script>
		
		<!-- wysihtml5 editor js -->
		<script src="assets/plugins/bootstrap/js/wysihtml5-0.3.0.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap-wysihtml5.js"></script>
		
		<!-- Aos Js -->
		<script src="assets/plugins/aos-master/aos.js"></script>
		
		<!-- Nice Select -->
		<script src="assets/plugins/nice-select/js/jquery.nice-select.min.js"></script>
		
		<!-- Custom Js -->
		<script src="assets/js/custom.js"></script>
		
		<script>
			AOS.init();
		</script>
    </body>

<!-- Mirrored from themezhub.com/demo/live-jobhill-template/job-hill-live-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 May 2018 08:38:17 GMT -->
</html>