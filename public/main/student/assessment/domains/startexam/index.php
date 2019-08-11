<?php
session_start();
include("../../../../../../config/common/asdasf9z09x0c90zx90123.php");
$date_created_format = date('Y-m-d g:i:s');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
    header('Location: ../../../../../');
    exit();
}
// End - User Info

// Start - Student Assessment Result

// if (!empty($_GET['drxassessment_domain_name'])) {
//     $drxassessment_domain_name = $_GET['drxassessment_domain_name'];
// } else {
//     $drxassessment_domain_name = "";
// }

if (!empty($_GET['start_exam'])) {
    $start_exam = $_GET['start_exam'];
} else {
    $start_exam = "";
}

if (!empty($_POST['drxassessment_domain_student'])) {
    $drxassessment_domain_student = $_POST['drxassessment_domain_student'];
    $drxassessment_domain_student = implode(" ", $_POST['drxassessment_domain_student']);
} else {
    $drxassessment_domain_student = "";
}

if (!empty($_POST['drxassessment_question_student'])) {
    $drxassessment_question_student = $_POST['drxassessment_question_student'];
    $drxassessment_question_student = implode(" ", $_POST['drxassessment_question_student']);
} else {
    $drxassessment_question_student = "";
}

if (!empty($_POST['drxassessment_student_answer'])) {
    $drxassessment_student_answer = $_POST['drxassessment_student_answer'];
    $drxassessment_student_answer = implode(" ", $_POST['drxassessment_student_answer']);
} else {
    $drxassessment_student_answer = "";
}

if (isset($_POST['drx_btn_start_exam']))
{

    $count_correct_answer = "";
    $assessment_correct_answer2 = "";
    $drxassessment_answer_result = "";
    $drxassessment_question1_result = "";
    $assessment_correct_answer2_result = "";
    $correct_answer_result = "";
    $drxassessment_domainname2 = "";

    $splitQuestion = preg_split("/[\s,]+/", $drxassessment_question_student);
    $splitAnswer = preg_split("/[\s,]+/", $drxassessment_student_answer);
    $splitDomain = preg_split("/[\s,]+/", $drxassessment_domain_student);

    $questionValue = join("','",$splitQuestion);
    $answerValue = join("' OR drxassessment_answer_value ='",$splitAnswer);
    $countFetchQuestions = count($_POST['drxassessment_question_student']);

    // For Taking Assessment
    $drx_statement_exam = $connection->prepare("UPDATE drxassessment_users SET
                                                       drxassessment_exam = :drxassessment_exam
                                                WHERE drxassessment_id = :drxassessment_id");
    $drx_statement_exam->execute(
        array(
            'drxassessment_exam'               => 1,
            'drxassessment_id'                 => $drxassessmentid
        )
    );

    // Check Number Sense Result
    $numbersense_result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                                         IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer_domain
                                                FROM drxassessment_assessment
                                                WHERE drxassessment_domain = 'Number Sense'
                                              ");
    $numbersense_result->execute();
    $numbersense_correct_answer = "";
    while($row_ns = $numbersense_result->fetch(PDO::FETCH_ASSOC))
    {
    $numbersense_correct_answer .= $row_ns['assessment_correct_answer_domain'] . " ";
    }
    $countCorrectAnswerNumberSense = substr_count($numbersense_correct_answer,'1');

    $numbersense_percentage = ($countCorrectAnswerNumberSense / 10) * 50 + 50;

    // Check Fluent Calculation Result
    $fluentcalculation_result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                                         IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer_domain
                                                FROM drxassessment_assessment
                                                WHERE drxassessment_domain = 'Fluent Calculation'
                                              ");
    $fluentcalculation_result->execute();
    $fluentcalculation_correct_answer = "";
    while($row_fc = $fluentcalculation_result->fetch(PDO::FETCH_ASSOC))
    {
    $fluentcalculation_correct_answer .= $row_fc['assessment_correct_answer_domain'] . " ";
    }
    $countCorrectAnswerFluentCalculation = substr_count($fluentcalculation_correct_answer,'1');

    $fluentcalculation_percentage = ($countCorrectAnswerFluentCalculation / 10) * 50 + 50;

    // Check Accurate Calculation Result
    $accuratecalculation_result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                                         IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer_domain
                                                FROM drxassessment_assessment
                                                WHERE drxassessment_domain = 'Accurate Calculation'
                                              ");
    $accuratecalculation_result->execute();
    $accuratecalculation_correct_answer = "";
    while($row_ac = $accuratecalculation_result->fetch(PDO::FETCH_ASSOC))
    {
    $accuratecalculation_correct_answer .= $row_ac['assessment_correct_answer_domain'] . " ";
    }
    $countCorrectAnswerAccurateCalculation = substr_count($accuratecalculation_correct_answer,'1');

    $accuratecalculation_percentage = ($countCorrectAnswerAccurateCalculation / 10) * 50 + 50;

    // Check Mathematical Reasoning and Application Result
    $mathematicalreasoningandapplication_result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                                         IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer_domain
                                                FROM drxassessment_assessment
                                                WHERE drxassessment_domain = 'Mathematical Reasoning and Application'
                                              ");
    $mathematicalreasoningandapplication_result->execute();
    $mathematicalreasoningandapplication_correct_answer = "";
    while($row_mra = $mathematicalreasoningandapplication_result->fetch(PDO::FETCH_ASSOC))
    {
    $mathematicalreasoningandapplication_correct_answer .= $row_mra['assessment_correct_answer_domain'] . " ";
    }
    $countCorrectAnswerrow_mra = substr_count($mathematicalreasoningandapplication_correct_answer,'1');

    $mathematicalreasoningandapplication_percentage = ($countCorrectAnswerrow_mra / 10) * 50 + 50;

    // Check Memorization of Arithmetic Facts Result
    $memorizationofarithmeticfacts_result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                                         IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer_domain
                                                FROM drxassessment_assessment
                                                WHERE drxassessment_domain = 'Memorization of Arithmetic Facts'
                                              ");
    $memorizationofarithmeticfacts_result->execute();
    $memorizationofarithmeticfacts_correct_answer = "";
    while($row_mara = $memorizationofarithmeticfacts_result->fetch(PDO::FETCH_ASSOC))
    {
    $memorizationofarithmeticfacts_correct_answer .= $row_mara['assessment_correct_answer_domain'] . " ";
    }
    $countCorrectAnswerrow_memorizationofarithmeticfacts = substr_count($memorizationofarithmeticfacts_correct_answer,'1');

    $memorizationofarithmeticfacts_percentage = ($countCorrectAnswerrow_memorizationofarithmeticfacts / 10) * 50 + 50;


    // $drx_statement_domain_result = $connection->prepare("INSERT INTO drxassessment_domain_result (
    //                                                      user_id,
    //                                                      number_sense,
    //                                                      memorization_of_arithmetic_facts,
    //                                                      accurate_calculation,
    //                                                      fluent_calculation,
    //                                                      mathematical_reasoning_and_applications,
    //                                                      overall_score
    //                                                      )
    //                                                      VALUES (
    //                                                      :user_id,
    //                                                      :number_sense,
    //                                                      :memorization_of_arithmetic_facts,
    //                                                      :accurate_calculation,
    //                                                      :fluent_calculation,
    //                                                      :mathematical_reasoning_and_applications,
    //                                                      :overall_score
    //                                                      )");
    // $drx_statement_domain_result->execute(
    //    array(
    //        'user_id'                                     => $drxassessmentid,
    //        'number_sense'                                => $numbersense_percentage,
    //        'memorization_of_arithmetic_facts'            => $memorizationofarithmeticfacts_percentage,
    //        'accurate_calculation'                        => $accuratecalculation_percentage,
    //        'fluent_calculation'                          => $fluentcalculation_percentage,
    //        'mathematical_reasoning_and_applications'     => $mathematicalreasoningandapplication_percentage,
    //        'overall_score'                               => $overall_score
    //    )
    // );
    // End of Check Domain Result



    $result = $connection->prepare("SELECT drxassessment_answer_value, drxassessment_question1, drxassessment_domain,
                                           IF(drxassessment_answer_value = '$answerValue', '1', '0') AS assessment_correct_answer
                                    FROM drxassessment_assessment
                                    WHERE drxassessment_question1 IN('$questionValue')
                                  ");
    $result->execute();
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
      $drxassessment_domainname = $row['drxassessment_domain'];
      $drxassessment_domainname2 .= $row['drxassessment_domain'] . " ";
      $drxassessment_answer_value = $row['drxassessment_answer_value'];
      $drxassessment_question1 = $row['drxassessment_question1'];
      $assessment_correct_answer = $row['assessment_correct_answer'];
      $assessment_correct_answer2 .= $row['assessment_correct_answer'] . " ";
      $drxassessment_answer_result .= $row['drxassessment_answer_value'] . "<br /><br />";
      $drxassessment_question1_result .= $row['drxassessment_question1'] . "<br /><br />";
      $assessment_correct_answer2_result .= $row['assessment_correct_answer'] . "<br /><br />";

      // echo $assessment_correct_answer;
      // exit();

      if ($assessment_correct_answer == 1) {
          $correct_answer_result .= '<i class="fa fa-check" style="margin-top: 2.2%;"></i><br /><br />';
      } else {
          $correct_answer_result .= '<i class="fa fa-times" style="margin-top: 2.2%;"></i><br /><br />';
      }

      $drx_statement = $connection->prepare("INSERT INTO drxassessment_assessment_result (
                                                         user_id,
                                                         user_name,
                                                         user_email,
                                                         student_selected_domain,
                                                         student_selected_question,
                                                         assessment_correct_answer
                                                         )
                                                  VALUES (
                                                         :user_id,
                                                         :user_name,
                                                         :user_email,
                                                         :student_selected_domain,
                                                         :student_selected_question,
                                                         :assessment_correct_answer
                                                         )");
        $drx_statement->execute(
           array(
               'user_id'                       => $drxassessmentid,
               'user_name'                     => $drxassessmentname,
               'user_email'                    => $drxassessmentemail,
               'student_selected_domain'			 => $drxassessment_domainname,
               'student_selected_question'		 => $drxassessment_question1,
               'assessment_correct_answer'     => $assessment_correct_answer
           )
        );
    }

    // Fetch Student Domain Names
    // echo $drxassessment_domainname2;
    // exit();

    // For History Assessment
    $drxassessment_student_answer_history = implode(", ", $_POST['drxassessment_student_answer']);
    $drxassessment_student_question_history = implode(", ", $_POST['drxassessment_question_student']);
    $countCorrectAnswer = substr_count($assessment_correct_answer2,'1');
    $countWrongAnswer = substr_count($assessment_correct_answer2,'0');

    $overallScore = ($countCorrectAnswer / $countFetchQuestions) * 50 + 50;

    $end_at = date('Y-m-d g:i:s');
    // 2019-07-13 13:57:32

    $drx_statement = $connection->prepare("INSERT INTO drxassessment_assessment_history (
                                                       user_id,
                                                       user_name,
                                                       user_email,
                                                       domain_name,
                                                       questions,
                                                       answer,
                                                       total_correct_answer,
                                                       overall_score,
                                                       start_at,
                                                       end_at
                                                       )
                                                VALUES (
                                                       :user_id,
                                                       :user_name,
                                                       :user_email,
                                                       :domain_name,
                                                       :questions,
                                                       :answer,
                                                       :total_correct_answer,
                                                       :overall_score,
                                                       :start_at,
                                                       :end_at
                                                       )");
      $drx_statement->execute(
         array(
             'user_id'                       => $drxassessmentid,
             'user_name'                     => $drxassessmentname,
             'user_email'                    => $drxassessmentemail,
             'domain_name'			             => $drxassessment_domain_student,
             'questions'		                 => $drxassessment_student_question_history,
             'answer'                        => $drxassessment_student_answer_history,
             'total_correct_answer'          => $countCorrectAnswer,
             'overall_score'                 => $overallScore,
             'start_at'                      => $start_exam,
             'end_at'                        => $end_at
         )
      );


       $drx_statement_domain_result = $connection->prepare("INSERT INTO drxassessment_domain_result (
                                                         user_id,
                                                         number_sense,
                                                         memorization_of_arithmetic_facts,
                                                         accurate_calculation,
                                                         fluent_calculation,
                                                         mathematical_reasoning_and_applications,
                                                         overall_score
                                                         )
                                                         VALUES (
                                                         :user_id,
                                                         :number_sense,
                                                         :memorization_of_arithmetic_facts,
                                                         :accurate_calculation,
                                                         :fluent_calculation,
                                                         :mathematical_reasoning_and_applications,
                                                         :overall_score
                                                         )");
    $drx_statement_domain_result->execute(
       array(
           'user_id'                                     => $drxassessmentid,
           'number_sense'                                => $numbersense_percentage,
           'memorization_of_arithmetic_facts'            => $memorizationofarithmeticfacts_percentage,
           'accurate_calculation'                        => $accuratecalculation_percentage,
           'fluent_calculation'                          => $fluentcalculation_percentage,
           'mathematical_reasoning_and_applications'     => $mathematicalreasoningandapplication_percentage,
           'overall_score'                               => $overallScore
       )
    );
      // 'domain_name'			             => $drxassessment_domainname2,
      // End History Assessment

      // Retake Assessment
      $drx_statement_taken = $connection->prepare("INSERT INTO drxassessment_assessment_taken (
                                                        user_id,
                                                        user_domain,
                                                        user_name,
                                                        taken_count
                                                        )
                                                   VALUES (
                                                          :user_id,
                                                          :user_domain,
                                                          :user_name,
                                                          :taken_count
                                                          )");
       $drx_statement_taken->execute(
          array(
              'user_id'                     => $drxassessmentid,
              'user_domain'                 => $drxassessment_domainname2,
              'user_name'                   => $drxassessmentname,
              'taken_count'			            => 1
          )
       );
       // End Retake Assessment
       // echo "<script>alert('$assessment_correct_answer2')</script>";
       if ($overallScore >= 75)
       {
          $assessmentStatus = 'PASSED';
       }
       else
       {
          $assessmentStatus = 'FAILED';
       }
?>
<div class="popup" style="">
        <div class="cnt223">
            <hr><h2 class="text-center"><i class="fa fa-exclamation-circle"></i> Assessment Result</h2><hr><br/>
             <div class="table-responsive">
                  <table class="table">
                    <thead>
                        <tr>
                          <th><b>QUESTIONS</b></th>
                          <!-- <th><b>ANSWERS</b></th> -->
                          <th><b>STATUS</b></th>
                          <td>&nbsp;</td>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td><?php echo $drxassessment_question1_result ; ?></td><br />
                          <!-- <td><?php //echo $drxassessment_answer_result; ?></td> -->
                          <td><?php echo $correct_answer_result; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><b>OVERALL SCORE:</b></td>
                          <td><?php echo $overallScore; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><b>TOTAL CORRECT ANSWER:</b></td>
                          <td><?php echo $countCorrectAnswer; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td><b>TOTAL WRONG ANSWER:</b></td>
                          <td><?php echo $countWrongAnswer; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <!-- <tr>
                          <td><b>TOTAL QUESTION:</b></td>
                          <td><?php //echo $countFetchQuestions; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr> -->
                        <!-- <tr>
                          <td><b>STATUS:</b></td>
                          <td><?php //echo $assessmentStatus; ?></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr> -->
                    </tbody>
                  </table>
                <div class="modal-footer">
                 <a href="../../../../../../config/savage/" class="btn btn-success"><i class="fa fa-check-circle"></i> OK</a>
                </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- End - Student Assessment Result -->

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
    <link href="../../../../../dist/modal/modal.css" rel="stylesheet">
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../../../assets/images/<?php echo $drxassessmentprofilepic; ?>" alt="user" class="rounded-circle" width="31" height="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="../../../profile/"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
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

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span></a></li>

												<li class="active sidebar-item"> <a class="active sidebar-link waves-effect waves-dark sidebar-link" href="../../" aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span class="hide-menu">Assessment</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../history/" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../profile/" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Profile</span></a></li>

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
                    <form method="POST" enctype="multipart/form-data">

                        <input type="hidden" id="drx_status" name="drx_status">
                        <input type="hidden" id="drx_key" name="drx_key">

                        <!-- <h4 class="text-center"><?php //echo $drxassessment_domain_name; ?></h4> -->
                        <?php
                        // $checkEmptyTable = "SELECT drxassessment_question_total FROM drxassessment_assessment_domains WHERE drxassessment_domain_name = :drxassessment_domain_name";
                        // $resultEmpty = $connection->prepare($checkEmptyTable);
                        // $resultEmpty->execute( array('drxassessment_domain_name' => $drxassessment_domain_name));
                        // $checkAssessment = $resultEmpty->fetchColumn();
                        // if ($checkAssessment === '0')
                        // {
                        //   echo "<br />
                        //         <span class='badge badge-danger' style='font-size: 15px; font-weight: bolder;'>
                        //           <i class='fas fa-exclamation-circle'></i> NO ASSESSMENT AVAILABLE.
                        //         </span>
                        //        ";
                        // }
                        // else
                        // {
                        $resultdomain = $connection->prepare("SELECT DISTINCT drxassessment_domain_name FROM drxassessment_assessment_domains");
                        $resultdomain->execute();
                                 while ($rowd = $resultdomain->fetch(PDO::FETCH_ASSOC))
                                 {
                                        $domain_name = $rowd['drxassessment_domain_name'];

                        ?>

                        <!-- <div class="form-group row" style="margin-top: 10%;"> -->
                                <!-- DOMAIN NAME -->
                                <!-- <label class="col-sm-3 text-right control-label col-form-label">
                                  <h3><?php //echo $domain_name; ?></h3>
                                </label> -->
                                <input type="hidden" name="drxassessment_domain_student[]" value="<?php echo $domain_name; ?>">
                        <!-- </div> -->

                        <?php
                        $result2 = $connection->prepare("SELECT * FROM drxassessment_assessment
                                                         WHERE drxassessment_domain = '$domain_name'
                                                         ORDER BY RAND()
                                                       ");
                        $result2->execute();
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

                            <div class="form-group row" style="margin-right: 20%;">
                                    <strong class="col-sm-3 text-right control-label col-form-label" style="color: #000;">Question</strong>
                                    <div class="col-sm-9" style="color: #000;">
                                            <input type="text" class="form-control" id="drxassessment_question_student" name="drxassessment_question_student[]" value="<?php echo $drxassessment_question1; ?>" style="color: #000; width: 100%;" readonly>
                                    </div>
                            </div>

                            <div class="form-group row" style="margin-right: 20%;">
                                <strong class="col-sm-3 text-right control-label col-form-label" style="color: #000;">Choices</strong>
                                    <div class="col-sm-9">
                                      <!-- multiple="multiple" -->
                                        <select class="form-control is-valid" name="drxassessment_student_answer[]" id="drxassessment_student_answer" style="color: #000;" required>
                                            <option value="" disabled selected>--Select Your Answer---</option>
                                            <option value="<?php echo $drxassessment_q1_answer_1; ?>"><?php echo $drxassessment_q1_answer_1; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_2; ?>"><?php echo $drxassessment_q1_answer_2; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_3; ?>"><?php echo $drxassessment_q1_answer_3; ?></option>
                                            <option value="<?php echo $drxassessment_q1_answer_4; ?>"><?php echo $drxassessment_q1_answer_4; ?></option>
                                        </select>
                                    </div>
                            </div> <br /> <br />

                        <?php //} } if ($checkAssessment != '0') {
                        } }
                        ?>

                        <div class="modal-footer">
                              <button type="submit" name="drx_btn_start_exam" class="btn btn-success">Submit</button>
                        </div>
                        <?php   ?>

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

    <!-- Modal -->
    <script type='text/javascript'>
    $(function(){
        // var overlay = $('<div id="overlay"></div>');
        // overlay.show();
        // overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });

        $('.x').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });
    });
    </script>

</body>

</html>
