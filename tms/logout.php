<?php
session_start();
$_SESSION['islogin']=0;
echo '<script language="javascript" type="text/javascript">window.location="login.php";;</script>';	
?>
