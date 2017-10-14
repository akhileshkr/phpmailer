<?php 
session_start();
if(isset($_POST['submit']) && isset($_POST['mailid']) && isset($_POST['password']))
{
	$_SESSION["account"] = $_POST['mailid'];
	$_SESSION["password"] = $_POST['password'];
	$msg['msg']="hai";
	include 'home.php';
}
 ?>
