<?php
require_once("include.php");
$conn = mysql_connect('localhost','root','');//this helps you create a conn to ur database
if(!$conn) {
	die("Could not connect to database ".mysql_error());
 } else{
 	$db_select = mysql_select_db(DB_NAME,$conn);
 	if(!$db_select){
 		die("Could not find database ".mysql_error());
 	}
 }
?>