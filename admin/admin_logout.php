<?php require_once("../includes/session.php"); ?>
<?php
	unset($_SESSION['id']);
	session_destroy();
	header('Location: ../admin/index.php');
?>