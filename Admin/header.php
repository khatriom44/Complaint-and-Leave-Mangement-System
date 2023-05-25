
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin Panel !</title>
		<meta name="description" content="VY is a Dashboard & Admin Site Responsive Template by VY." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, VY Admin, VY, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="VY"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Data table CSS -->
    	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    	
    	<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
		
		<!-- Jasny-bootstrap CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-green">
			
			<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.php">
							<img class="brand-img" src="dist/img/logo.png" alt="brand"/>
							<span class="brand-text">Control Center</span>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					
					
					
				
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							
							
							
							
							<li>
								<a href="logout.php"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
			
			
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span> 
						<i class="zmdi zmdi-more"></i>
					</li>
					<li>
						<a href="index.php" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
					</li>
					
					<li><hr class="light-grey-hr mb-10"/></li>
					
					<li>
						<a href="student.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Student</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>

					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="subject.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Department</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="teacher.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Teacher</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>

					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="hod.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Hod</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>

					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="hostels.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Hostel </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
					
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="hostel.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Warden </span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
					
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="change_password_admin.php"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Change Password</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->