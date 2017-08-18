<?php require_once("session.php");?>
<?php require_once("connect.php");?>
<?php 
if(isset($_SESSION['id'])) {
	if(isset($_POST['comment'])){
		$comment = $_POST['comment'];
		$id = (int)$_SESSION['id'];
		if(!empty($comment)){
			$query = "INSERT INTO comments VALUES('',$id,'{$comment}')";
			$query_result = mysql_query($query);
			if(!$query_result) {
				die("Could not connect to database .".mysql_error());
			} 
			echo "<script language=javascript>alert(\"Data Submitted Successfully!\");</script>";
			return false;
			exit();
		} else{
			echo "<script language=javascript>alert(\"Please Fill Out All Fields!\");</script>";
			return false;
			exit();
		}

	}
} else{
	header('Locatio: ../admin/admin_login.php');
}
?>