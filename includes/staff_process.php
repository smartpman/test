<?php require_once("session.php"); ?>
<?php require_once("session_check.php"); ?>
<?php require_once("connect.php"); ?>
<?php
 if(isset($_SESSION['id'])){ 
 	/* The isset function checks if a value has been set before carrying out any further action*/
		if(isset($_POST['staffID']) && isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['department'])){
			$staffid = mysql_real_escape_string($_POST['staffID']);
			$id = (int)$_SESSION['id'];
			$fullname = mysql_real_escape_string($_POST['fullname']);
			$address = mysql_real_escape_string($_POST['address']);
			$phone = mysql_real_escape_string($_POST['phone']);
			$email = mysql_real_escape_string($_POST['email']);
			$department = mysql_real_escape_string($_POST['department']);
			if(!empty($staffid) && !empty($id) && !empty($fullname) && !empty($address) && !empty($phone) && !empty($email) && !empty($department)) {
				$query = "INSERT INTO staff_tbl VALUES('',$id,'{$staffid}','{$fullname}','{$address}','{$phone}','{$email}','{$department}')";
				$query_result = mysql_query($query);
				if(!$query_result){
						echo "<script language=javascript>alert(\"Could not connect to Database!\");</script>".mysql_error();
							return false;
							exit;
					} else {
					echo "<script language=javascript>alert(\"Data Submitted Successfully\");</script>";
					echo "<script language=javascript>setTimeout(function(){
						window.location.href=\"view_profile.php\";
						},0.1)</script>";
						return false;
						exit;
					}		 
			} else{
				echo "<script language=javascript>alert(\"Please Fill Out All Fields\");</script>";
				return false;
				exit();
			}
		}
} else {
	header("Location: ../staff_login.php");
	exit();
}
?>