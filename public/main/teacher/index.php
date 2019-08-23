<?php
session_start();
include("../../../config/common/asdasf9z09x0c90zx90123.php");

if (!empty($_SESSION['drxch3ck5ecur1ty'])) {
	  $drxch3ck5ecur1ty = $_SESSION['drxch3ck5ecur1ty'];
} else {
		$drxch3ck5ecur1ty = "";
}

if ($drxch3ck5ecur1ty!="z01nxc98zxncnzx12131102930190293019203910920391") {
    header('Location: ../../');
    exit();
}

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
}

if (!empty($_SESSION['drx_welcome'])) {
    $drx_welcome = $_SESSION['drx_welcome'];
} else {
    $drx_welcome = "";
}

// echo $drxassessmentname;
// exit();

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png"> -->
    <title>D’Rx e-Diagnostic Tool</title>
    <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../assets/libs/toastr/build/toastr.min.css" rel="stylesheet">

    <link href="../../dist/charts/Chart.css" rel="stylesheet">
    <link href="../../dist/charts/Chart.min.css" rel="stylesheet">

    <style type="text/css">
      /* #chart-container {
        width: 50%;
        height: auto;
        margin: auto;
      } */
    </style>
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
                    <a class="navbar-brand" href="../../main/teacher">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <span style="font-size: 16px;">D’Rx e-Diagnostic Tool</span>
                             <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" height="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../../config/savage/"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
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

                        <li class="active sidebar-item"> <a class=" sidebar-link waves-effect waves-dark sidebar-link" href="../../main/teacher/" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="../../main/teacher/assessment/" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Assessment </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="../../main/teacher/assessment/" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Assessment </span></a></li>
                                <li class="sidebar-item"><a href="../../main/teacher/sequence/" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Sequence of Assessment </span></a></li>
                            </ul>
                        </li> -->

												<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../main/teacher/assessment/" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Assessment </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="usersmanagement/" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Users Management</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="history/" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="reports/" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Reports</span></a></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="rankings/" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Ranking</span></a></li> -->

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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                      <a href="assessment/">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Manage Assessment</h6>
                            </div>
                        </div>
                      </a>
                    </div>


                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="../teacher/usersmanagement">
                          <div class="card card-hover">
                              <div class="box bg-cyan text-center">
                                  <h1 class="font-light text-white"><i class="mdi mdi-account-circle"></i></h1>
                                  <h6 class="text-white">Users Management</h6>
                              </div>
                          </div>
                        </a>
                      </div>
                      
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <a href="history/">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-bar"></i></h1>
                                <h6 class="text-white">History</h6>
                            </div>
                        </div>
                      </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <a href="reports/">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-bubble"></i></h1>
                                <h6 class="text-white">Reports</h6>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Assessment of Overall Student(s)</h4>
                                        <h5 class="card-subtitle"></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div id="chart-container">
                                          <canvas id="report_chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user-circle m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(*) FROM drxassessment_users";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_overall_users = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_overall_users; ?></h5>
                                                   <small class="font-light">Total User(s)</small>
                                                </div>
                                            </div>
                                             <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-file m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(*) FROM drxassessment_assessment_domains";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_domains = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_domains; ?></h5>
                                                   <small class="font-light">Total Domain(s)</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-users m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(*) FROM drxassessment_users WHERE drxassessment_position = '5tud3nt'";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_students = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_domains; ?></h5>
                                                   <small class="font-light">Total Student(s)</small>
                                                </div>
                                            </div>
                                             <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-book m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(drxassessment_question1) FROM drxassessment_assessment";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_questions = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_questions; ?></h5>
                                                   <small class="font-light">Total Question(s)</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(*) FROM drxassessment_assessment_history WHERE overall_score >= 75";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_questions = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_questions; ?></h5>
                                                   <small class="font-light">Passed Student(s)</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <?php
                                                   $sql = "SELECT count(*) FROM drxassessment_assessment_history WHERE overall_score <= 74";
                                                   $result = $connection->prepare($sql);
                                                   $result->execute();
                                                   $total_questions = $result->fetchColumn();
                                                   ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $total_questions; ?></h5>
                                                   <small class="font-light">Failed Student(s)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by <a href="#"> D’Rx e-Diagnostic Tool </a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../assets/libs/flot/excanvas.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../dist/js/pages/chart/chart-page-init.js"></script>
    <script src="../../assets/libs/toastr/build/toastr.min.js"></script>

    <script type="text/javascript" src="../../dist/charts/Chart.min.js"></script>
    <script type="text/javascript" src="../../dist/charts/Chart.bundle.js"></script>
    <script type="text/javascript" src="../../dist/charts/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="../../dist/charts/Chart.js"></script>
    <script type="text/javascript" src="app.js"></script>



    <script>

          // $(function(){
          //   <?php //if ($drx_welcome == 1) { ?>
          //       toastr.info('Welcome to DRx D’Rx e-Diagnostic Tool!', 'Welcome!');
          //   <?php //} $drx_welcome = 0; ?>
          // });
    </script>

</body>

</html>
