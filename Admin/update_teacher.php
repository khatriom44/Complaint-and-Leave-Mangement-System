
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
include("header.php");
$sno = $_GET['did'];
$sql="SELECT * FROM `teacher` WHERE sno='$sno'";
$result = mysqli_query($con,$sql);
$total = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);


if(isset($_POST['update'])){
	// $main_image = $_FILES['main_image']['name'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$subject = $_POST['subject'];

    $sql = "UPDATE `teacher` set subject_sno='$subject',name='$name',email='$email',password='$password' WHERE sno='$sno'";

    $run = mysqli_query($con,$sql);

	if($run)
	{
		// move_uploaded_file($_FILES['main_image']['tmp_name'],'../img/'.$_FILES['main_image']['name']);
		echo ("<script LANGUAGE='JavaScript'>
        window.location.href='teacher.php';
        </script>");
	}
else 
	{
		echo "Error: record not Added " ;
	}
}
?>		
<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Add Teacher</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li><a href="teacher.php"><span>Back</span></a></li>
							<li class="active"><span>Add Teacher</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Add Teacher</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                
                                                    <label for="sel1">Select Department From The Dropdown:</label>
													<select name='subject' class="form-control" required>
                                                        <option></option>
                                                            <?php
                                                                $sql1 = "SELECT * FROM subject";
                                                                $result1 = mysqli_query($con, $sql1);
                                                                    while($row1 = mysqli_fetch_assoc($result1)) 
                                                                    {
                                                            ?>
                                                                <option value='<?php echo $row1['sno'];?>'
																<?php
																	if($row['subject_sno'] == $row1['sno']){
																		echo "Selected";
																	}

																?>
																><?php echo $row1['name'];?></option>
                                                            <?php } ?>
                                                    </select>
                        
                                                   
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Name <span class="help"></span></label>
													<textarea class="form-control" rows="5"  name="name" placeholder="Please Enter Name" required><?php echo $row['name'];?> </textarea>
												</div>
												
												<!-- <div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Main Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Main Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="main_image">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div> -->

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Email <span class="help"></span></label>
													<input class="form-control" type='email' value=<?php echo $row['email']; ?> name="email" placeholder="Please Enter Email" required>
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Password <span class="help"></span></label>
													<input class="form-control" type='password' value=<?php echo $row['password'];?> name="password" placeholder="Please Enter Password" required>
												</div>

												
												
												<button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		<script>
			function get_sub_cat(){
				var category_id=jQuery('#category_id').val();
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
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>