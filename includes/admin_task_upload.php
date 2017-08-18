<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
if(isset($_SESSION['id'])){ 
	if(isset($_POST['task_name']) && isset($_POST['task']) && isset($_POST['leader']) && isset($_POST['member'])) {
		$taskname = mysql_real_escape_string($_POST['task_name']);
		$task = mysql_real_escape_string($_POST['task']);
		$leader = mysql_real_escape_string($_POST['leader']);
		$member = mysql_real_escape_string($_POST['member']);
		$id = (int)$_SESSION['id'];
		if(!empty($taskname) && !empty($task) && !empty($leader) && !empty($member) && !empty($id)) {
			$query = "INSERT INTO admin_task_tbl VALUES('',$id,'{$taskname}','{$task}','{$leader}','{$member}')";
			$query_result = mysql_query($query);
			if(!$query_result){
				die("Could not connect to Database ".mysql_error());
				exit();
			}
				echo "<script language=javascript>alert(\"Task Allocated Successfully.\");</script>";
				return false;
				exit();	
		} else{
			echo "<script language=javascript>alert(\"Please Fill out All Fields.\");</script>";
			return false;
			exit();
		}
	}
} else {
	header('Location: ../admin/admin_login.php');
}
?>