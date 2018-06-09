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

	</head>
	
	<body>
		
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
		
		<!-- ======================= Page Title ===================== -->
		<div class="page-title">
			<div class="container">
				<div class="page-caption">
					<h2>Browse Internships</h2>
					<p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Browse Internships</p>
				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
		
		<!-- ====================== Start Job Detail 2 ================ -->
		<section>
			<div class="container">
				
				<!-- row -->
				<div class="row">
					<!-- Start Sidebar -->
					<div class="col-md-3 col-sm-4">
					
						<div class="widget-boxed padd-bot-0">
							<div class="widget-boxed-body">
								<div class="search_widget_job">
									<div class="field_w_search">
										<input type="text" class="form-control" placeholder="Search Keywords">
									</div>
									<div class="field_w_search">
										<input type="text" class="form-control" placeholder="All Locations">
									</div>
								</div>
							</div>
						</div>
						
						<div class="widget-boxed padd-bot-0">
							<div class="widget-boxed-header">
								<h4>Offerd Salary</h4>
							</div>
							<div class="widget-boxed-body">
								<div class="side-list no-border">
									<ul>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="1">
												<label for="1"></label>
											</span>
											Under ₹5,000
											<span class="pull-right">102</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="2">
												<label for="2"></label>
											</span>
											₹5,000 - ₹10,000
											<span class="pull-right">78</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="3">
												<label for="3"></label>
											</span>
											₹10,000 Above
											<span class="pull-right">12</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="widget-boxed padd-bot-0">
							<div class="widget-boxed-header">
								<h4>Internship Type</h4>
							</div>
							<div class="widget-boxed-body">
								<div class="side-list no-border">
									<ul>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="a1">
												<label for="a1"></label>
											</span>
											Full Time
											<span class="pull-right">102</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="b1">
												<label for="b1"></label>
											</span>
											Part Time
											<span class="pull-right">78</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="c1">
												<label for="c1"></label>
											</span>
											Work from home
											<span class="pull-right">12</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="widget-boxed padd-bot-0">
							<div class="widget-boxed-header br-0">
								<h4>Designation <a href="#designation" data-toggle="collapse"><i class="pull-right ti-plus" aria-hidden="true"></i></a></h4>
							</div>
							<div class="widget-boxed-body collapse" id="designation">
								<div class="side-list no-border">
									<ul>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="a">
												<label for="a"></label>
											</span>
											Web Designer
											<span class="pull-right">102</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="b">
												<label for="b"></label>
											</span>
											Php Developer
											<span class="pull-right">78</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="c">
												<label for="c"></label>
											</span>
											Project Manager
											<span class="pull-right">12</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="d">
												<label for="d"></label>
											</span>
											Human Resource
											<span class="pull-right">85</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="e">
												<label for="e"></label>
											</span>
											CMS Developer
											<span class="pull-right">307</span>
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="f">
												<label for="f"></label>
											</span>
											App Developer
											<span class="pull-right">256</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="widget-boxed padd-bot-0">
							<div class="widget-boxed-header br-0">
								<h4>Experince <a href="#experince" data-toggle="collapse"><i class="pull-right ti-plus" aria-hidden="true"></i></a></h4>
							</div>
							<div class="widget-boxed-body collapse" id="experince">
								<div class="side-list no-border">
									<ul>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="11">
												<label for="11"></label>
											</span>
											1Year To 2Year
										</li>
										<li>
											<span class="custom-checkbox">
												<input type="checkbox" id="21">
												<label for="21"></label>
											</span>
											2Year To 3Year
										</li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
					
					<!-- Start Job List -->
					<div class="col-md-9 col-sm-8">
						
						<div class="row mrg-bot-20">
							<div class="col-sm-5">
								<?php
                      				$sql = "SELECT * FROM job_post";
                      				$result = $conn->query($sql);
                      				if($result->num_rows > 0) {
                        				$totalno = $result->num_rows;
                      				} else {
                        				$totalno = 0;
                      				}
                    			?>
								<h4><?php echo $totalno; ?> Internships</h4>
							</div>
							
							<div class="col-sm-7">
								
								<div class="fl-right">
									<div class="search-wide">
										<h5>Short By</h5>
									</div>
									
									<div class="search-wide full">
										<select class="wide form-control">
											<option value="1">Most Recent</option>
											<option value="2">Most Viewed</option>
											<option value="4">Most Search</option>
										</select>
									</div>
									
									<div class="search-wide full">
										<select class="wide form-control">
											<option>10 Per Page</option>
											<option value="1">20 Per Page</option>
											<option value="2">30 Per Page</option>
											<option value="4">50 Per Page</option>
										</select>
									</div>
								</div>
								
							</div>
						</div>

						<?php
						$pictures = array("assets/img/c-1.png", "assets/img/c-2.png", "assets/img/c-3.png", "assets/img/c-4.png", "assets/img/c-5.png", "assets/img/c-6.png", "assets/img/c-7.png", "assets/img/c-8.png", "assets/img/c-9.png");
						$skill = array("html", "css", "java", "php", "django", "javascript", "bootstrap", "mysql", "node js", "ruby", "python", "c++", "c#");
						$type = array("Full Time", "Part Time", "Work From Home");
          				$sql = "SELECT * FROM job_post Order By Rand() Limit 10";
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
				
						<!-- Single Verticle job -->
						<div class="job-verticle-list">
							<div class="vertical-job-card">
								<div class="vertical-job-header">
									<div class="vrt-job-cmp-logo">
										<a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><img src="<?php echo $pictures[array_rand($pictures)]; ?>" class="img-responsive" alt="" /></a>
									</div>
									<h4><a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row1['companyname']; ?></a></h4>
									<span class="com-tagline"><?php echo $row['jobtitle']; ?></span>
								</div>
								<div class="vertical-job-body">
									<div class="row">
										<div class="col-md-9 col-sm-8">
											<ul class="can-skils">
												<li><strong>Job Id: </strong><?php echo $row['id_jobpost']; ?></li>
												<li><strong>Job Type: </strong><?php echo $type[array_rand($type)]; ?></li>
												<li><strong>Skills: </strong>
													<span class="skill-tag"><?php echo $skill[array_rand($skill)]; ?></span>
													<span class="skill-tag"><?php echo $skill[array_rand($skill)]; ?></span>
													<span class="skill-tag"><?php echo $skill[array_rand($skill)]; ?></span>
												</li>
												<li><strong>Experience: </strong><?php echo $row['experience']; ?> Year</li>
												<li><strong>Location: </strong><?php echo $row1['city']; ?></li>
												<li><strong>Stipend: </strong>₹<?php echo $row['maximumsalary']; ?> /Month</li>
											</ul>
										</div>
										<div class="col-md-3 col-sm-4">
											<div class="vrt-job-act">
												<a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>" class="btn-job theme-btn job-apply">Apply Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="vertical-job-footer">
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="cmp-job-rating">
												<ul>
													<li><strong>Rating: </strong>
														<i class="rate fa fa-star"></i>
														<i class="rate fa fa-star"></i>
														<i class="rate fa fa-star"></i>
														<i class="rate fa fa-star"></i>
														<i class="fa fa-star"></i>
														<span class="rating-counter">4.7/5</span>
													</li>
													<li><a href="#" title="">(570 Review)</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="cmp-job-review">
												<ul>
													<li><a href="#" title="">Write Review<i class="theme-color fa fa-pencil"></i></a></li>
													<li><a href="#" title="">Show Review<i class="theme-color fa fa-comments-o"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
              					}
            				}
            				}
          				}
          				?>
						
						<div class="text-center">
							<button type="button" class="btn theme-btn btn-m"><a href="javascript:location.reload(true)">Load More...</a></button>
						</div>
						
					</div>
					
				</div>
				<!-- End Row -->
				
			</div>
		</section>
		
		<!-- ====================== End Job Detail 2 ================ -->		
		
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
											<input type="checkbox" id="41">
											<label for="41"></label>Remember me
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
		
		<!-- Nice Select -->
		<script src="assets/plugins/nice-select/js/jquery.nice-select.min.js"></script>
		
		<!-- Custom Js -->
		<script src="assets/js/custom.js"></script>
			  
    </body>
</html>