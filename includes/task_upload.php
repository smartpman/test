<?php require_once("session.php"); ?>
<?php require_once("session_check.php"); ?>
<?php require_once("connect.php"); ?>
<?php
if(isset($_SESSION['id'])){
	if(isset($_POST['upload'])){
		$taskid = $_POST['taskID'];
		$task = mysql_real_escape_string($_POST['task']);
		$leader = mysql_real_escape_string($_POST['leader']);
		$comment = mysql_real_escape_string($_POST['comment']);
		$file = $_FILES['file']['name']; 
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size']/1024;
		$tmp_location = $_FILES['file']['tmp_name']; 
		$id = (int)$_SESSION['id'];
		if(!empty($taskid) && !empty($task) && !empty($leader) && !empty($comment) && !empty($file)) {
			$uploads = "../uploads/";
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$imgExt = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // get image extension
				if(in_array($imgExt,$valid_extensions)){
						move_uploaded_file($tmp_location, $uploads.$file);
						$query = "INSERT INTO staff_task_tbl VALUES('',$id,'{$taskid}','{$task}','{$leader}','{$comment}','{$file}')";
			 			$query_result = mysql_query($query);
			 			if(!$query_result){
							die("Could not insert into the database ".mysql_error());
			 			}
							echo "<script language=javascript>alert(\"File Submitted Successfully\");</script>";
				 			echo "<script language=javascript>setTimeout(function(){
						window.location.href=\"../view.php\";
						},0.1)</script>";
					return false;
					exit();	
			 		} else {
						echo "<script language=javascript>alert(\"Image must be of type jpeg , jpg, png , gif!\");</script>";
						return false;
						exit(); 
			 		}  
			} else{
				 		echo "<script language=javascript>alert(\"Please Fill Out All Fields\");</script>";
				 		return false;
						exit();
					 } 
	}
} else{
	header('Location: ../staff_login.php');
}
?>