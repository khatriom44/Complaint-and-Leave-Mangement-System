<?php

session_start();
include('config.php');
if(isset($_REQUEST['submit']))
{
    if(isset($_POST['op'])&& isset($_POST['np']) && isset($_POST['c_np'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $op = validate($_POST['op']);
        $np = validate($_POST['np']);
        $c_np = validate($_POST['c_np']);

        if(empty($op)){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Old Password is required');
            window.location.href='change_password_admin.php';
            </script>");
        }
        elseif(empty($np)){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('New Password is required');
            window.location.href='change_password_admin.php';
            </script>");
        }
        elseif($np !== $c_np){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('The Confirmation Password does not match ');
            window.location.href='change_password_admin.php';
            </script>");
        }
        else{
            $email = $_SESSION['login_email_admin'];
            $sql3 = "SELECT * from `admin` WHERE name='$email'";
            $result3 = mysqli_query($con,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
            $id = $row3['id'];
            $password = $row3['password'];
            // $id = $_SESSION['id'];
            // echo $id;
            // $sql = "SELECT password FROM `student` password='$op'";
            $sql = "SELECT password FROM `admin` WHERE id='$id' AND password='$op'";
            $result = mysqli_query($con,$sql);

            if($password !== $op){
                
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Incorrect Password');
                window.location.href='change_password_admin.php';
                </script>");
            }
            else if(mysqli_num_rows($result) === 1){

                $sql1 = "UPDATE `admin` SET password='$np' WHERE id='$id'";
                mysqli_query($con,$sql1);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Change Password Successfully');
                window.location.href='login.php';
                </script>");
            }

        }
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Invalid Credentials');
        window.location.href='login.php';
        </script>");
        
        $_SESSION['error']='Invalid login';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin Panel ! Change Password</title>
		<meta name="description" content="vy software is a Dashboard & Admin Site Responsive Template by vy software." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, vy software Admin, vy software, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="vy software"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<style>
	.page-wrapper.auth-page {
    background: aliceblue;
}
	</style>
	
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text">Control Center</span>
					</a>
				</div>
				
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Change Password</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form method="POST">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Old Password</label>
													<input type="password" class="form-control" name="op" required="" id="exampleInputEmail_2" placeholder="Enter Old Password">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">New Password</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="np" required="" id="exampleInputpwd_2" placeholder="Enter New Password">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Confirm New Password</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="c_np" required="" id="exampleInputpwd_2" placeholder="Enter Confirm New Password">
												</div>
											
												<div class="form-group text-center">
													<button type="submit" name="submit" class="btn btn-info btn-success btn-rounded">Change</button>
												</div>
												
											</form>
										</div>
										<a href='../index.php' class="form-group text-center">
											<button type="submit" class="btn btn-info btn-success btn-rounded">Back</button>
										</a>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>
