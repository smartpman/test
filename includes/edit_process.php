<?php require_once("session.php"); ?>
<?php require_once("connect.php") ;?>
<?php 
if(isset($_SESSION['id'])) {
	if(isset($_POST['u_name']) && isset($_POST['password'])) {
		$username = mysql_real_escape_string($_POST['u_name']);
		$password = mysql_real_escape_string($_POST['password']);
		$hashed_password = md5($password);
		$id = $_SESSION['id'];
			if(!empty($username) && !empty($password)){
				$query =  "UPDATE staff_login_tbl SET username='{$username}',hashed_password='{$hashed_password}' WHERE id=$id";
				$query_result = mysql_query($query);
				$count = mysql_affected_rows($query_result);
				If(!$query_result){
						die("Could not connect to database ".mysql_error());
				}
				echo "<script language=javascript>alert(\"Data Updated Successfully !\");</script>";
				echo "<script language=javascript>setTimeout(function(){
				window.location.href=\"staff_login.php\";
				},0.1)</script>";
				return false;
				exit();
				} else{
				echo "<script language=javascript>alert(\"Please Fill in All Fields To Update Data Correctly!\");</script>";
				return false;
				exit();
			}
	}
}
?>