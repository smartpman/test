<?php require_once("session.php"); ?>
<?php require_once("connect.php") ;?>
<?php
if(isset($_SESSION['id'])){
	if(isset($_POST['uname']) && isset($_POST['pass'])) {
		$username = mysql_real_escape_string($_POST['uname']);
		$password = mysql_real_escape_string($_POST['pass']);
		$hashed_password = md5($password);
		$id = (int)$_SESSION['id'];
			if(!empty($username) && !empty($password)){
				$query = "UPDATE admin_login_tbl SET username='{$username}',hashed_password='{$hashed_password}' WHERE id = $id";
				$query_result = mysql_query($query);						
					if(!$query_result){
							echo "<script language=javascript>alert(\"Could not Update Database !\");</script>";
							return false;
							exit();
						}
							echo "<script language=javascript>alert(\"Update Done Successfully!\");</script>";
							return false;
							exit();
			} else{
				echo "<script language=javascript>alert(\"Please Fill in All Fields To Update!\");</script>";
				return false;
				exit();
			}
		}
} else{
	header('Location: ../admin/admin_login.php');
}
?>