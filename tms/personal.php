<?php
include ('config/db.php');
include ('function/display.php');
	session_start();
	$account=$_SESSION['account'];
	$sql= "select id from useraccount where account='$account'";
	$ans=$DB->fetch_one_array($sql);
	$id=$ans[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;padding-bottom: 70px;">
<!--������-->
<?php
include('guide.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="bs-sidebar hidden-print affix" role="complementary">
				<ul class="nav bs-sidenav">
					<li><a href="#basicinfo">������Ϣ</a></li>
					<li><a href="#dangke">����С��</a></li>
					<li><a href="#zizhu">����ѧϰ</a></li>
					<li><a href="#zhibu">֧����ϵ</a></li>
					<li><a href="#yubei">Ԥ������</a></li>
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
<?php
	echo"	<button class=\"btn btn-lg\" onclick=\"window.location='edit_others.php?otheraccount=".$account."'\">�޸�</button>";
?>
			<button class="btn btn-lg" onclick="window.location='home.php'">������ҳ</button>
		</ul>
	</div>
</div>
</body>
</html>
