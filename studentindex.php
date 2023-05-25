<?php include('header_student.php'); ?>

    
    
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
                <?php
                $stu=mysqli_query($con,"select * from `holiday` WHERE student_sno = $user_id");
                $student=mysqli_num_rows($stu);
                $stu1=mysqli_query($con,"select * from `hostelrequest` WHERE student_sno = $user_id");
                $student1=mysqli_num_rows($stu1);
                ?>
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="padding:15px;border-left: 5px solid blue;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left" style="color:blue;">Total Request For Leaves</p>
                      <h4 class="mb-0"><?php echo $student; ?></h4>
                    </div>
                    <i class="typcn typcn-document-text menu-icon" style="color:blue;font-size: 50px;display:none;"></i>
                  </div>
                   </div>
              </div>
            </div>
            
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="padding:15px;border-left: 5px solid blue;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left"  style="color:blue;">Total Request Submit To Hostel</p>
                      <h4 class="mb-0"><?php echo $student1; ?></h4>
                    </div>
                    <i class="typcn typcn-document-text menu-icon" style="color:blue;font-size: 50px;display:none;"></i>
                  </div>
                   </div>
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

