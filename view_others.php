<?php
	$otheraccount=$_GET["otheraccount"];
	include ('config/db.php');
	include ('function/display.php');
	$sql= "select id from useraccount where account='$otheraccount'";
	$ans=$DB->fetch_one_array($sql);
	$id=$ans[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人主页</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;">
<!--导航栏-->
<?php
include('guide.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="bs-sidebar hidden-print affix" role="complementary">
				<ul class="nav bs-sidenav">
					<li><a href="#basicinfo">基本信息</a></li>
					<li><a href="#dangke">党课小组</a></li>
					<li><a href="#zizhu">自主学习</a></li>
					<li><a href="#zhibu">支部联系</a></li>
					<li><a href="#yubei">预备考察</a></li>
				<ul>	
			</div>
		</div>	
		<div class="col-md-9">
<?php	
	GetPerson($id);
?>
		</div>
	</div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav navbar-right">
			<button class="btn btn-lg" onclick="window.location='class_view.php'">返回名单</button>
			<button class="btn btn-lg" onclick="window.location='home.php'">返回主页</button>
<?php	
	echo "<button class=\"btn btn-lg\" onclick=\"window.location='export_one.php?id=".$id."'\">导出</button>";
?>
		</ul>
	</div>
</div>
</body>
</html>
