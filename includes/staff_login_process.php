<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php
	if(isset($_POST['u_name']) && isset($_POST['password'])) {
		$username = mysql_real_escape_string($_POST['u_name']);
		$password = mysql_real_escape_string($_POST['password']);
		/*md5() is a hashing technique whereby an ash is created 
		** so that it becomes impossible for user to get assess to users login
		*/
		$hashed_password = md5($password);
		if(!empty($username) && !empty($hashed_password)) {
			$query = "SELECT * FROM staff_login_tbl WHERE username='{$username}' AND hashed_password='{$hashed_password}'";
			$query_result = mysql_query($query);//this helps you execute the query statement;
			$count = mysql_num_rows($query_result);//counts the number of rows returned;
			if($count==1) {
				while($row=mysql_fetch_array($query_result)){

					/* returns an array(id=>1,username=>ejokpe,password=>trust)
					** set of data;
					*/

				 	$_SESSION['id'] = $row['id'];

				 	/* grabs the value and stores it in a temporary array in the browser;
				 	** 
				 	*/
				 }
				header('Location: staff.php');
			} else{
				echo "<script language=javascript>alert(\"Incorrect Username/Password Combination.\");</script>";
				return false;
				exit();
			}		
		} else{
			echo "<script language=javascript>alert(\"Please Fill out All Fields.\");</script>";
			return false;
			exit();
		}
	}

?>