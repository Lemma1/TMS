<?php
include ('function/basicinfo.php');
//include ('function/other.php');
	session_start();
	$class=$_GET["class"];
	function GetStudentName($class)
	{
		include ('config/db.php');
		//$sql= "select account,name,studentid,class,stage from useraccount order by studentid";
		$sql= "select account,name,studentid,class,stage from useraccount where class='".$class."' order by studentid";
		$ans=$DB->query($sql);
		while($row=mysql_fetch_array($ans))
		{
			echo("<tr><th><a href=\"edit_others.php?otheraccount=".$row[0]."\">".$row[1]."</a></th><th>".$row[3]."</th><th>".$row[2]."</th><th>".Getstage($row[4])."</th></tr>");
		}
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人资料修改</title>
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
		<table class="table table-hover">
			<thead><tr><th>姓名</th><th>班级</th><th>学号</th><th>发展阶段</th></tr></thead>
<?php
GetStudentName($class);
?>
		</table>

	</div>

