<?php
	//echo "config";
	include('function/login_function.php');
	session_start();
	$_SESSION['account']="";
	checklogin($_SESSION['islogin']);
	
?>
