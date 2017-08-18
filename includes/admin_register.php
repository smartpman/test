<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
 if(isset($_SESSION['id'])){ 
		if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['question']) && isset($_POST['answer'])){
			$fname = mysql_real_escape_string($_POST['fname']);
			$id = (int)$_SESSION['id'];
			$lname = mysql_real_escape_string($_POST['lname']);
			$email = mysql_real_escape_string($_POST['email']);
			$phone = mysql_real_escape_string($_POST['phone']);
			$question = mysql_real_escape_string($_POST['question']);
			$answer = mysql_real_escape_string($_POST['answer']);
			if(!empty($id) && !empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($question) && !empty($answer)) {
				$query = "INSERT INTO admin_tbl VALUES('',$id,'{$fname}','{$lname}','{$email}','{$phone}','{$question}','{$answer}')";
				$query_result = mysql_query($query);
				if(!$query_result){
						echo "<script language=javascript>alert(\"Could not connect to Database! \");</script>".mysql_error();
							return false;
							exit();
					}
					//echo "<script language=javascript>alert(\"Data Submitted Successfully\");</script>";
					header('Location: ../admin/admin_view_profile.php');
					exit();		 
			} else{
				echo "<script language=javascript>alert(\"Please Fill Out All Fields\");</script>";
				return false;
				exit();
			}
		}
} else {
	header("Location: ../admin_login.php");
	exit();
}
?>