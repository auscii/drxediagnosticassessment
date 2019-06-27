<?php
session_start();
include("../../../../config/common/asdasf9z09x0c90zx90123.php");

if (!empty($_SESSION['drxassessmentname'])) {
    $drxassessmentname = $_SESSION['drxassessmentname'];
} else {
    $drxassessmentname = "";
}


if(isset($_POST['drx_status'])){
    $drx_status = $_POST['drx_status'];
} else {
    $drx_status = "";
}

if(isset($_POST['drx_key'])){
    $drx_key = $_POST['drx_key'];
} else {
    $drx_key = "";
}

if (isset($_POST['drx_clear_status'])) {
    $drx_clear_status = $_POST['drx_clear_status'];
} else {
    $drx_clear_status = "";
}

if(isset($_POST['drxassessment_order'])){
    $drxassessment_order = $_POST['drxassessment_order'];
} else {
    $drxassessment_order = "";
}

$drxassessment_status = 1;
$drxassessment_statuz = 0;

if($drx_status == "sendorderassessment"){
    // echo "order= " . $drxassessment_order . " id= " . $drxassessment_id. " ordervalue= " . $drxassessmentordervalue; exit();
    // echo 'key= ' . $drx_key . " order= " . $drxassessment_order; exit();
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = $connection->prepare("SELECT drxassessment_order_no, drxassessment_id, drxassessment_order_value
                                    FROM drxassessment_order_roles
                                    WHERE drxassessment_order_no = '$drxassessment_order'");
    $result->execute();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
               $drxassessment_id = $row['drxassessment_id'];
               $drxassessmentordervalue = $row['drxassessment_order_value'];


               $drx_statement_s = $connection->prepare("UPDATE drxassessment_order_roles SET
                                                           drxassessment_status = :drxassessment_status
                                                        WHERE drxassessment_id = :drxassessment_id");
               $drx_statement_s->execute(
                  array(
                      'drxassessment_status'                   => $drxassessment_status,
                      'drxassessment_id'                       => $drxassessment_id
                      )
                  );
    $drx_statement = $connection->prepare("UPDATE drxassessment_assessment SET
                                                 drxassessment_order = :drxassessment_order,
                                                 drxassessment_order_value = :drxassessment_order_value,
                                                 drxassessment_status = :drxassessment_status
                                           WHERE drxassessment_id = :drxassessment_id");
    $drx_statement->execute(
        array(
            'drxassessment_order'                   => $drxassessment_order,
            'drxassessment_order_value'             => $drxassessmentordervalue,
            'drxassessment_status'                  => $drxassessment_status,
            'drxassessment_id'                      => $drx_key
        )
    );

  }
}
$drxassessment_order_valuez = "";
if ($drx_clear_status = "clearallassessment") {
    $drx_statement_c_a = $connection->prepare("UPDATE drxassessment_assessment SET
                                                      drxassessment_status = :drxassessment_status,
                                                      drxassessment_order = :drxassessment_order,
                                                      drxassessment_order_value = :drxassessment_order_value");
    $drx_statement_c_a->execute(
        array(
            'drxassessment_status'                  => $drxassessment_statuz,
            'drxassessment_order'                   => $drxassessment_statuz,
            'drxassessment_order_value'             => $drxassessment_order_valuez
        )
    );

    $drx_statement_c_a_r = $connection->prepare("UPDATE drxassessment_order_roles SET
                                                        drxassessment_status = :drxassessment_status");
    $drx_statement_c_a_r->execute(
        array(
            'drxassessment_status'                  => $drxassessment_statuz
        )
    );
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" height="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
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

                        <li class="active sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Assessment </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="../assessment/" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Assessment </span></a></li>
                                <li class="sidebar-item"><a href="../sequence/" class="active sidebar-link"><i class="mdi mdi-note"></i><span class="hide-menu"> Sequence of Assessment </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">History</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Reports</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Ranking</span></a></li>

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
                        <h4 class="page-title">Sequence of Asssement</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Asssement</li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="../sequence/">Sequence of Asssement</a></li>
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
                <button type="submit" data-toggle="modal" data-target="#clearAssessmentModal" onclick="clearAllOrder();" name="drx_submit_btn" class="btn btn-secondary btn-mg" style="margin-bottom: 2%;"><i class="fas fa-ban"></i> CLEAR ALL</button>
									<div class="table-responsive">
											<table id="zero_config" class="table table-striped table-bordered">
													<thead>
															<tr>
																	<th class="text-center">#</th>
																	<th class="text-center">Question</th>
																	<th class="text-center">(A)</th>
																	<th class="text-center">(B)</th>
																	<th class="text-center">(C)</th>
																	<th class="text-center">(D)</th>
																	<th class="text-center">Date Created</th>
																	<th class="text-center">Action</th>
															</tr>
													</thead>
													<tbody>
														<?php
	                          $drx_count = 0;
	                          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	                          $result = $connection->prepare("SELECT * FROM drxassessment_assessment ORDER BY drxassessment_order ASC");
	                          $result->execute();
	                              while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
	                                     $drx_count++;
	                                     $drxassessment_id = $row['drxassessment_id'];
	                                     $drxassessment_question1 = $row['drxassessment_question1'];
																			 $drxassessment_q1_answer_1 = $row['drxassessment_q1_answer_1'];
	                                     $drxassessment_q1_answer_2 = $row['drxassessment_q1_answer_2'];
	                                     $drxassessment_q1_answer_3 = $row['drxassessment_q1_answer_3'];
	                                     $drxassessment_q1_answer_4 = $row['drxassessment_q1_answer_4'];
	                                     $drxassessment_created_at = $row['drxassessment_created_at'];
                                       $drxassessmentorder = $row['drxassessment_order'];
                                       $drxassessmentordervalue = $row['drxassessment_order_value'];
	                                     $drxassessmentstatus = $row['drxassessment_status'];
	                          ?>
															<tr>
																<td class="text-center">
                                  <?php
                                    if(empty($drxassessmentordervalue)) {
                                        echo "Not set";
                                    } else {
                                        echo $drxassessmentordervalue;
                                    }
                                  ?>
                                </td>
																<td class="text-center"><?php echo $drxassessment_question1; ?></td>
																<td class="text-center"><?php echo $drxassessment_q1_answer_1; ?></td>
																<td class="text-center"><?php echo $drxassessment_q1_answer_2; ?></td>
																<td class="text-center"><?php echo $drxassessment_q1_answer_3; ?></td>
																<td class="text-center"><?php echo $drxassessment_q1_answer_4; ?></td>
																<td class="text-center"><?php echo $drxassessment_created_at; ?></td>
																<td class="text-center" style="width: 200px;">

                                <?php if ($drxassessmentstatus === '0') { ?>
                                  <button type="button" data-toggle="modal" data-target="#assessmentModal" class="btn btn-primary btn-mg"
                                  onclick="setAssessmentOrder('<?php echo $drxassessment_id ; ?>',
                                                              '<?php echo $drxassessment_question1 ; ?>',
                                                              '<?php echo $drxassessment_q1_answer_1 ; ?>',
                                                              '<?php echo $drxassessment_q1_answer_2 ; ?>',
                                                              '<?php echo $drxassessment_q1_answer_3 ; ?>',
                                                              '<?php echo $drxassessment_q1_answer_4 ; ?>');">
                                  <i class="fas fa-sort-numeric-down"></i> SET ORDER
                                  </button>
                                <?php } else if ($drxassessmentstatus === '1') { ?>
                                  <button type="button" class="btn btn-warning btn-mg" disabled>
                                  <i class="fas fa-sort-numeric-down"></i> ASSIGNED
                                  </button>
                                <?php } ?>

																</td>
															</tr>
														<?php } ?>

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


    <div class="modal fade" id="assessmentModal" tabindex="-1" role="dialog" aria-labelledby="assessmentModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
						<div class="modal-content">

								<div class="modal-header">
										<h5 class="modal-title" id="assessmentModalLabel"></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>

								<div class="modal-body">
									<form method="POST">

										<input type="hidden" id="drx_status" name="drx_status">
										<input type="hidden" id="drx_key" name="drx_key">


										<div class="form-group">
												<label id="drx_question" class="col-sm-3 text-right control-label col-form-label"></label>
												<!-- <div class="col-sm-9"> -->
                        <select class="form control" name="drxassessment_order" id="drxassessment_order">
                          <option value="" disabled selected>Select Order</option>
                          <?php
                              $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	                          $result = $connection->prepare("SELECT drxassessment_order_no, drxassessment_order_value FROM drxassessment_order_roles WHERE drxassessment_status = 0");
  	                          $result->execute();
  	                          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                              $drxassessment_order_no = $row['drxassessment_order_no'];
                              $drxassessment_order_value = $row['drxassessment_order_value'];
                          ?>
                          <option value="<?php echo $drxassessment_order_no; ?>"> <?php echo $drxassessment_order_value; ?> </option>
                          <?php } ?>
                        </select>
												<!-- </div> -->
										</div>


                    <center>
											  <button type="submit" class="btn btn-success">Submit</button>
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </center>

									</form>

								</div>

						</div>
				</div>
		</div>




    <div class="modal fade" id="clearAssessmentModal" tabindex="-1" role="dialog" aria-labelledby="clearAssessmentModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
						<div class="modal-content">

								<div class="modal-header">
										<h5 class="modal-title" id="clearAssessmentModalLabel"></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>

								<div class="modal-body">
									<form method="POST">

										<input type="hidden" id="drx_clear_status" name="drx_clear_status">
										<input type="hidden" id="drx_clear_key" name="drx_clear_key">

                    <h3 class="text-center">Are you sure you want to clear all sequence of Asssement?</h3>

                    <center>
  									  <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Yes</button> &nbsp;
  										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> No</button>
                    </center>

									</form>
								</div>
						</div>
				</div>
		</div>



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
    // $('#zero_config').DataTable();

    function setAssessmentOrder(key, q1, a1, a2, a3, a4)
    {
          $("#assessmentModalLabel").html("Set Assessment Order") ;
          $("#drx_status").val("sendorderassessment") ;
          $("#drx_key").val(key) ;
          $("#drx_question").html(q1) ;

          $("#drxassessment_question1").val(q1) ;
          $("#drxassessment_q1_answer_1").val(a1) ;
          $("#drxassessment_q1_answer_2").val(a2) ;
          $("#drxassessment_q1_answer_3").val(a3) ;
          $("#drxassessment_q1_answer_4").val(a4) ;
    }

    function clearAllOrder(){
          $("#clearAssessmentModalLabel").html("Clear All") ;
          $("#drx_clear_status").val("clearallassessment") ;
    }

    </script>

</body>

</html>
