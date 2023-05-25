
<?php include('config.php'); 
session_start();
if(isset($_SESSION['student']))
{ 
  	$uemail=$_SESSION['student'];

  $ql = "SELECT * FROM student WHERE email = '$uemail'";
  $rest = mysqli_query($con, $ql) or die( mysqli_error($con));
  while($jjw=mysqli_fetch_array($rest))
  {
    $user_id=$jjw['sno'];
	$uname = $jjw['name'];
	$uemail = $jjw['email'];
	$upassword = $jjw['password'];
	// $uprofile_pic = $jjw['profile_pic'];
  }
	
}
else
{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Please Login First.');
  window.location.href='loginstudent.php';
  </script>");
}
date_default_timezone_set("Asia/Calcutta");
    $date= date('d-m-Y-H-i');
?>
<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management ! Home</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
 
</head>
<body style="font-family: 'Quicksand', sans-serif;">
  <div class="container-scroller">
    
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.php">
		  <!-- <img src="images/3d logo.png"> -->
		  </a>
          <a class="navbar-brand brand-logo-mini" href="index.php"> <img src="images/3d logo.png"> </a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <!-- <img src="images/faces/face5.jpg" alt="profile"/> -->
              <span class="nav-profile-name">Student Login</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a class="dropdown-item" href='logout.php'>
                <i class="typcn typcn-eject text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="leaverequesttoteacher.php">
              <span style="font-size: 13px;">Leave Request To Teacher's </span>
              <i class="fa fa-clock-o" aria-hidden="true"></i>
            </a>
          </li>
          
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="submitrequesttohostel.php">
              <span style="font-size: 13px;"> Submit Complaint Issues </span>
              <i class="fa fa-clock-o" aria-hidden="true"></i>
            </a>
          </li>
          
        </ul>
        
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
        
      </div>
    </nav>
    <!-- partial -->