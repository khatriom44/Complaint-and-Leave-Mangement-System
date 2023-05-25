<?php include('header_teacher.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        
        <div class="content-wrapper">
            
           
                
                  
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
            <?php
                $stu=mysqli_query($con,"select * from `holiday` WHERE teacher_sno = $user_id");
                $student=mysqli_num_rows($stu);
                $stu1=mysqli_query($con,"select * from `hodrequest` WHERE sno = $user_id");
                $student1=mysqli_num_rows($stu1);
                ?>
              <div class="row">
                
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="padding:15px;border-left: 5px solid blue;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left" style="color:blue;">Total Request Come  Form Student's</p>
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
                      <p class="mb-2 text-md-center text-lg-left"  style="color:blue;">Total Request Submit To HOD</p>
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

