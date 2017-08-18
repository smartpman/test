<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php 
if(isset($_SESSION['id'])){
if(isset($_POST['u_name']) && isset($_POST['password'])) {
	$username = mysql_real_escape_string($_POST['u_name']);
	$password = mysql_real_escape_string($_POST['password']);
	$id = (int)$_SESSION['id'];
	$hashed_password = md5($password);
	if(!empty($username) && !empty($hashed_password)  && !empty($id)) {
		$query = "INSERT INTO staff_login_tbl VALUES('',$id,'{$username}','{$hashed_password}')";
		$query_result = mysql_query($query);
		if(!$query_result){
			die("Could not connect to Database ".mysql_error());
			exit;
		} else{
			echo "<script language=javascript>alert(\"Staff Register Sucessfully.\");</script>";
			return false;
			die();
		}	
	} else{
		echo "<script language=javascript>alert(\"Please Fill out All Fields.\");</script>";
		return false;
		die();
	}
}
} else{
	header('Location: ../admin/admin_login.php');
}
?>