<?php include('header_hostel.php'); ?>

      <div class="main-panel">
        
        <div class="content-wrapper">
            
           
                
                  
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                
              <div class="row">
              <?php
                $stu1=mysqli_query($con,"select * from `hostelrequest` WHERE warden_sno = $user_id");
                $student1=mysqli_num_rows($stu1);
                ?>
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body" style="padding:15px;border-left: 5px solid blue;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left" style="color:blue;">Total Request Come From Students</p>
                      <h4 class="mb-0"><?php echo $student1; ?></h4>
                    </div>
                    <i class="typcn typcn-document-text menu-icon" style="color:blue;font-size: 50px;display:none;"></i>
                  </div>
                   </div>
              </div>
            </div>


            <div class="row">
            
            
                <div class="col-sm-12">
                <div class="row">
                       
                    
                    <div class="col-sm-12" style="background-color: white;padding: 20px;">
                        <h5 style="text-align: center;padding: 10px;background-color: blue;color:white;">Feedback Recived From Teacher's</h5>
                        <div class="table-responsive" style="margin-top: 20px;"> 
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Sno</th>
                                    <th>Action</th>
                                    <th>Your Feedback</th>
                                    <th>Student  Name</th>
                                    <th>Block No</th>
                                    <th>Room No</th>
                                    <th>Mob. No.</th>
                                    <th>Date</th>
                                    <th>Issues</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 
                                  <?php 
                                  $hql = "SELECT * FROM hostelrequest WHERE warden_sno = '$user_id'";
                                  $hrest = mysqli_query($con, $hql) or die( mysqli_error($con));
                                  $i = 1;
                                  while($hjw=mysqli_fetch_array($hrest))
                                  {
                                  ?>
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><a href="hostelfeedback.php?id=<?php echo $hjw['sno']; ?>"><button type="button" class="btn btn-primary btn-xs">Post Feedback</button></a></td>
                                    <td><?php echo $hjw['feedback']; ?></td>
                                    <td><?php echo $hjw['student_name']; ?></td>
                                    <td><?php echo $hjw['blockno']; ?></td>
                                    <td><?php echo $hjw['roomno']; ?></td>
                                    <td><?php echo $hjw['number']; ?></td>
                                    <td><?php echo $hjw['date']; ?></td>
                                    <td><?php echo $hjw['issue']; ?></td>
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

