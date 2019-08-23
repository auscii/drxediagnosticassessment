<?php
session_start();
include("config/common/asdasf9z09x0c90zx90123.php");

if (!empty($_POST['drxassessment_name'])) {
	  $drxassessment_name = $_POST['drxassessment_name'];
} else {
	  $drxassessment_name = "";
}

if (!empty($_POST['drxassessment_contactnumber'])) {
	  $drxassessment_contactnumber = $_POST['drxassessment_contactnumber'];
} else {
	  $drxassessment_contactnumber = "";
}

if (!empty($_POST['drxassessment_email'])) {
	  $drxassessment_email = $_POST['drxassessment_email'];
} else {
	  $drxassessment_email = "";
}

if (!empty($_POST['drxassessment_username'])) {
	  $drxassessment_username = $_POST['drxassessment_username'];
} else {
	  $drxassessment_username = "";
}

// if (!empty($_POST['drxassessment_position'])) {
    // $drxassessment_position = $_POST['drxassessment_position'];
	  $drxassessment_position = "5tud3nt";
// } else {
// 	  $drxassessment_position = "";
// }


if (!empty($_POST['drxassessment_password'])) {
	  $drxassessment_password = $_POST['drxassessment_password'];
		// $drxassessment_password = hash("sha256", $drxassessment_password);
} else {
		$drxassessment_password = "";
}

if (!empty($_POST['drxassessment_confirm_password'])) {
	  $drxassessment_confirm_password = $_POST['drxassessment_confirm_password'];
		$drxassessment_confirm_password = md5($drxassessment_confirm_password);
} else {
		$drxassessment_confirm_password = "";
}

$date_created_format = date('Y-m-d g:i:s');
$profile_pic = "user.jpg";
if (isset($_POST['drxassessment_regsubmit'])) {

    $drx = $connection->prepare("INSERT INTO drxassessment_users (
                                  drxassessment_name,
                                  drxassessment_contactnumber,
                                  drxassessment_email,
                                  drxassessment_username,
                                  drxassessment_password,
                                  drxassessment_position,
																	drxassessment_created_at,
																	drxassessment_profile_pic
                                  )
                                  VALUES (
                                  :drxassessment_name,
                                  :drxassessment_contactnumber,
                                  :drxassessment_email,
                                  :drxassessment_username,
                                  :drxassessment_password,
                                  :drxassessment_position,
																	:drxassessment_created_at,
																	:drxassessment_profile_pic
                                  )");
    $drx->execute(
        array(
            'drxassessment_name'            => $drxassessment_name,
            'drxassessment_contactnumber'   => $drxassessment_contactnumber,
            'drxassessment_email'           => $drxassessment_email,
            'drxassessment_username'        => $drxassessment_username,
            'drxassessment_password'        => $drxassessment_password,
            'drxassessment_position'        => $drxassessment_position,
            'drxassessment_created_at'      => $date_created_format,
            'drxassessment_profile_pic'     => $profile_pic
        )
    );
		// $drx_get_last_id = $connection->lastInsertId();

    $drx->fetchAll();



		// $drxassessment_user_id = $drx_get_last_id;

		// For Student Assessment details
		// $drx_insert_assessment = $connection->prepare("INSERT INTO drxassessment_assessment_result (
    //                               drxassessment_user_id,
    //                               drxassessment_status
    //                               )
    //                               VALUES (
    //                               :drxassessment_user_id,
    //                               :drxassessment_status
    //                               )");
    // $drx_insert_assessment->execute(
    //     array(
    //         'drxassessment_user_id'            => $drxassessment_user_id,
    //         'drxassessment_status'   					 => 0
    //     )
    // );
    // $drx_insert_assessment->fetchAll();

		echo "<script>alert('Registration Successful! Please wait for your account to be activated to log-in.');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>D’Rx e-Diagnostic Tool</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="D’Rx e-Diagnostic Tool" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="landing-page/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="landing-page/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="landing-page/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="landing-page/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

<!-- header -->
<header>
	<!-- <div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span> Mon-Sat : 9:00 to 17:00</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">info@example.com</a> </li>
			</ul>
		</div>
	</div> -->
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html">
					<!-- <img src="landing-page/images/s2.png" alt="">  -->
					D’Rx e-Diagnostic Tool
				</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="public/../">Home</a></li>
				<li class=""><a href="#about">About</a></li>
				<li class=""><a href="#services">Services</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Student Assessment</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Discover your Potential</h4>
										<p class="w3ls_pvt-title my-3">The D’Rx e-Diagnostic Tool is open for students in University of Makati to know your skills and knowledge.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<!-- <li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Education Courses.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Education Courses.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Study For Better Future</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li> -->
						</ul>
						<!-- <div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div> -->
					</div>
					<!-- //banner slider-->
				</div>
				<div class="col-lg-5 col-md-8 px-lg-3 px-0" style="margin-top: -7%;">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<!-- banner form -->
							<form method="POST">
								<h5 class="mb-3">Register and start assessment</h5>
								<div class="form-style-w3ls">
                  <input class="form-control" placeholder="Enter Name" name="drxassessment_name" type="text" required>
									<input class="form-control" placeholder="Enter Email Address" name="drxassessment_email" type="email" required>
									<input class="form-control" placeholder="Enter Contact Number" name="drxassessment_contactnumber" type="number" required>
									<input class="form-control" placeholder="Enter Username" name="drxassessment_username" type="text" required>
                  <input class="form-control" placeholder="Enter Password" name="drxassessment_password" type="password" required>
									<input class="form-control" placeholder="Confirm Password" name="drxassessment_confirm_password" type="password" required>
									<button type="submit" name="drxassessment_regsubmit" class="btn" style="margin-bottom: 5%;"> Register</button>
									<span style="font-size: 19px;">Already have an account? <a href="public/"> Log-in here</a></span>
									<!-- <span>By registering, you agree to our <a href="#">Terms & Conditions.</a></span> -->
								</div>
							</form>
							<!-- //banner form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- what we Serve -->
<section class="banner-bottom py-5" id="about">
	<div class="container py-lg-5">
		<h2 class="heading mb-sm-5 mb-4"> Build Your Career With Our Education System</h2>
		<div class="row bottom-grids">
			<div class="col-md-3 col-sm-6">
				<div class="three-grids-w3pvt-1 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold">Facillities</h5>
						<p>Education</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-sm-0 mt-4">
				<div class="three-grids-w3pvt-2 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold">Graduation</h5>
						<p>Education</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
				<div class="three-grids-w3pvt-3 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold">Learning</h5>
						<p>Education</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-4">
				<div class="three-grids-w3pvt-4 d-flex text-right">
					<div class="text-effect-wthree midd-text-w3ls p-3 w-100">
						<h5 class="text-capitalize text-bl font-weight-bold">Success</h5>
						<p>Education</p>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<p class="mt-4">D’Rx is an D’Rx e-Diagnostic Tool tool will be able to assess students’ mathematics learning competencies in the following areas: number sense; memorization of arithmetic facts; accurate calculation; fluent calculation; and accurate math reasoning and application.</p>
			</div>
			<div class="col-lg-1 col-sm-4 col-5 ser-img">
				<img src="landing-page/images/s1.png" class="mt-4" alt="">
				<img src="landing-page/images/s2.png" class="mt-4" alt="">
			</div>
			<div class="col-lg-1 col-sm-4 col-5 ser-img">
				<img src="landing-page/images/s3.png" class="mt-4" alt="">
				<img src="landing-page/images/s5.png" class="mt-4" alt="">
			</div>
			<div class="col-lg-5">
				<p class="mt-4">Further, the said tool will also serve as guide among grade 11 HSU (senior high school) math teachers to remediate specific weaknesses and to structure their lessons based on the result of the assessment. </p>
			</div>
		</div>
	</div>
</section>
<!-- //what we Serve -->

<!-- services -->
<!-- <section class="services py-5" id="services">
	<div class="container">
		<h3 class="heading mb-5">Our Services</h3>
		<div class="row ml-sm-5">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s1.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Quality Education</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s2.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Experienced Staff</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s3.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Ac Classrooms</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s4.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Study Certificate</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s5.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Study Materials </h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<img src="landing-page/images/s6.png" alt="">
						</div>
						<div class="our-services-text">
							<h4>Library Books</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- //services -->



<!-- footer -->
<footer>
	<div class="footer-layer py-sm-5 pt-5 pb-3">
		<div class="container py-md-3">
			<div class="footer-grid_section text-center">
				<div class="footer-title mb-3">
					<a href="#">
						<!-- <img src="landing-page/images/s2.png" alt="">  -->
					D’Rx e-Diagnostic Tool</a>
				</div>
				<!-- <div class="footer-text">
					<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
					 Lorem ipsum dolor sit amet, consectetur elit.</p>
				</div> -->
				<!-- <ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
					<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copyright">
	<div class="container py-4">
		<div class="row bottom">
			<!-- <ul class="col-lg-6 links p-0">
				<li><a href="#why" class="">Why Choose Us</a></li>
				<li><a href="#services" class="">Services </a></li>
				<li><a href="#team" class="">Teachers </a></li>
				<li><a href="#testi" class="">Testimonials </a></li>
			</ul> -->
			<div class="col-lg-6 copy-right p-0">
				<p class="">© 2019 D’Rx e-Diagnostic Tool. All rights reserved
				</p>
			</div>
		</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top">
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>
