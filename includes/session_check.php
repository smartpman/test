<?php
if(!isset($_SESSION['id'])){
	$redLoc = 'staff_login.php';
	header('Location: '.$redLoc);
}
?>