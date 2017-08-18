<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
 if(isset($_SESSION['id'])){ 
		if(isset($_POST['staffID']) && isset($_POST['fullname']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['department'])){
			$id = (int)$_SESSION['id'];
			$staffid = mysql_real_escape_string($_POST['staffID']);
			$fullname = mysql_real_escape_string($_POST['fullname']);
			$address = mysql_real_escape_string($_POST['address']);
			$phone = mysql_real_escape_string($_POST['phone']);
			$email = mysql_real_escape_string($_POST['email']);
			$department = mysql_real_escape_string($_POST['department']);
			if(!empty($id) && !empty($fullname) && !empty($address) && !empty($phone) && !empty($email) && !empty($department)) {
				$query = "UPDATE staff_tbl SET staffID='{$staffid}',name='{$fullname}',address='{$address}',phone='{$phone}',email='{$email}',department='{$department}' WHERE id=$id";
				$query_result = mysql_query($query);
				if(!$query_result){
						echo "<script language=javascript>alert(\"Could not connect to Database!\");</script>".mysql_error();
							return false;
							exit();
					}
					echo "<script language=javascript>alert(\"Data Updated Successfully\");</script>";
					echo "<script language=javascript>setTimeout(function(){
						window.location.href=\"view_profile.php\";
						},0.1)</script>";
					return false;
					exit();		 
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