<?php require_once('session.php'); ?>
<?php require_once('connect.php'); ?>
<?php
$task_id =$_GET['id'] ;
 mysql_query("DELETE FROM  staff_task_tbl WHERE team_name_id= '$task_id'") or die (mysql_error());
header ("location: ../admin/index.php"); 
?>