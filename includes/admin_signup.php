<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php 
	if(isset($_POST['uname']) && isset($_POST['pass'])) {
		$username = mysql_real_escape_string($_POST['uname']);
		$password = mysql_real_escape_string($_POST['pass']);
		$hashed_password = md5($password);
		if(!empty($username) && !empty($hashed_password)) {
			$query = "INSERT INTO admin_login_tbl VALUES('','{$username}','{$hashed_password}')";
			$query_result = mysql_query($query);
			if(!$query_result) {
				die("Could not connect to database ".mysql_error());
				exit();
			} else{
				echo "<script language=javascript>alert(\"New Admin Created Successfully , Login With Details.\");</script>";
				echo "<script language=javascript>setTimeout(function(){
						window.location.href=\"admin_login.php\";
						},0.1)</script>";
					return false;
					exit();	
			}		
		} else{
			echo "<script language=javascript>alert(\"Please Fill out All Fields. \");</script>";
			return false;
			exit();
		}
	}
?>