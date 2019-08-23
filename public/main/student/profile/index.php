<?php
session_start();
include("../../../../config/common/asdasf9z09x0c90zx90123.php");
$date_created_format = date('Y-m-d g:i:s');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
}

if (!empty($_SESSION['drxassessmentemail'])) {
    $drxassessmentemail = $_SESSION['drxassessmentemail'];
} else {
    $drxassessmentemail = "";
}

if (!empty($_SESSION['drxassessmentid'])) {
    $drxassessmentid = $_SESSION['drxassessmentid'];
} else {
    $drxassessmentid = "";
}

if (!empty($_SESSION['drxassessmentcontactnumber'])) {
    $drxassessmentcontactnumber = $_SESSION['drxassessmentcontactnumber'];
} else {
    $drxassessmentcontactnumber = "";
}

if (!empty($_SESSION['drxassessmentusername'])) {
    $drxassessmentusername = $_SESSION['drxassessmentusername'];
} else {
    $drxassessmentusername = "";
}

if (!empty($_SESSION['drxassessmentpassword'])) {
    $drxassessmentpassword = $_SESSION['drxassessmentpassword'];
} else {
    $drxassessmentpassword = "";
}

if (!empty($_SESSION['drxassessmentprofilepic'])) {
    $drxassessmentprofilepic = $_SESSION['drxassessmentprofilepic'];
} else {
    $drxassessmentprofilepic = "";
}

if (!empty($_SESSION['drxch3ck5ecur1ty'])) {
	  $drxch3ck5ecur1ty = $_SESSION['drxch3ck5ecur1ty'];
} else {
		$drxch3ck5ecur1ty = "";
}

if ($drxch3ck5ecur1ty!="z01nxc98zxncnzx12131102930190293019203910920391") {
    header('Location: ../../../');
    exit();
}


if (!empty($_POST['fullname'])) {
	  $fullname = $_POST['fullname'];
} else {
		$fullname = "";
}

if (!empty($_POST['email'])) {
	  $email = $_POST['email'];
} else {
		$email = "";
}

if (!empty($_POST['contactnumber'])) {
	  $contactnumber = $_POST['contactnumber'];
} else {
		$contactnumber = "";
}

if (!empty($_POST['password'])) {
	  $password = $_POST['password'];
} else {
		$password = "";
}

if (!empty($_POST['confirmpassword'])) {
	  $confirmpassword = $_POST['confirmpassword'];
} else {
		$confirmpassword = "";
}

if (!empty($_FILES['profile_pic'])) {
		move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"../../../assets/images/" . $_FILES["profile_pic"]["name"]);
		$profile_pic = $_FILES["profile_pic"]["name"];
} else {
		$profile_pic = $drxassessmentprofilepic;
}


if (isset($_POST['update_profile'])) {


		if ($password != $confirmpassword)
		{
				echo "<script>alert('Password Mismatched! Please try again.')</script>";
		}
		else
		{
			$update_statement = $connection->prepare("UPDATE drxassessment_users SET
																								drxassessment_profile_pic = :drxassessment_profile_pic,
																								drxassessment_name = :drxassessment_name,
																								drxassessment_contactnumber = :drxassessment_contactnumber,
																								drxassessment_email = :drxassessment_email,
																								drxassessment_password = :drxassessment_password
																								WHERE drxassessment_id = $drxassessmentid;
																			");
			$update_statement->execute(
					array(
							'drxassessment_profile_pic'           => $profile_pic,
							'drxassessment_name'   							  => $fullname,
							'drxassessment_contactnumber'   			=> $contactnumber,
							'drxassessment_email'      					  => $email,
							'drxassessment_password'     			 		=> $password
					)
			);
				  // echo "<script>alert('Profile Successfully Update! You will automatically logout for updating profile.')</script>";
					header("Location: ../../../../config/savage/");
			// $update_statement->fetchAll();
		}
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/favicon.png"> -->
    <title>D’Rx e-Diagnostic Tool</title>
    <link href="../../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="../../../main/teacher">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!-- Dark Logo icon -->
                            <img src="../../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <span style="font-size: 16px;">D’Rx e-Diagnostic Tool</span>
                             <!-- <img src="../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile -->
                        <!-- ============================================================== -->

                        <li class="nav-item dropdown">
                          <span style="color: #fff;">Welcome, <?php echo $drxassessmentname; ?></span>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../assets/images/<?php echo $drxassessmentprofilepic; ?>" alt="user" class="rounded-circle" width="31" height="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="../profile/"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../../../config/savage/"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
								<nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span></a></li>

												<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../assessment/" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Assessment</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../history/" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="active sidebar-item"> <a class="active sidebar-link waves-effect waves-dark sidebar-link" href="../profile" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Profile</span></a></li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Update Profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../profile/">Profile</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
								<div class="card">
									<form method="POST" enctype="multipart/form-data" class="form-horizontal">

											<?php if (!empty($drxassessmentprofilepic)) { ?>
												<img class="img-circle" width="120px" height="120px" style="border-radius: 25px;" src="../../../assets/images/<?php echo $drxassessmentprofilepic; ?>" id="image_source" />
											<?php }  else { ?>
												<img class="img-circle" width="120px" height="120px" style="border-radius: 25px;" src="../../../assets/images/noimage.png" id="image_source" />
											<?php } ?>

											<div class="card-body" style="margin-top: -10%;">
													<!-- <h4 class="card-title">Update Profile</h4> -->

													<input type="hidden" value="<?php echo $drxassessmentid; ?>">

													<div class="form-group row">
															<label for="updateProfile" class="col-sm-3 text-right control-label col-form-label">User Profile Pic</label>
															<div class="col-sm-9">
																	<input type="file" class="form-control" name="profile_pic" onchange="readURL(this);">
															</div>
													</div>

													<div class="form-group row">
															<label for="updateProfile" class="col-sm-3 text-right control-label col-form-label">Fullname</label>
															<div class="col-sm-9">
																	<input type="text" class="form-control" name="fullname" value="<?php echo $drxassessmentname; ?>" required>
															</div>
													</div>

													<div class="form-group row">
															<label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
															<div class="col-sm-9">
																	<input type="email" class="form-control" name="email" value="<?php echo $drxassessmentemail; ?>" required>
															</div>
													</div>

													<div class="form-group row">
															<label for="lname" class="col-sm-3 text-right control-label col-form-label">Contact Numbeer</label>
															<div class="col-sm-9">
																	<input type="number" class="form-control" name="contactnumber" value="<?php echo $drxassessmentcontactnumber; ?>" required>
															</div>
													</div>

													<div class="form-group row">
															<label for="email1" class="col-sm-3 text-right control-label col-form-label">Username</label>
															<div class="col-sm-9">
																	<input type="text" class="form-control" id="username" value="<?php echo $drxassessmentusername; ?>" disabled>
															</div>
													</div>

													<div class="form-group row">
															<label for="cono1" class="col-sm-3 text-right control-label col-form-label">Password</label>
															<div class="col-sm-9">
																	<input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
															</div>
													</div>

													<div class="form-group row">
															<label for="cono1" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
															<div class="col-sm-9">
																	<input type="password" class="form-control" name="confirmpassword" placeholder="Re-enter your Password" required>
															</div>
													</div>

											</div>
											<div class="border-top">
													<div class="card-body">
															<button type="submit" name="update_profile" class="btn btn-success"><i class="fa fa-check-circle"></i> Update</button>
													</div>
											</div>
									</form>

            		</div>
        		</div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
		<script>

    function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#image_source')
                   .attr('src', e.target.result);
                   // .width(150)
                   // .height(200);
           };

           reader.readAsDataURL(input.files[0]);
       }
    }
		</script>
    <script src="../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../../../dist/js/waves.js"></script>
    <script src="../../../dist/js/sidebarmenu.js"></script>
    <script src="../../../dist/js/custom.min.js"></script>
    <script src="../../../assets/libs/flot/excanvas.js"></script>
    <script src="../../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../../dist/js/pages/chart/chart-page-init.js"></script>

		<script src="../../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../../assets/extra-libs/DataTables/datatables.min.js"></script>

</body>

</html>
