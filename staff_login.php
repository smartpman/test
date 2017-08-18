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
				</nav>
		</div><!-- End of navigation -->
		<div class="row"><!-- Beginning of form -->
			<?php require_once("includes/staff_login_process.php"); ?>
			<div class="col-md-6 col-md-offset-3">
				<form role="form" class="form-horizontal form_style" name="myForm" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
				<h3 style="text-align:center; color:#fff;">STAFF LOGIN</h3>
					<div class="form-group">
						<label class="col-md-3 control-label" for="u_name">Username:</label>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input class="form-control" type="text" name="u_name" placeholder="Please Enter Your Username....." required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-3 control-label" for="password">Password:</label>
						<div class="col-md-6">
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>	
								</span>
								<input class="form-control" type="password" name="password" placeholder="Please Enter Your Password....." required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-5 col-md-7">
							<button type="submit" class="btn btn-default">Login</button>
						</div>
					</div>
				</form><!-- Ending of form -->
		</div>
	</div>
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 IDC Co-Operation. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
	
</body>
</html>