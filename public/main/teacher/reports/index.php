<?php
session_start();

if (!empty($_SESSION['drxch3ck5ecur1ty'])) {
	  $drxch3ck5ecur1ty = $_SESSION['drxch3ck5ecur1ty'];
} else {
		$drxch3ck5ecur1ty = "";
}

if ($drxch3ck5ecur1ty!="z01nxc98zxncnzx12131102930190293019203910920391") {
    header('Location: ../../../');
    exit();
}

$drx_count = 0;
$reportQuery = "";
$reportFetchAll = "";
$reportTitle = "";

include("../../../../config/common/asdasf9z09x0c90zx90123.php");
include("fetch_report.php");

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

    <link href="../../../dist/charts/Chart.css" rel="stylesheet">
    <link href="../../../dist/charts/Chart.min.css" rel="stylesheet">

    <style type="text/css">
      #chart-container {
        width: 50%;
        height: auto;
        margin: auto;
      }
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" height="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">

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

                        <li class="sidebar-item"> <a class=" sidebar-link waves-effect waves-dark sidebar-link" href="../../../main/teacher/" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Assessment </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="../assessment/" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Assessment </span></a></li>
                                <li class="sidebar-item"><a href="../sequence/" class="sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Sequence of Assessment </span></a></li>
                            </ul>
                        </li> -->

												<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../assessment/" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Manage Assessment </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../usersmanagement/" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Users Management</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../history/" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="active sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../reports/" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Reports</span></a></li>

                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../rankings/" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Ranking</span></a></li> -->

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
                        <h4 class="page-title">Reports</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../reports/">Reports</a></li>
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

                <!-- <form method="POST">
                    <div class="row">
                        <div class="col-xs-5 col-sm-5 col-md-5">
                          <div class="form-group">
                            <label>Domain</label>
                            <select class="form-control" name="report_type" id="report_type" onchange='this.form.submit()'>
                                <option value="" disabled selected>Select Option</option>
                                <option value="All Domains">All Domains</option>
                                <option value="Number Sense">Number Sense</option>
                                <option value="Memorization of Arithmetic Facts">Memorization of Arithmetic Facts</option>
                                <option value="Accurate Calculation">Accurate Calculation</option>
                                <option value="Fluent Calculation">Fluent Calculation</option>
                                <option value="Mathematical Reasoning and Application">Mathematical Reasoning and Application</option>
                            </select>
                          </div>
                        </div>
                    </div>
               </form> -->


			<div class="card-body">
			<div class="table-responsive">
                <h3 class="text-center"><?php echo $reportTitle; ?></h3>
					<table id="zero_config" class="table table-striped table-bordered">
							<thead>
									<tr>
										<th class="text-center">#</th>
										<th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Overall Score</th>
                                        <th class="text-center">Number Sense</th>
                                        <th class="text-center">Memorization of Arithmethic Facts</th>
                                        <th class="text-center">Accurate Calculation</th>
                                        <th class="text-center">Fluent Calculation</th>
										<th class="text-center">Mathematical Reasoning and Application</th>
										<th class="text-center">Status</th>
										<th class="text-center">Start of Assessment</th>
										<th class="text-center">End of Assessment</th>
									</tr>
							</thead>
							<tbody>
								   <?php
									 $result = $connection->prepare($reportFetchDomains);
									 $result->execute();
                                     while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                         $drx_count++;
    									 $user_id = $row['user_id'];
    									 $user_email = $row['user_email'];
    									 $user_name = $row['user_name'];
    									 $overall_score = $row['r_overall_score'];
    									 $start_at = $row['start_at'];
    									 $end_at = $row['end_at'];
                                         $number_sense = $row['number_sense'];
                                         $memorization_of_arithmetic_facts = $row['memorization_of_arithmetic_facts'];
                                         $accurate_calculation = $row['accurate_calculation'];
                                         $fluent_calculation = $row['fluent_calculation'];
                                         $mathematical_reasoning_and_applications = $row['mathematical_reasoning_and_applications'];
                                    ?>
									<tr>
										<td class="text-center"><?php echo $drx_count; ?></td>
										<td class="text-center"><?php echo $user_name; ?></td>
                                        <td class="text-center"><?php echo $user_email; ?></td>
                                        <td class="text-center"><?php echo $overall_score; ?></td>
                                        <td class="text-center"><?php echo $number_sense; ?>%</td>
                                        <td class="text-center"><?php echo $memorization_of_arithmetic_facts; ?>%</td>
                                        <td class="text-center"><?php echo $accurate_calculation; ?>%</td>
                                        <td class="text-center"><?php echo $fluent_calculation; ?>%</td>
										<td class="text-center"><?php echo $mathematical_reasoning_and_applications; ?>%</td>

										<td class="text-center">
											<?php
											if ($overall_score <= 75)
											{
												  echo "Failed";
											} else if ($overall_score >= 75)
											{
													echo "Passed";
											}
											?>
										</td>
										<td class="text-center"><?php echo $start_at; ?></td>
										<td class="text-center"><?php echo $end_at; ?></td>
									</tr>
								<?php } ?>
							</tbody>
					</table>
                    </div>
					<button id="csv" class="btn btn-primary"><i class="fa fa-print"></i> Export to Excel</button>&nbsp;
					<button id="pdf" class="btn btn-danger"><i class="fa fa-print"></i> Save as PDF</button> <br /> <br /><br /> <br />

                  <h3 class="text-center">Overall Student Assessment</h3>
                  <div id="chart-container" style="height: 100%; width: 100%;">
                    <canvas id="report_chart"></canvas>
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
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
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
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

		<script>
    function viewHistoryAssessment(id, pic, name, email)
    {
          $("#assessmentModalLabel").html("Assessment History of '" + name + "'") ;
          $("#drxassessment_email_value").html(email) ;
    }
    </script>

		<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
		<script src="../../../dist/table-export/tableHTMLExport.js"></script>
		<script>
		  $('#json').on('click',function(){
		    $("#zero_config").tableHTMLExport({type:'json',filename:'Assessment_Reports.json'});
		  });
		  $('#csv').on('click',function(){
		    $("#zero_config").tableHTMLExport({type:'csv',filename:'Assessment_Reports.csv'});
		  });
		  $('#pdf').on('click',function(){
		    $("#zero_config").tableHTMLExport({type:'pdf',filename:'Assessment_Reports.pdf'});
		  });
		</script>

    <script type="text/javascript" src="../../../dist/charts/Chart.min.js"></script>
    <script type="text/javascript" src="../../../dist/charts/Chart.bundle.js"></script>
    <script type="text/javascript" src="../../../dist/charts/Chart.bundle.min.js"></script>
    <script type="text/javascript" src="../../../dist/charts/Chart.js"></script>
    <script type="text/javascript" src="app.js"></script>

</body>

</html>
