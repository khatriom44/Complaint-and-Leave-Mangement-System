<?php include('header_student.php'); ?>

        
<?php

if(isset($_POST['lsubmit']))
{
  $subject = $_POST['subject'];
  $teacher = $_POST['teacher'];
  $holiday = $_POST['holiday'];
  $hdate = $_POST['hdate'];
  $reason = $_POST['reason'];
  $mobile = $_POST['mobile'];
  $comment = $_POST['comment'];
// print_r($comment);
// print_r($hdate);
// die();
    if($holiday>0)
    {
          $wql = "SELECT * FROM subject WHERE sno = '$subject'";
          $wrest = mysqli_query($con, $wql) or die( mysqli_error($con));
          while($wjjw=mysqli_fetch_array($wrest))
          { $subject_name= $wjjw['name'];
            $eql = "SELECT * FROM teacher WHERE sno = '$teacher'";
            $erest = mysqli_query($con, $eql) or die( mysqli_error($con));
            while($ejjw=mysqli_fetch_array($erest))
            { $teacher_name= $ejjw['name'];
              $sql = "INSERT INTO holiday (student_sno,student_name,subject_sno,subject_name,teacher_sno,teacher_name,holiday,hdate,reason,comment,date)
              VALUES ('$user_id','$uname','$subject','$subject_name','$teacher','$teacher_name','$holiday','$hdate','$reason','$comment','$date')";
            }
          }
        $run = mysqli_query($con,$sql);
    
    	if($run)
    	{
        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='leaverequesttoteacher.php';
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
        window.location.href='leaverequesttoteacher.php';
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
              <span class="menu-title" style="font-family: 'Quicksand', sans-serif;">Submit Complaint<br> Issues</span>
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
                <h5 style="background-color: blue;color:white;padding: 15px;text-align: center;">Submit Request For Holiday</h5>
                </div>

                <form action='' method='POST'>
                <div class="col-sm-12" style="margin-top: 20px;">
                <div class="row">
                    
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="usr">Please Choose Subject Name : </label>
                        <select class="form-control" name='subject' style="border: 1px solid #f3f3f3;
                            font-weight: 400;
                            font-size: 0.875rem;padding: 17px;" id="category_id" onchange="get_sub_cat()" required>
                            <option></option>
                                <?php
                                    $sql = "SELECT * FROM subject";
                                    $result = mysqli_query($con, $sql);
                                        while($row = mysqli_fetch_assoc($result)) 
                                        {
                                ?>
                                    <option value='<?php echo $row['sno'];?>'><?php echo $row['name'];?></option>
                                <?php } ?>
                        </select>
                      </div>
                    </div>
                          
                    <div class="col-sm-3">
                      <div class="form-group">
                          <label for="usr">Please Choose Teacher Name : </label>
                          <select name='teacher' class="form-control" required id="sub_category_id"  style="border: 1px solid #f3f3f3;
                          font-weight: 400;
                          font-size: 0.875rem;padding: 17px;">
                              <?php
                                    $sql1 = "SELECT * FROM teacher";
                                    $result1 = mysqli_query($con, $sql);
                                        while($row1 = mysqli_fetch_assoc($result1)) 
                                        {
                                ?>
                                    <option value='<?php echo $row1['sno'];?>'></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="usr">Number Of Holiday : </label>
                            <input type="number" name='holiday' class="form-control" id="usr" required>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="usr">Date : </label>
                            <input type="date"  name='hdate' class="form-control" id="usr" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="usr">Reason Of Holiday : </label>
                            <input type="text"  name='reason' class="form-control" id="usr" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                          <label for="comment">Comment:</label>
                          <textarea class="form-control"  name='comment' rows="1" id="comment" required></textarea>
                      </div>
                    </div>

                    <div class="col-sm-4">
                        <button type="submit"  name='lsubmit' class="btn btn-primary btn-block" style="margin-top: 30px;">Submit Request</button>
                    </div>    
                  </div>    
                </div>   
              </form>
                
                <div class="col-sm-12" style="background: white;padding: 35px;">
                    <h5 style="background-color: blue;color:white;text-align: center;padding:15px;">Previous History</h5>
                    <div class="table-responsive" style="margin-top: 20px;"> 
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Sno</th>
                            <th>Teacher Feedback</th>
                            <th>Subject Name</th>
                            <th>Teacher Name</th>
                            <th>Holiday Num.</th>
                            <th>Date</th>
                            <th>Reason</th>
                            <th>Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $hql = "SELECT * FROM holiday WHERE student_sno = '$user_id'";
                          $hrest = mysqli_query($con, $hql) or die( mysqli_error($con));
                          $i = 1;
                          while($hjw=mysqli_fetch_array($hrest))
                          {
                          ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $hjw['feedback']; ?></td>
                            <td><?php echo $hjw['subject_name']; ?></td>
                            <td><?php echo $hjw['teacher_name']; ?></td>
                            <td><?php echo $hjw['holiday']; ?></td>
                            <td><?php echo $hjw['hdate']; ?></td>
                            <td><?php echo $hjw['reason']; ?></td>
                            <td><?php echo $hjw['comment']; ?></td>
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
					url:'get_sub_cat.php',
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

