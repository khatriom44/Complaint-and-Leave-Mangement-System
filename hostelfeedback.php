<?php include('header_hostel.php'); ?>
<?php
    if(isset($_POST['bupdate']))
    {
        $sno = $_POST['sno'];
        $feedback = $_POST['feedback'];
      
        $sql = "UPDATE `hostelrequest` SET feedback='$feedback' WHERE `sno` = '$sno'";
     
        $run = mysqli_query($con,$sql);

        if($run)
        {
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='hostelindex.php';
            </script>");
        } 
    }
    ?>
      <div class="main-panel">
        <div class="content-wrapper">
            
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                  <form action='' method='POST'>
                  <div class="row">
                    <div class="col-sm-12" style="background-color: white;padding: 20px;">
  
                      <h5 style="text-align: center;background-color: blue;color:white;padding: 10px;">Submit Your Feedback</h5>
  
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="comment">Submit Your Feedback:</label>
                            <textarea class="form-control" rows="5" name='feedback' id="comment" required></textarea>
                          </div>
                          <?php $gg = $_GET['id']; ?>
                          <input type='hidden' name='sno' value='<?php echo $gg; ?>'>
                            
                          <button type="submit" name='bupdate' class="btn btn-primary btn-block">Submit Feedback</button>
                        </div> 
                      </div>     
                    </div>  
                  </div>
                </form>
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

