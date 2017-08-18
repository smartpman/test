<?php require_once("includes/session.php"); ?>
<?php require_once("includes/session_check.php"); ?>
<?php require_once("includes/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IDC construction</title>
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
											<li><a href="edit_login.php">Edit Login</a></li>
											<li><a href="view_profile.php">View Profile</a></li>
											<li><a href="update_profile.php">Update Profile</a></li>
									</ul>
								</li>
								<li><a href="logout.php" style="color:#000;">Logout</a></li>
							</ul>
					</div>
				</nav>
		</div><!-- End of navigation -->
		<div class="row"><!-- Beginning of task -->
			<?php
				$query="SELECT a.*,s.* FROM admin_task_tbl AS a,staff_login_tbl AS s WHERE a.id = s.id AND {$_SESSION['id']} =s.id";
				$query_run = mysql_query($query);
				if(!$query_run) {
					die("Could not connect to database ".mysql_error());
				} else{
					while($row=mysql_fetch_array($query_run)){
						echo "<div class=\"col-md-12\"><h3 style=\"text-align:center\"> {$row['team_name']}</h3></div>"."<br>";
						echo "<div class=\"col-md-12\"><h4>Team Leader : {$row['leader_name']}</h4></div>"."<br>";
						echo "<div class=\"col-md-12\"><h4>Team Members : {$row['members']}</h4></div>"."<br>";
						echo "<div class=\"col-md-12\"><h4>Team Task : {$row['team_task']}</h4></div>"."<br>";
						echo "<div class=\"col-md-12\"><a href=\"taskUpload.php?id={$row['id']}\"><b>CLICK HERE</b></a> <b>to UpLoad Task Complete or in Progress</b></div><br>";
					}
				}
			?>

		</div><!-- Ending of task -->
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 eComs&#64;design. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
	
</body>
</html>