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
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#000;">		Edit Profile<span class="caret"></span></a>
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
											<li><a href="admin_login.php"  style="color:#000;">View Profile</a></li>
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
		<?php 
		/**It allows you use double quotes and single quotes  
		 * in a document without having to escape any of it  
		 * and helps keep your code simplier.
		**/
		$header=<<<EOD
		<h2><center>ADMIN PROFILE</center></h2>
		<table width="70%" cellpadding="" cellspacing="3" align="center"  class="form_style3">
		<tr >
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
		</tr>
EOD;
		$query = "SELECT * FROM admin_tbl WHERE id={$_SESSION['id']}";
		$query_result = mysql_query($query);
		if(!$query_result){
			die("Could not Connect to Database ".mysql_error());
		} 
		$body = '';
		while($row = mysql_fetch_array($query_result)){
			$fname = $row['firstname'];
			$lname = $row['lastname'];
			$email = $row['email'];
			$phone = $row['phone'];
		$body .=<<<EOD
		<tr>
			<td>$fname</td>
			<td>$lname</td>
			<td>$email</td>
			<td>$phone</td>
		</tr>
EOD;
		$footer = "</table>";
		$admin=<<<ADMIN
		$header
		$body
		$footer
ADMIN;
		echo $admin;
}
?>			
		</div>
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 eComs&#64;design. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
</body>
</html>