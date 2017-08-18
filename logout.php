<?php require_once("includes/session.php"); ?>
<?php
	session_destroy();
	$redLoc ='index.php';
	header('Location: '.$redLoc);
?>