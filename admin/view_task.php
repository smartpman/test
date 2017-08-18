<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IDC construction company</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/font-awesome.css"/>
	<script type="text/javascript" src="../bootstrap/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-transition.js"></script>
	<link type="text/css" href="../bootstrap/fonts/glyphicons-halflings-regular.eot">
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
		</div>
	<div>
		<div>
		<?php 
		//heredoc is an alternative to doublequotes or single quotes.It is especially helpful if you have double quotes and single quotes within a block of text 
		/*
		* syntax begin with <<<EOD  
		* ends with
		* EOD;
		*/
		$header=<<<ABC
		<table width="70%" cellpadding="" cellspacing="3" align="center"  class="form_style3">
		<tr>
				<th>TEAM TASK</th>
				<th>TEAM LEADER</th>
				<th>COMMENT</th>
				<th>PICTURE</th>
				<th>DELETE</th>
		</tr>
ABC;
		$query = "SELECT * FROM staff_task_tbl WHERE id ='{$_SESSION['id']}'";
		$query_result = mysql_query($query);
		if(!$query_result){
			die("Could not Connect to Database ".mysql_error());
		}
		$body ='';
		while($row = mysql_fetch_array($query_result)){
			$team_id = $row['team_name_id'];
			$team_task = $row['team_task'];
			$team_leader = $row['team_leader'];
			$comment = $row['comment'];
			$picture = $row['picture_1'];
			$body .=<<<EOD
			<tr>
				<td>$team_task</td>
				<td>$team_leader</td>
				<td>$comment</td>
				<td><a href="../uploads/$picture" target=\"_blank\">$picture</a></td>
				<td><a href="../includes/delete_task.php?id=$team_id;" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a></td>
		</tr>
EOD;

$footer = "</table>";
$task=<<<TASK
	$header
	$body
	$footer
TASK;
echo $task;	
	}
?>
			<?php //require_once("../includes/admin_comment.php"); ?>	
			<!-- <form role="form" class="form-horizontal form_style2" name="myForm" 
			action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
					<div class="form-group">
								<label class="col-md-3 control-label" for="comment">Comment:</label>
								<div class="col-md-6">
									<textarea class="form-control" rows="3" type="text" name="comment" placeholder="Please enter your comment...." required></textarea>
								</div>
					</div>
								<div class="form-group">
								<div class="col-md-offset-5 col-md-7">
									<button type="submit" class="btn btn-default" onclick="validateForm();">Login</button>
								</div>
							</div>
				</form> -->	
		</div>
		
		<div class="row footer"><!-- Beginning of footer -->
				<p style="text-align:center;">&copy 2016 IDC Co-Operation. All Rights Reserved.</p>
		</div><!-- End of footer -->
	</div>
</div>	
</body>
</html>