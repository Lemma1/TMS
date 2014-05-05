<?php
	include ('config/db.php');
	include ('function/basicinfo.php');
	session_start();
	$account=$_SESSION['account'];
	//print($account);
	$sql= "select id from useraccount where account='$account'";
	$ans=$DB->fetch_one_array($sql);
	$id=$ans[0];
	$sql= "select * from useraccount where id='$id'";
	$ans=$DB->fetch_one_array($sql);
	$DB->free();
	$class=Getclass($ans[5]);

function GetClass($classcode)
{
	return 1;
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人资料修改</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;">
<!--导航栏-->
<?php
include('guide.php');
?>
	

<!--内容部分-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="bs-sidebar hidden-print affix" role="complementary" style="width:240px;">
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
				<div>
					<h2 id="basicinfo">基本信息</h2>
					<h3>个人信息</h3>
					<form role="form">
						<label>姓名</label>
						<input class="form-control" id="name" value="<?=$ans[2]?>">
						<label>学号</label>
						<input class="form-control" id="studentid" value="<?=$ans[3]?>">
						<label>班级</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>邮箱</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>手机</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>申请书提交时间</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>发展阶段</label>
						<input class="form-control" id="class" value="<?=$class?>">
					<h3>社会工作</h3>
						<div class="row">
							<div class="col-md-4"><label>组织</label></div>
							<div class="col-md-4"><label>职务</label></div>
							<div class="col-md-4"><label>任期</label></div>					
						</div>
<?php
GetSocialWork($id);
GenerateNewWork();
?>
					<h3>党课研修</h3>
					<div class="row">
						<div class="col-md-6"><label>期数</label></div>
						<div class="col-md-6"><label>是否通过</label></div>
					</div>
<?php
GetDangke($id);
?>
					<h2 id="dangke">党课小组</h2>
						<p>不可在此修改</p>
					<h2 id="zizhu">自主学习</h2>
						<p>不可在此修改</p>
					<h2 id="zhibu">支部联系</h2>
						<p>不可在此修改</p>
					<h2 id="yubei">预备考察</h2>
						<p>不可在此修改</p>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
