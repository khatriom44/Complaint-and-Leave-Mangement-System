 <?php
$con = mysqli_connect("localhost","root","","c_l_manage");
// $con = mysqli_connect("localhost","root","","hostel");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
date_default_timezone_set("Asia/Calcutta");
    $cdate= date('Y-m-d-H-i');
?> 