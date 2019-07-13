<?php
session_start();
include("../config/common/asdasf9z09x0c90zx90123.php");

if (!empty($_POST['drxassessment_username'])) {
    $drxassessment_username = $_POST['drxassessment_username'];
} else {
    $drxassessment_username = "";
}

if (!empty($_POST['drxassessment_password'])) {
    $drxassessment_password = $_POST['drxassessment_password'];
		// $drxassessment_password = hash("sha256", $drxassessment_password);
} else {
    $drxassessment_password = "";
}

if (isset($_POST['drx_login_submit'])) {

  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$drx_login = $connection->prepare("SELECT * FROM drxassessment_users WHERE
													drxassessment_username = :drxassessment_username AND
													drxassessment_password = :drxassessment_password
												");
	$drx_login->execute(
      array(
          'drxassessment_username'      		 	 => $drxassessment_username,
          'drxassessment_password'      		   => $drxassessment_password
      )
  );
  // $drx_login->fetchAll();
	$row = $drx_login->fetch(PDO::FETCH_ASSOC);
  $drxassessment_status = $row['drxassessment_status'];
  $drxassessment_exam = $row['drxassessment_exam'];

  	if ($row) {
       $_SESSION['drx_welcome'] = 1;
       $_SESSION['drxassessmentid'] = $row['drxassessment_id'] ;
  		 $_SESSION['drxassessmentcode'] = $row['drxassessment_code'] ;
  		 $_SESSION['drxassessmentname'] = $row['drxassessment_name'] ;
       $_SESSION['drxassessmentcontactnumber'] = $row['drxassessment_contactnumber'] ;
       $_SESSION['drxassessmentemail']=$row['drxassessment_email'] ;
       $_SESSION['drxassessmentusername']=$row['drxassessment_username'] ;
       $_SESSION['drxassessmentpassword']=$row['drxassessment_password'] ;
       $_SESSION['drxassessmentposition']=$row['drxassessment_position'];
       $_SESSION['drxassessmentprofilepic']=$row['drxassessment_profile_pic'];
       $_SESSION['drxch3ck5ecur1ty']="z01nxc98zxncnzx12131102930190293019203910920391";
       $position = $row['drxassessment_position'];

       if ($drxassessment_status == 1)
       {
           if ($position === "4dm1n15t4t0r")
           {
               header("Location: main/teacher");
          		 exit();
           }
           else if ($position === "5tud3nt")
           {
               if ($drxassessment_exam == 0)
               {
                   header("Location: main/student");
              		 exit();
               }
               else
               {
                   echo "<script>alert('You have already taken an exam. Please contact Administrator.');</script>";
               }
           }
       }
       else
       {
           echo "<script>alert('User are not yet activated. Please contact Administrator.');</script>";
       }

  	}
    else
    {
  		 echo "<script>alert('incorrect Password!'); window.location.href='main/../';</script>";
  		 exit();
  	}

}
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png"> -->
    <title>D'Rx E-Diagnostic Assessment</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <!-- <span class="db"><img src="assets/images/logo.png" alt="logo" /></span> -->
                        <span class="db" style="color: #fff; font-size: 25px;">D'Rx E-Diagnostic Assessment</span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform" method="POST">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="drxassessment_username" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="drxassessment_password" required="">
                                </div>
                                <span class="text-white">Not yet registered? <a href="../">Register here</a></span>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <!-- <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button> -->
                                        <center>
                                        <button class="btn btn-success" name="drx_login_submit" type="submit" style="font-size: 20px; height: 50px; width: 200px;">Login</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>
