
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login.php');
}
include("header.php");
if(isset($_POST['submit'])){
	// $main_image = $_FILES['main_image']['name'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$stu_depart = $_POST['stu_depart'];
	$enrolment_no = $_POST['enrolment_no'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	

    $sql = "INSERT INTO student (name,email,stu_depart,enrolment_no,contact,password)
    VALUES ('$name','$email','$stu_depart','$enrolment_no',$contact,'$password')";

    $run = mysqli_query($con,$sql);

	if($run)
	{
		// move_uploaded_file($_FILES['main_image']['tmp_name'],'../img/'.$_FILES['main_image']['name']);
		echo ("<script LANGUAGE='JavaScript'>
        window.location.href='student.php';
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
						  <h5 class="txt-dark">Add Student</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li><a href="student.php"><span>Back</span></a></li>
							<li class="active"><span>Add Student</span></li>
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
										<h6 class="panel-title txt-dark">Add Student</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST" enctype="multipart/form-data">
                                                
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Name <span class="help"></span></label>
													<textarea class="form-control" rows="5" name="name" placeholder="Please Enter Name" required></textarea>
												</div>
												
												

												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Email <span class="help"></span></label>
													<input class="form-control" type='email' name="email" placeholder="Please Enter Email" required>
												</div>
												
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Student Department <span class="help"></span></label>
													<input class="form-control" type='text' name="stu_depart" placeholder="Please Enter Student Department" required>
												</div>
												
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Student Enrolment Number <span class="help"></span></label>
													<input class="form-control" type='text' name="enrolment_no" placeholder="Please Enter Student Enrolment Number" required>
												</div>
												
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Student Contact Number <span class="help"></span></label>
													<input class="form-control" type='number' name="contact" placeholder="Please Enter Student Contact Number" required>
												</div>
												
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Password <span class="help"></span></label>
													<input class="form-control" type='password' name="password" placeholder="Please Enter Password" required>
												</div>

												
												
												<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
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