<?php include('header_student.php'); ?>

     
<?php

if(isset($_POST['lsubmit']))
{
  $subject = $_POST['hostel'];
  $teacher = $_POST['warden'];
  $issue = $_POST['issue'];
  $detail = $_POST['detail'];
  $mobile = $_POST['mobile'];
  $roomno = $_POST['roomno'];
  $blockno = $_POST['blockno'];
  $cc = strlen($mobile);
// print_r($comment);
// print_r($hdate);
// die();
    if($cc=='10')
    {
      $wql = "SELECT * FROM hostels WHERE sno = '$subject'";
      $wrest = mysqli_query($con, $wql) or die( mysqli_error($con));
      while($wjjw=mysqli_fetch_array($wrest))
      { $subject_name= $wjjw['name'];
        $eql = "SELECT * FROM hostel WHERE sno = '$teacher'";
        $erest = mysqli_query($con, $eql) or die( mysqli_error($con));
        while($ejjw=mysqli_fetch_array($erest))
        { $teacher_name= $ejjw['name'];
          $sql = "INSERT INTO hostelrequest (student_sno,student_name,hostel_sno,hostel_name,warden_sno,warden_name,issue,detail,date,number,roomno,blockno)
          VALUES ('$user_id','$uname','$subject','$subject_name','$teacher','$teacher_name','$issue','$detail','$date','$mobile','$roomno','$blockno')";
        }
      }
        $run = mysqli_query($con,$sql);
    
    	if($run)
    	{
        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='submitrequesttohostel.php';
        </script>");
    	}
        else 
    	{
    		echo "Error: record not Added " ;
    	}
    }
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mobile Number Must 10 Digit');
    window.location.href='submitrequesttohostel.php';
    </script>");
    }
}
?> 
	<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.php -->
     
      
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
		      <li class="nav-item">
            <a class="nav-link" href="studentindex.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="leaverequesttoteacher.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Leave Request To <br>Teacher's </span>
            </a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="submitrequesttohostel.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Submit Complaint <br> Issues</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Logout</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="change_password_student.php">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Change Password</span>
            </a>
          </li>
          
		  
         </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        
        <div class="content-wrapper">
            
           
                
                  
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                
              <div class="row">
                
                <div class="col-sm-12">
                <h5 style="background-color: blue;color:white;padding: 15px;text-align: center;">Submit Request For Hostel Issues</h5>
                </div>

                <form action='' method="POST">
                <div class="col-sm-12" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="usr">Please Choose Hostel Name : </label>
                            <select class="form-control" style="border: 1px solid #f3f3f3;
                            font-weight: 400;
                            font-size: 0.875rem;padding: 17px;" name='hostel' id="category_id" onchange="get_sub_cat()" required>
                              <option></option>
                                <?php
                                    $sql = "SELECT * FROM hostels";
                                    $result = mysqli_query($con, $sql);
                                        while($row = mysqli_fetch_assoc($result)) 
                                        {
                                ?>
                                    <option value='<?php echo $row['sno'];?>'><?php echo $row['name'];?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="usr">Please Choose Warden  Name : </label>
                            <select class="form-control" id="sub_category_id" name='warden' style="border: 1px solid #f3f3f3;
                            font-weight: 400;
                            font-size: 0.875rem;padding: 17px;" required>
                              </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="usr">Please Enter Issues: </label>
                            <input type="text" name='issue' class="form-control" id="usr" required>
                        </div>
                    </div>

                    
                    <div class="col-sm-12">
                    <div class="form-group">
                        <label for="comment">Discribe Issues In Details :</label>
                        <textarea class="form-control" name='detail' rows="2" id="comment" required></textarea>
                    </div>
                    </div>
                    
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="comment">Block No. :</label>
                        <input type="text" name='blockno' class="form-control" id="usr">
                    </div>
                    </div>
                    
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="comment">Room No. :</label>
                        <input type="text" name='roomno' class="form-control" id="usr">
                    </div>
                    </div>
                    
                    <div class="col-sm-4">
                    <div class="form-group">
                        <label for="comment">Mobile No. :</label>
                        <input type="number" name='mobile'  class="form-control" id="usr" required>
                    </div>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <button type="submit"  name='lsubmit' class="btn btn-primary btn-block" style="margin-top: 30px;">Submit Request</button>
                    </div>      
                  </div>    
                </div>   
              </form>
                
                <div class="col-sm-12" style="background: white;padding: 35px;margin-top: 40px;">
                    <h5 style="background-color: blue;color:white;text-align: center;padding:15px;">Previous History</h5>
                    <div class="table-responsive" style="margin-top: 20px;"> 
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Sno</th>
                            <th>Hostel Name</th>
                            <th>Warden Name</th>
                            <th>Issues</th>
                            <th>Details</th>
                            <th>Block No</th>
                            <th>Room No</th>
                            <th>Number</th>
                            <th>Date Issues Raise</th>
                            <th>Feedback From Warden</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $hql = "SELECT * FROM hostelrequest WHERE student_sno = '$user_id' ORDER BY sno DESC";
                          $hrest = mysqli_query($con, $hql) or die( mysqli_error($con));
                          $i = 1;
                          while($hjw=mysqli_fetch_array($hrest))
                          {
                          ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $hjw['hostel_name']; ?></td>
                            <td><?php echo $hjw['warden_name']; ?></td>
                            <td><?php echo $hjw['detail']; ?></td>
                            <td><?php echo $hjw['issue']; ?></td>
                            <th><?php echo $hjw['blockno']; ?></th>
                            <th><?php echo $hjw['roomno']; ?></th>
                            <th><?php echo $hjw['number']; ?></th>
                            <td><?php echo $hjw['date']; ?></td>
                            <td><?php echo $hjw['feedback']; ?></td>
                          </tr>
                          <?php $i++; }?>
                        </tbody>
                    </table>
                    </div>
                </div>    
                
              </div>
              
            </div>
            
          </div>

         

           

               

         

        </div>
        
        <!-- content-wrapper ends -->
        
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script>
			function get_sub_cat(){
				var category_id=jQuery('#category_id').val();
				console.log(category_id);
				jQuery.ajax({
					url:'get_sub_warden.php',
					type:'post',
					data:'category_id='+category_id,
					success:function(result){
						jQuery('#sub_category_id').html(result);
					}
				});
			}
		</script>
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  
 
  

  
  <!-- End custom js for this page-->
</body>



</html>

