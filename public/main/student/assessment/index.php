<?php
session_start();
include("../../../../config/common/asdasf9z09x0c90zx90123.php");
$date_created_format = date('Y-m-d g:i:s');

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
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
    <title>E-Diagnostic Assessment</title>
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
                             <span style="font-size: 16px;">E-Diagnostic Assessment</span>
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

												<li class="active sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../assessment/" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Assessment</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../history/" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../profile/" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Profile</span></a></li>

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
                        <h4 class="page-title">Assessment Instructions</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   <li class="breadcrumb-item active" aria-current="page">Assessment</li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../assessment/">Assessment Instructions</a></li>
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
									 <ul class="list-style-none">
											 <li class="d-flex no-block card-body">
													 <i class="fa fa-check-circle w-30px m-t-5"></i>
													 <div>
															 <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
															 <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit adipiscing</span>
													 </div>
													 <div class="ml-auto">
															 <div class="tetx-right">
																	 <h5 class="text-muted m-b-0">Step</h5>
																	 <span class="text-muted font-16">01</span>
															 </div>
													 </div>
											 </li>
											 <li class="d-flex no-block card-body border-top">
													 <i class="fa fa-gift w-30px m-t-5"></i>
													 <div>
															 <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
															 <span class="text-muted">Lorem ipsum dolor sit amet, consectetur</span>
													 </div>
													 <div class="ml-auto">
															 <div class="tetx-right">
																	 <h5 class="text-muted m-b-0">Step</h5>
																	 <span class="text-muted font-16">02</span>
															 </div>
													 </div>
											 </li>
											 <li class="d-flex no-block card-body border-top">
													 <i class="fa fa-plus w-30px m-t-5"></i>
													 <div>
														 <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum adipiscing elit.</a>
															 <span class="text-muted">Lorem ipsum dolor sit amet, consectetur rnas</span>
													 </div>
													 <div class="ml-auto">
															 <div class="tetx-right">
																 <h5 class="text-muted m-b-0">Step</h5>
																	 <span class="text-muted font-16">03</span>
															 </div>
													 </div>
											 </li>
											 <li class="d-flex no-block card-body border-top">
													 <i class="fa fa-leaf w-30px m-t-5"></i>
													 <div>
														 <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum adipiscing elit lumpis</a>
															 <span class="text-muted">Lorem ipsum amet, consectetur rnas elit</span>
													 </div>
													 <div class="ml-auto">
															 <div class="tetx-right">
																 <h5 class="text-muted m-b-0">Step</h5>
																 <span class="text-muted font-16">04</span>
															 </div>
													 </div>
											 </li>
											 <li class="d-flex no-block card-body border-top">
													 <i class="fa fa-question-circle w-30px m-t-5"></i>
													 <div>
														 <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
															 <span class="text-muted">we Lorem ipsum dolor</span>
													 </div>
													 <div class="ml-auto">
															 <div class="tetx-right">
																 <h5 class="text-muted m-b-0">Step</h5>
																 <span class="text-muted font-16">05</span>
															 </div>
													 </div>
											 </li>

                       <?php $start_exam = date('Y-m-d g:i:s'); ?>

											 <div class="row">
                           <div class="col-md-6 col-lg-4 col-xlg-3" style="margin: auto;">
                             <a href="domains/startexam/index.php?start_exam=<?php echo $start_exam; ?>" title="Start Assessment" style="color: #fff;">
                               <div class="card card-hover">
                                   <div class="box bg-primary text-center">
                                       <h1 class="font-light text-white"><i class="mdi mdi-arrow-right-bold-circle"></i></h1>
                                       <h6 class="text-white">PROCEED TO ASSESSMENT</h6>
                                   </div>
                               </div>
                             </a>
                           </div>
                       </div>

									 </ul>
							 </div>


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
