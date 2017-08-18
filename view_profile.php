<?php require_once("includes/session.php"); ?>
<?php require_once("includes/session_check.php"); ?>
<?php require_once("includes/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IDC construction company</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-transition.js"></script>
	<link type="text/css" href="bootstrap/fonts/glyphicons-halflings-regular.eot">
</head>
<body class="wrapper">
	<div class="container">
		<div class="row"><!-- Beginning of Logo row -->
			<div class="col-xs-12 col-md-12">
				<h1>IDC</h1>
			</div>
		</div><!-- End of logo row	-->
		<div class="row"><!-- Beginning of navigation --> 
				<nav class="navbar navbar-default" role="navigation">
					<div class="col-md-8 navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php" style="color:#000;">IDC Construction Company</a>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="register_staff.php" style="color:#000;">Register</a></li>
								<li><a href="view.php" style="color:#000;">View Task</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;">Edit Profile<span class="caret"></span></a>
									<ul class="dropdown-menu">
											<li><a href="edit_login.php">Login</a></li>
											<li><a href="view_profile.php">View Profile</a></li>
											<li><a href="update_profile.php">Update Profile</a></li>
									</ul>
								</li>
								<li><a href="logout.php" style="color:#000;">Logout</a></li>
							</ul>
					</div>
				</nav>
		</div><!-- End of navigation -->
<div class="row">
<?php 
		/**It allows you use double quotes and single quotes  
		 * in a document without having to escape any of it  
		 * and helps keep your code simplier.
		**/
		$header=<<<EOD
		<h2><center>STAFF DETAILS</center></h2>
		<table width="100%" cellpadding="" cellspacing="3" align="center"  class="form_style3">
		<tr >
				<th>STAFF ID</th>
				<th>STAFF NAME</th>
				<th>ADDRESS</th>
				<th>PHONE</th>
				<th>EMAIL</th>
				<th>DEPARTMENT</th>
		</tr>
EOD;
		$query = "SELECT * FROM staff_tbl WHERE id={$_SESSION['id']}";
		$query_result = mysql_query($query);
		if(!$query_result){
			die("Could not Connect to Database ".mysql_error());
		} 
		$body = '';
		while($row = mysql_fetch_array($query_result)){
			$staffID = $row['staffID'];
			$name = $row['name'];
			$address = $row['address'];
			$phone = $row['phone'];
			$email = $row['email'];
			$dept =$row['department'];
		$body .=<<<EOD
		<tr>
			<td>$staffID</td>
			<td>$name</td>
			<td>$address</td>
			<td>$phone</td>
			<td>$email</td>
			<td>$dept</td>
		</tr>
EOD;
		$footer = "</table>";
		$staff=<<<STAFF
		$header
		$body
		$footer
STAFF;
		echo $staff;
}
?>
</div>	
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 IDC Co-Operation. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>	
</body>
</html>