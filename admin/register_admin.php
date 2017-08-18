<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IDC construction company</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<script type="text/javascript" src="../bootstrap/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-transition.js"></script>
	<link type="text/css" href="../bootstrap/fonts/glyphicons-halflings-regular.eot">
</head>
<body class="wrapper ">
	<div class="container">
		<div class="row"><!-- Beginning of Logo row -->
			<div class="col-xs-12 col-md-12">
				<h1>IDC</h1>
			</div>
		</div><!-- End of logo row	-->
		<div class="row"><!-- Beginning of navigation --> 
				<nav class="navbar navbar-default" role="navigation">
					<div class="col-md-6 navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php" style="color:#000;">IDC Construction Company</a>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-6 collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;">		Admin Profile<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="register_admin.php"  style="color:#000;">Register</a></li>
											<li><a href="admin_edit.php"  style="color:#000;">Edit Login</a></li>
											<li><a href="admin_view_profile.php"  style="color:#000;">View Profile</a></li>
										</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;">Team Task<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="allocate_task.php" style="color:#000;">Allocate Task</a></li>
											<li><a href="view_task.php"  style="color:#000;">View Task</a></li>
										</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;">Register Staff<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="register_staff.php"  style="color:#000;">Register</a></li>
										</ul>
								</li>
								<li><a href="admin_logout.php" style="color:#000;">Logout</a></li>
							</ul>
					</div>
				</nav>
		</div><!-- End of navigation -->
		
		<div class="row">
				<?php require_once("../includes/admin_register.php"); ?>
				<form role="form" class="form-horizontal form_style2" name="myForm" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" >
				<h3 style="text-align:center; color:#000;">ADMIN REGISTRATION</h3>
				<div class="form-group">
					<label class="col-md-3 control-label" for="fname">First Name:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="fname" placeholder="Please Enter Your Firstname....." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="lname">Last Name:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="lname" placeholder="Please Enter Your Last Name....." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="email">Email:</label>
					<div class="col-md-6">
						<input class="form-control"  type="text" name="email" placeholder="Please Enter Your Email....." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="phone">Phone:</label>
					<div class="col-md-6">
						<input class="form-control" type="tel" name="phone" placeholder="Please Enter Your PhoneNo....." required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="question">Security Question:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="question" placeholder="Please Enter Your Security Question....." required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-md-3 control-label" for="answer">Security Answer:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="answer" placeholder="Please Enter Your Security Answer....." required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-5 col-md-7">
						<button type="submit" class="btn btn-default">Login</button>
					</div>
				</div>
			</form>
			
		</div>
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 IDC Co-Operation. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
</body>
</html>