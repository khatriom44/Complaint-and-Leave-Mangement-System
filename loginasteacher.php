<?php include('config.php'); 
ob_start();
session_start();
if(isset($_REQUEST['login']))
{
$name=$_REQUEST['email'];
$password=$_REQUEST['password'];
$qu=mysqli_query($con,"select * from teacher where email='".$name."' AND password='".$password."'")or die(mysqli_error());
$row = mysqli_fetch_assoc($qu);
$cnt=mysqli_num_rows($qu);
if($cnt>0)
{
  $_SESSION['teacher']=$_REQUEST['email'];
  $_SESSION['login_email_teacher']=$row['email'];

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Successfully');
    window.location.href='teacherindex.php';
    </script>");
}
else
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Credentials');
    window.location.href='loginasteacher.php';
    </script>");
    
$_SESSION['error']='Invalid login';
}
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Teachers Login ! Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
 
 <style>
 .topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}

.center {
  position: absolute;
  top: 20%;
  width: 50%;
  text-align: center;
  font-size: 18px;
}

img { 
  width: 100%;
  height: auto;
  
}
</style>
 
</head>

<body style="font-family: 'Quicksand', sans-serif;">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          
          <div class="col-lg-6" style="background:blue;">
           
            <div class="topleft"></div>
            <div class="center" style="color:white;">
            <h2 style="display: none;"><img src="images/3d logo.png" style="height: 100%;width: 100%;"></h2></div>
          </div>
          
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-start p-3">
              
              
              <h6 class="font-weight-light" style="text-align:center;font-size: 20px;">Teacher's Login Account</h6>
              <form class="pt-3" action='' method='POST'>
                <div class="form-group">
                  <label for="exampleInputEmail">Please Enter Email ID</label>
                  <div class="input-group">
                    <input type="email" name='email' class="form-control" required id="exampleInputUsername1" placeholder="Please Enter Email ID" style="border-left: 7px solid blue;
    border-radius: 25px;">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Please Enter Password</label>
                  <div class="input-group">
                    <input type="password" name='password' class="form-control" required id="exampleInputUsername1" placeholder="Please Enter Password" style="border-left: 7px solid blue;
    border-radius: 25px;">
                  </div>
                </div>
                

                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type='submit' name='login'>LOGIN</button>
                </div>

                <a href="index.php" style="text-align: center;">Back To Home</a>
                
               
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>



</html>
