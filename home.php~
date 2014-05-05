<?php
session_start(); 
include('config/db.php');
$account=$_SESSION['account'];
//print($_SESSION['account']);
$sql="select name from useraccount where `account`='".$account."'";
$ans=$DB->fetch_one_array($sql);
$name=$ans[0];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人主页</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;">
<!--导航栏-->
<?php
include('guide.php');
?>

<div class="container">
<h2>您好，<?=$name?></h2>
<h3>欢迎您来到土木建管系党建数据库系统</h3>
</hr>
	<div class="row">
		<div class="col-md-4">
			<h4>您可以查看自己的个人资料，并进行修改。</h4>

		</div>
		<div class="col-md-4">
			<h4>您可以查看全系同学的信息。</h4>


		</div>
		<div class="col-md-4">
			<h4>如果您是管理人员，您可以根据您相应的权限修改系内同学的资料。</h4>
		</div>
	<div class="row">
		<div class="col-md-4">
			<button  style="display: block;margin:auto" class="btn btn-lg btn-default" type="button" onclick="window.location='personal.php'"><img src="img/Diigo-icon.png"><h4>个人中心</h4></button>
		</div>
		<div class="col-md-4">
			<button  style="display: block;margin:auto" class="btn btn-lg btn-default" type="button" onclick="window.location='class_view.php'"><img src="img/Apple-App-Store-icon.png"><h4>查看他人</h4></button>
		</div>
		<div class="col-md-4">
			<button style="display: block;margin:auto"  class="btn btn-lg btn-default" type="button" onclick="window.location='class_view_foredit.php'"><img src="img/Bloglovin-icon.png"><h4>管理他人</h4></button>
		</div>
	</div>
	</div>
</div>

</body>

</html>
