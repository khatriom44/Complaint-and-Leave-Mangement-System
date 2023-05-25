<?php include('header_teacher.php'); ?>
<?php

if(isset($_POST['submit']))
{
  $hod = $_POST['hod'];
  $holiday = $_POST['holiday'];
  $hdate = $_POST['hdate'];
  $reason = $_POST['reason'];
  // print_r($comment);
// print_r($hdate);
// die();
    if($holiday>0)
    {
      $wql = "SELECT * FROM hod WHERE sno = '$hod'";
      $wrest = mysqli_query($con, $wql) or die( mysqli_error($con));
      while($wjjw=mysqli_fetch_array($wrest))
      { $hod_name= $wjjw['name'];
        $sql = "INSERT INTO hodrequest (warden_sno,warden_name,hod_sno,hod_name,holiday,hdate,reason,date)
        VALUES ('$user_id','$uname','$hod','$hod_name','$holiday','$hdate','$reason','$date')";
      }
        $run = mysqli_query($con,$sql);
    
    	if($run)
    	{
        echo ("<script LANGUAGE='JavaScript'>
        window.location.href='teachertohod.php';
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
        window.location.href='teachertohod.php';
        </script>");
    }
}
?> 

      <div class="main-panel">
        
        <div class="content-wrapper">
             
                  
          <div class="row">
            <div class="col-xl-12 grid-margin stretch-card flex-column">
                
            <div class="row">
            
            <div class="col-sm-12">
              <h5 style="text-align: center;background-color: blue;color:white;padding: 10px;">Submit Request To Head Of Department</h5>  
            </div>  
            
            <form action='' method='POST'>
            <div class="col-sm-12">
            <div class="row">
                
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="usr">Please Choose HOD Name : </label>
                        <select class="form-control" id="sel1"  name='hod' style="border: 1px solid #f3f3f3;
                        font-weight: 400;
                        font-size: 0.875rem;padding: 17px;" required>
                            <?php
                                    $sql = "SELECT * FROM hod";
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
                            <label for="usr">Number Of Holiday : </label>
                            <input type="number" name='holiday' class="form-control" id="usr" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                            <label for="usr">Date From Holiday : </label>
                            <input type="date" name='hdate' class="form-control" id="usr" required>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                            <label for="usr">Reason Of Holid : </label>
                            <input type="text" name='reason' class="form-control" id="usr" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <button type="submit" name='submit' class="btn btn-primary btn-block" style="margin-top: 30px;">Submit Request</button>
                </div>

            </div>    
            </div>  
            </form>
            
            <div class="col-sm-12">
            <div class="row">
                   
                
                <div class="col-sm-12" style="background-color: white;padding: 20px;">

                    <h5 style="text-align: center;background-color: blue;color:white;padding: 10px;">Previous History</h5>

                    <div class="table-responsive" style="margin-top: 20px;"> 
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Sno</th>
                                <th>HOD Feedback</th>
                                <th>HOD Name</th>
                                <th>Number Of Holiday</th>
                                <th>Date From Holiday</th>
                                <th>Resion Of Holiday</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $hql = "SELECT * FROM hodrequest WHERE warden_sno = '$user_id'";
                            $hrest = mysqli_query($con, $hql) or die( mysqli_error($con));
                            $i = 1;
                            while($hjw=mysqli_fetch_array($hrest))
                            {
                            ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $hjw['feedback']; ?></td>
                              <td><?php echo $hjw['hod_name']; ?></td>
                              <td><?php echo $hjw['holiday']; ?></td>
                              <td><?php echo $hjw['hdate']; ?></td>
                              <td><?php echo $hjw['reason']; ?></td>
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

