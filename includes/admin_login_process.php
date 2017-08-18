<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php 
	if(isset($_POST['uname']) && isset($_POST['pass'])) {
		$username = mysql_real_escape_string($_POST['uname']);
		$password = mysql_real_escape_string($_POST['pass']);
		$hashed_password = md5($password);
		if(!empty($username) && !empty($hashed_password)) {
			$query = "SELECT * FROM admin_login_tbl WHERE username='{$username}' AND hashed_password='{$hashed_password}'";
			$query_result = mysql_query($query);
			$count = mysql_num_rows($query_result);
			if($count==1) {
				while($row=mysql_fetch_array($query_result)){
				 	$_SESSION['id'] = $row['id'];
				 }
				header('Location: ../admin/admin.php');
			} else{
				echo "<script language=javascript>alert(\"Incorrect Username/Password Combination.\");</script>";
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