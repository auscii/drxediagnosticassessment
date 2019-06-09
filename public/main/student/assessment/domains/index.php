<?php
session_start();
include("../../../../../config/common/asdasf9z09x0c90zx90123.php");
$date_created_format = date('Y-m-d g:i:s');

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
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
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../../../assets/images/favicon.png"> -->
    <title>E-Diagnostic Assessment</title>
    <link href="../../../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="../../../../main/teacher">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!-- Dark Logo icon -->
                            <img src="../../../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <span style="font-size: 16px;">E-Diagnostic Assessment</span>
                             <!-- <img src="../../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../../../../config/savage/"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
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

												<li class="active sidebar-item"> <a class="active sidebar-link waves-effect waves-dark sidebar-link" href="../assessment/" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Assessment</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Profile</span></a></li>

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
                        <h4 class="page-title">Domains</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../../">Assessment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../">Assessment Instructions</a></li>
                                     <li class="breadcrumb-item active" aria-current="page"><a href="../start/">Domains</a></li>
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                        <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Domain</th>
                                                <th class="text-center">Total Question</th>
                                                <th class="text-center">Action</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">NUMBER SENSE</td>
                                            <td class="text-center">
                                            <?php 
                                             $drx_count = 0;
                                             $sql = "SELECT count(*) FROM drxassessment_assessment
                                                     WHERE drxassessment_domain = 'Number Sense'";
                                             $result = $connection->prepare($sql);
                                             $result->execute();
                                             $total_number_sense = $result->fetchColumn();
                                             if ($total_number_sense == 0) {
                                               echo "0";
                                             } else {
                                                 $result = $connection->prepare("SELECT drxassessment_domain, drxassessment_question1,
                                                                                        drxassessment_status
                                                                                 FROM drxassessment_assessment
                                                                                 WHERE drxassessment_domain = 'Number Sense'
                                                                                 ");
                                                 $result->execute();
                                                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                            $drx_count++;
                                                            $drxassessmentdomainx = $row['drxassessment_domain'];
                                                            $drxassessment_question1 = $row['drxassessment_question1'];
                                                            $drxassessmentxstatus = $row['drxassessment_status'];
                                                            // echo "<p>".$drx_count.".) ".$drxassessment_question1 ."</p>"."";
                                                      }
                                                            echo $total_number_sense;
                                                  
                                              }
                                              ?>
                                            </td>
                                            <td class="text-center">
                                                 <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                                  onclick="editAssessment('<?php echo $drxassessment_id ; ?>',
                                                                          '<?php echo $drxassessmentanswer ; ?>');">
                                                  <i class="fas fa-arrow-right"></i> Start Exam
                                                  </button>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">MEMORIZATION OF ARITHMETIC FACTS</td>
                                            <td class="text-center">
                                            <?php 
                                             $drx_count = 0;
                                             $sql = "SELECT count(*) FROM drxassessment_assessment
                                                     WHERE drxassessment_domain = 'Memorization of Arithmetic Facts'";
                                             $result = $connection->prepare($sql);
                                             $result->execute();
                                             $total_number_sense = $result->fetchColumn();
                                             if ($total_number_sense == 0) {
                                               echo "0";
                                             } else {
                                                 $result = $connection->prepare("SELECT drxassessment_domain, drxassessment_question1,
                                                                                        drxassessment_status
                                                                                 FROM drxassessment_assessment
                                                                                 WHERE drxassessment_domain = 'Memorization of Arithmetic Facts'
                                                                                 ");
                                                 $result->execute();
                                                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                            $drx_count++;
                                                            $drxassessmentdomainx = $row['drxassessment_domain'];
                                                            $drxassessment_question1 = $row['drxassessment_question1'];
                                                            $drxassessmentxstatus = $row['drxassessment_status'];
                                                            // echo "<p>".$drx_count.".) ".$drxassessment_question1 ."</p>"."";
                                                      }
                                                  echo $total_number_sense;
                                              }
                                              ?>
                                            </td>
                                            <td class="text-center">
                                                 <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                                  onclick="editAssessment('<?php echo $drxassessment_id ; ?>',
                                                                          '<?php echo $drxassessmentanswer ; ?>');">
                                                  <i class="fas fa-arrow-right"></i> Start Exam
                                                  </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">ACCURATE CALCULATION</td>
                                            <td class="text-center">
                                            <?php 
                                             $drx_count = 0;
                                             $sql = "SELECT count(*) FROM drxassessment_assessment
                                                     WHERE drxassessment_domain = 'Accurate Calculation'";
                                             $result = $connection->prepare($sql);
                                             $result->execute();
                                             $total_number_sense = $result->fetchColumn();
                                             if ($total_number_sense == 0) {
                                               echo "0";
                                             } else {
                                                 $result = $connection->prepare("SELECT drxassessment_domain, drxassessment_question1,
                                                                                        drxassessment_status
                                                                                 FROM drxassessment_assessment
                                                                                 WHERE drxassessment_domain = 'Accurate Calculation'
                                                                                 ");
                                                 $result->execute();
                                                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                            $drx_count++;
                                                            $drxassessmentdomainx = $row['drxassessment_domain'];
                                                            $drxassessment_question1 = $row['drxassessment_question1'];
                                                            $drxassessmentxstatus = $row['drxassessment_status'];
                                                            // echo "<p>".$drx_count.".) ".$drxassessment_question1 ."</p>"."";
                                                     }       
                                                echo $total_number_sense;  
                                              }
                                              ?>
                                            </td>
                                            <td class="text-center">
                                                 <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                                  onclick="editAssessment('<?php echo $drxassessment_id ; ?>',
                                                                          '<?php echo $drxassessmentanswer ; ?>');">
                                                  <i class="fas fa-arrow-right"></i> Start Exam
                                                  </button>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">FLUENT CALCULATION</td>
                                            <td class="text-center">
                                            <?php 
                                             $drx_count = 0;
                                             $sql = "SELECT count(*) FROM drxassessment_assessment
                                                     WHERE drxassessment_domain = 'Fluent Calculation'";
                                             $result = $connection->prepare($sql);
                                             $result->execute();
                                             $total_number_sense = $result->fetchColumn();
                                             if ($total_number_sense == 0) {
                                               echo "0";
                                             } else {
                                                 $result = $connection->prepare("SELECT drxassessment_domain, drxassessment_question1,
                                                                                        drxassessment_status
                                                                                 FROM drxassessment_assessment
                                                                                 WHERE drxassessment_domain = 'Fluent Calculation'
                                                                                 ");
                                                 $result->execute();
                                                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                            $drx_count++;
                                                            $drxassessmentdomainx = $row['drxassessment_domain'];
                                                            $drxassessment_question1 = $row['drxassessment_question1'];
                                                            $drxassessmentxstatus = $row['drxassessment_status'];
                                                            // echo "<p>".$drx_count.".) ".$drxassessment_question1 ."</p>"."";
                                                      }      
                                                      echo $total_number_sense;
                                              }
                                              ?>
                                            </td>
                                            <td class="text-center">
                                                 <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                                  onclick="editAssessment('<?php echo $drxassessment_id ; ?>',
                                                                          '<?php echo $drxassessmentanswer ; ?>');">
                                                  <i class="fas fa-arrow-right"></i> Start Exam
                                                  </button>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">MATHEMATICAL REASONING AND APPLICATION</td>
                                            <td class="text-center">
                                            <?php 
                                             $drx_count = 0;
                                             $sql = "SELECT count(*) FROM drxassessment_assessment
                                                     WHERE drxassessment_domain = 'Mathematical Reasoning and Application'";
                                             $result = $connection->prepare($sql);
                                             $result->execute();
                                             $total_number_sense = $result->fetchColumn();
                                             if ($total_number_sense == 0) {
                                               echo "0";
                                             } else {
                                                 $result = $connection->prepare("SELECT drxassessment_domain, drxassessment_question1,
                                                                                        drxassessment_status
                                                                                 FROM drxassessment_assessment
                                                                                 WHERE drxassessment_domain = 'Mathematical Reasoning and Application'
                                                                                 ");
                                                 $result->execute();
                                                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                            $drx_count++;
                                                            $drxassessmentdomainx = $row['drxassessment_domain'];
                                                            $drxassessment_question1 = $row['drxassessment_question1'];
                                                            $drxassessmentxstatus = $row['drxassessment_status'];
                                                            // echo "<p>".$drx_count.".) ".$drxassessment_question1 ."</p>"."";
                                                      }       
                                                 echo $total_number_sense;
                                                  
                                              }
                                              ?>
                                            </td>
                                            <td class="text-center">
                                                 <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                                  onclick="editAssessment('<?php echo $drxassessment_id ; ?>',
                                                                          '<?php echo $drxassessmentanswer ; ?>');">
                                                  <i class="fas fa-arrow-right"></i> Start Exam
                                                  </button>
                                            </td>
                                        </tr>
                                </tbody>
                        </table>
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
    <script src="../../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../../../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../../../../dist/js/waves.js"></script>
    <script src="../../../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../../../assets/libs/flot/excanvas.js"></script>
    <script src="../../../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../../../dist/js/pages/chart/chart-page-init.js"></script>

		<script src="../../../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

		<script>

    function addUser(){
      $("#usersModalLabel").html("Add New Admin/Teacher") ;
      $("#drx_status").val("addnewuser") ;

      $("#drxassessment_name").val("") ;
      $("#drxassessment_contactnumber").val("") ;
      $("#drxassessment_email").val("") ;
      $("#drxassessment_username").val("") ;
      $("#drxassessment_password").val("") ;
    }

    function editUser(key, name, contact, email, username, password)
    {
          $("#usersModalLabel").html("Edit Admin/Teacher") ;
          $("#drx_status").val("edituser") ;
          $("#drx_key").val(key) ;

          $("#drxassessment_name").val(name) ;
          $("#drxassessment_contactnumber").val(contact) ;
          $("#drxassessment_email").val(email) ;
          $("#drxassessment_username").val(username) ;
          $("#drxassessment_password").val(password) ;
    }

    function deleteUser(key)
    {
          $("#deleteusersModalLabel").html("Delete Admin/Teacher") ;
          $("#dr_delete_is_status").val("deleteuser") ;
          $("#drx_delete_is_key").val(key) ;
    }


    </script>

</body>

</html>
