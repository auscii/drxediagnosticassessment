<?php
session_start();
include("../../../../../../config/common/asdasf9z09x0c90zx90123.php");
$date_created_format = date('Y-m-d g:i:s');


// Start - User Info
if (!empty($_SESSION['drxassessmentid'])) {
    $drxassessmentid = $_SESSION['drxassessmentid'];
} else {
    $drxassessmentid = "";
}

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
// End - User Info

// Start - Student Assessment Result
if (!empty($_GET['getdrxassessment_domain_name'])) {
    $getdrxassessment_domain_name = $_GET['getdrxassessment_domain_name'];
} else {
    $getdrxassessment_domain_name = "";
}

if (!empty($_GET['getdrxassessment_q1_answer_1'])) {
    $getdrxassessment_q1_answer_1 = $_GET['getdrxassessment_q1_answer_1'];
} else {
    $getdrxassessment_q1_answer_1 = "";
}

if (!empty($_GET['getdrxassessment_q1_answer_2'])) {
    $getdrxassessment_q1_answer_2 = $_GET['getdrxassessment_q1_answer_2'];
} else {
    $getdrxassessment_q1_answer_2 = "";
}

if (!empty($_GET['getdrxassessment_q1_answer_3'])) {
    $getdrxassessment_q1_answer_3 = $_GET['getdrxassessment_q1_answer_3'];
} else {
    $getdrxassessment_q1_answer_3 = "";
}

if (!empty($_GET['getdrxassessment_q1_answer_4'])) {
    $getdrxassessment_q1_answer_4 = $_GET['getdrxassessment_q1_answer_4'];
} else {
    $getdrxassessment_q1_answer_4 = "";
}


if (!empty($_POST['drxassessment_student_answer'])) {
    $drxassessment_student_answer = $_POST['drxassessment_student_answer'];
} else {
    $drxassessment_student_answer = "";
}





// if (!empty($_POST['drxassessment_question_student'])) {
//     $drxassessment_question_student = $_POST['drxassessment_question_student'];
//     $drxassessment_question_student = implode(" ", $_POST['drxassessment_question_student']);
// } else {
//     $drxassessment_question_student = "";
// }
//
// if (!empty($_POST['drxassessment_student_answer'])) {
//     $drxassessment_student_answer = $_POST['drxassessment_student_answer'];
//     $drxassessment_student_answer = implode(" ", $_POST['drxassessment_student_answer']);
// } else {
//     $drxassessment_student_answer = "";
// }








if (isset($_POST['drx_btn_start_exam']))
{

  echo $drxassessment_student_answer;
  exit();

    // $drxassessmentQuestionStudentFinalValue = explode(" ", $drxassessment_question_student);
    // $drxassessmentAnswerStudentFinalValue = explode(" ", $drxassessment_student_answer);

    // if ($output) {
    //     $result_answer = 1;
    // } else {
    //     $result_answer = 0;
    // }

    // for ($i=0; $i<count($drxassessmentQuestionStudentFinalValue); $i++)
    // {
    //    $drx_statement = $connection->prepare("INSERT INTO drxassessment_assessment_result (
    //                                                       user_id,
    //                                                       user_name,
    //                                                       user_email,
    //                                                       student_selected_domain,
    //                                                       student_selected_question,
    //                                                       student_selected_answer,
    //                                                       assessment_correct_answer
    //                                                       )
    //                                                VALUES (
    //                                                       :user_id,
    //                                                       :user_name,
    //                                                       :user_email,
    //                                                       :student_selected_domain,
    //                                                       :student_selected_question,
    //                                                       :student_selected_answer,
    //                                                       :assessment_correct_answer
    //                                                       )");
    //      $drx_statement->execute(
    //         array(
    //             'user_id'                      => $drxassessmentid,
    //             'user_name'                    => $drxassessmentname,
    //             'user_email'                   => $drxassessmentemail,
    //             'student_selected_domain'			 => $drxassessment_domain_name,
    //             'student_selected_question'		 => $drxassessmentQuestionStudentFinalValue[$i],
    //             'student_selected_answer'			 => $drxassessmentAnswerStudentFinalValue[$i],
    //             'assessment_correct_answer'    => $result_answer
    //
    //         )
    //      );
    // }
    //
    // $drx_statement_taken = $connection->prepare("INSERT INTO drxassessment_assessment_taken (
    //                                                   user_id,
    //                                                   user_domain,
    //                                                   user_name,
    //                                                   taken_count
    //                                                   )
    //                                              VALUES (
    //                                                     :user_id,
    //                                                     :user_domain,
    //                                                     :user_name,
    //                                                     :taken_count
    //                                                     )");
    //  $drx_statement_taken->execute(
    //     array(
    //         'user_id'                     => $drxassessmentid,
    //         'user_domain'                 => $drxassessment_domain_name,
    //         'user_name'                   => $drxassessmentname,
    //         'taken_count'			            => 1
    //     )
    //  );
     // exit();
     // header("Location: ../");
}
// End - Student Assessment Result


?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../../../../assets/images/favicon.png"> -->
    <title>E-Diagnostic Assessment</title>
    <link href="../../../../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="../../../../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../../../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="../../../../../main/teacher">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!-- Dark Logo icon -->
                            <img src="../../../../../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <span style="font-size: 16px;">E-Diagnostic Assessment</span>
                             <!-- <img src="../../../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../../../../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../../../../../config/savage/"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
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
                        <h4 class="page-title">Start Exam</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../../../">Assessment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../../">Assessment Instructions</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../">Domains</a></li>
                                     <li class="breadcrumb-item active" aria-current="page"><a href="../startexam/">Start Exam</a></li>
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


                        <input type="hidden" id="drx_status" name="drx_status">
                        <input type="hidden" id="drx_key" name="drx_key">

                        <h4 class="text-center"><?php echo $getdrxassessment_domain_name; ?></h4>

                        <?php
                         // ORDER BY drxassessment_order DESC
                        $result2 = $connection->prepare("SELECT * FROM drxassessment_assessment WHERE drxassessment_domain = :drxassessment_domain");
                        $result2->execute( array( 'drxassessment_domain' => $getdrxassessment_domain_name) );
                                 while ($row2 = $result2->fetch(PDO::FETCH_ASSOC))
                                 {
                                        $drxassessment_question1 = $row2['drxassessment_question1'];
                                        $drxassessment_domain = $row2['drxassessment_domain'];
                                        $drxassessment_answer = $row2['drxassessment_answer'];
                                        $drxassessment_q1_answer_1 = $row2['drxassessment_q1_answer_1'];
                                        $drxassessment_q1_answer_2 = $row2['drxassessment_q1_answer_2'];
                                        $drxassessment_q1_answer_3 = $row2['drxassessment_q1_answer_3'];
                                        $drxassessment_q1_answer_4 = $row2['drxassessment_q1_answer_4'];
                                        $drxassessment_order = $row2['drxassessment_order'];
                                        $drxassessment_status = $row2['drxassessment_status'];
                        ?> <br /> <br />

                        <form action="" method="GET" enctype="multipart/form-data">

                            <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Question</label>
                                    <div class="col-sm-9">
                                            <input type="text" class="form-control" id="drxassessment_question_student" name="drxassessment_question_student[]" value="<?php echo $drxassessment_question1; ?>" readonly>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Choices</label>
                                    <div class="col-sm-9">
                                      <!-- multiple="multiple" -->
                                        <select class="form-control" name="drxassessment_student_answer" id="drxassessment_student_answer" required>
                                            <option value="" disabled selected>--Select Your Answer---</option>
                                            <option value="<?php echo $drxassessment_q1_answer_1; ?>"><?php echo $drxassessment_q1_answer_1; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_2; ?>"><?php echo $drxassessment_q1_answer_2; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_3; ?>"><?php echo $drxassessment_q1_answer_3; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_4; ?>"><?php echo $drxassessment_q1_answer_4; ?></option>
                                        </select>
                                    </div>
                            </div> <br /> <br />

                            </form>

                        <?php } ?>

                        <div class="modal-footer">
                              <button type="button" name="drx_btn_start_exam" class="btn btn-success">Submit</button>
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

    <!-- MODALS -->

    <div class="modal fade" id="startAssessmentModal" tabindex="-1" role="dialog" aria-labelledby="startAssessmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">

                        <div class="modal-header">
                                <h5 class="modal-title" id="startAssessmentModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>

                        <div class="modal-body">


                        </div>

                </div>
           </div>
        </div>

    <!-- END OF MODALS -->


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../../../../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../../../../../dist/js/waves.js"></script>
    <script src="../../../../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../../../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../../../../../assets/libs/flot/excanvas.js"></script>
    <script src="../../../../../assets/libs/flot/jquery.flot.js"></script>
    <script src="../../../../../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../../../../../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../../../../../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../../../../../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../../../../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../../../../dist/js/pages/chart/chart-page-init.js"></script>

		<script src="../../../../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../../../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../../../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

		<script>
    // function deleteUser(key)
    // {
    //       $("#deleteusersModalLabel").html("Delete Admin/Teacher") ;
    //       $("#dr_delete_is_status").val("deleteuser") ;
    //       $("#drx_delete_is_key").val(key) ;
    // }

    function startExam(domainname)
    {
        $("#drx_domain").html(domainname);
    }


    </script>

</body>

</html>
