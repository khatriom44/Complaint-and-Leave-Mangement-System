<?php include('header_teacher.php'); ?>
      <div class="main-panel">
        
        <div class="content-wrapper">
            
           
                
                  
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                
            <div class="row">
            
            
            <div class="col-sm-12">
            <div class="row">
                   
                
                <div class="col-sm-12" style="background-color: white;padding: 20px;">

                    <h5 style="text-align: center;background-color: blue;color:white;padding: 10px;">Recived Request From Students</h5>

                    <div class="table-responsive" style="margin-top: 20px;"> 
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Sno</th>
                                <th>Action</th>
                                <th>Your Feedback</th>
                                <th>Subject Name </th>
                                <th>Student Name</th>
                                <th>Number Of Holiday</th>
                                <th>Date From Holiday</th>
                                <th>Reason Of Holiday</th>
                                <th>Comment</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $hql = "SELECT * FROM holiday WHERE teacher_sno = '$user_id' ORDER BY sno DESC";
                            $hrest = mysqli_query($con, $hql) or die( mysqli_error($con));
                            $i = 1;
                            while($hjw=mysqli_fetch_array($hrest))
                            {
                            ?>
                            <tr>
                            <td><?php echo $i; ?></td>
                            <td><a href="postfeedbackbyteacher.php?id=<?php echo $hjw['sno']; ?>"><button type="button" class="btn btn-primary btn-xs">Post Feedback</button></a></td>
                            <td><?php echo $hjw['feedback']; ?></td>
                            <td><?php echo $hjw['subject_name']; ?></td>
                            <td><?php echo $hjw['student_name']; ?></td>
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

