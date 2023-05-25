<?php include('config.php'); 
ob_start();
session_start();

if(isset($_REQUEST['login']))
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
            window.location.href='change_password_teacher.php';
            </script>");
        }
        elseif(empty($np)){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('New Password is required');
            window.location.href='change_password_teacher.php';
            </script>");
        }
        elseif($np !== $c_np){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('The Confirmation Password does not match ');
            window.location.href='change_password_teacher.php';
            </script>");
        }
        else{
            $email = $_SESSION['login_email_teacher'];
            $sql3 = "SELECT * from `teacher` WHERE email='$email'";
            $result3 = mysqli_query($con,$sql3);
            $row3 = mysqli_fetch_assoc($result3);
            $id = $row3['sno'];
            $password = $row3['password'];
            // $id = $_SESSION['id'];
            // echo $id;
            // $sql = "SELECT password FROM `student` password='$op'";
            $sql = "SELECT password FROM `teacher` WHERE sno='$id' AND password='$op'";
            $result = mysqli_query($con,$sql);

            if($password !== $op){
                
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Incorrect Password');
                window.location.href='change_password_teacher.php';
                </script>");
            }
            else if(mysqli_num_rows($result) === 1){

                $sql1 = "UPDATE `teacher` SET password='$np' WHERE sno='$id'";
                mysqli_query($con,$sql1);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Change Password Successfully');
                window.location.href='loginasteacher.php';
                </script>");
            }

        }
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Invalid Credentials');
        window.location.href='loginteacher.php';
        </script>");
        
        $_SESSION['error']='Invalid login';
    }

// $cnt=mysqli_num_rows($qu);
// if($cnt>0)
// {
//   $_SESSION['student']=$_REQUEST['email'];
  
//   echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Login Successfully');
//     window.location.href='studentindex.php';
//     </script>");
// }
// else
// {
//     echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Invalid Credentials');
//     window.location.href='loginstudent.php';
//     </script>");
    
// $_SESSION['error']='Invalid login';
// }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Login ! Change Password</title>
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
              
              
              <h6 class="font-weight-light" style="text-align:center;font-size: 20px;">Change Password</h6>
              <form class="pt-3" method='POST' action=''>
                <div class="form-group">
                  <label for="exampleInputEmail">Old Password</label>
                  <div class="input-group">
                    <input type="password" name='op' class="form-control" id="exampleInputUsername1" required placeholder="Old Password" style="border-left: 7px solid blue;
    border-radius: 25px;">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">New Password</label>
                  <div class="input-group">
                    <input type="password" name='np' class="form-control" id="exampleInputUsername1" required placeholder="New Password" style="border-left: 7px solid blue;
    border-radius: 25px;">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Confirm New Password</label>
                  <div class="input-group">
                    <input type="password" name='c_np' class="form-control" id="exampleInputUsername1" required placeholder="Confirm New Password" style="border-left: 7px solid blue;
    border-radius: 25px;">
                  </div>
                </div>

                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type='submit' name='login'>CHANGE</button>
                </div>
                
                <a href="teacherindex.php" style="text-align: center;">Back To Teacher Page</a>
               
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
