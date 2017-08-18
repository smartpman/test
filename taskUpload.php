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
								<li class="active"><a href="staff.php" style="color:#000;">Register</a></li>
								<li><a href="view.php" style="color:#000;">View Task</a></li>
								<li><a href="edit_login.php" style="color:#000;">Edit Login</a></li>
								<li><a href="logout.php" style="color:#000;">Logout</a></li>
							</ul>
					</div>
				</nav>
		</div><!-- End of navigation -->
		<div class="row"><!-- Beginning of form -->
			<?php 
					$query = "SELECT id,team_name,leader_name FROM admin_task_tbl WHERE id='{$_GET['id']}' AND '{$_SESSION['id']}'";
					$query_result = mysql_query($query);
					if(!$query_result){
						die("Could not connect to Database ".mysql_error());
					}
					$row =mysql_fetch_array($query_result);
					 if($row==true) {
			?>

				<form role="form" class="form-horizontal form_style" enctype="multipart/form-data" name="myForm" action="includes/task_upload.php" method="post">
				<h3 style="text-align:center;">UpLoad Task</h3>
				<div class="form-group">
					<label class="col-md-3 control-label" for="taskID">Task ID:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="taskID" value="<?php echo $row['id'];?>" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-md-3 control-label" for="task">Task Name:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="task" value="<?php echo $row['team_name']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label  class="col-md-3 control-label" for="leader">Team Leader:</label>
					<div class="col-md-6">
						<input class="form-control" type="text" name="leader" value="<?php echo $row['leader_name'] ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="comment">Comment:</label>
					<div class="col-md-6">
						<textarea class="form-control" rows="3" type="text" name="comment" placeholder="Please enter your comment...." required></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-offset-2" for="inputfile">File:</label>
					<div class="col-md-offset-3 col-md-8">
						<input type="file" name="file" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-5 col-md-7">
						<button type="submit" name ="upload" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div><!-- Ending of form -->
		<?php } ?>			
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 eComs&#64;design. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
	
</body>
</html>