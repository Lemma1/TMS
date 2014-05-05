<?php
session_start(); 
if ($_SESSION['admin']==1)
{
	//print('ok');
	include ('config/db.php');
	$sql="select account, name, adminroot, studentid from useraccount";
	$ans=$DB->query($sql);

}else
{
	print('You are not allowed!');
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>TMS权限管理分配</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h2>TMS权限管理分配系统</h2>
<h5>任何用户均可注册该人员管理系统，初始注册的用户类型为0，只能查看所有人的资料，没有更改资料的权利</h5>
<h5>1代表党支部书记，2代表党课小组组长，3代表TMS组成员，4代表理论组成员，5代表党建辅导员，请根据情况修改。修改后，该用户具有相应的数据访问权限。</h5>
<form method="post" action="grant_process.php">
	<div class="row">
		<div class="col-md-3"><label>学号</label></div>
		<div class="col-md-3"><label>姓名</label></div>
		<div class="col-md-3"><label>当前用户类型</label></div>
		<div class="col-md-3"><label>希望修改后的用户类型</label></div>
	</div>
<?php
	while($row=mysql_fetch_array($ans))
	{
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">".$row[3]."</div><div class=\"col-md-3\">".$row[1]."</div><div class=\"col-md-3\">".$row[2]."</div>");
		echo("<div class=\"col-md-3\"><input class=\"form-control\" type=\"text\" value=".$row[2]." name=\"".$row[0]."\"></div>");
		echo("</div>");
	}
?>

<p align="center"><button style="width:200px;" class="btn btn-lg btn-primary btn-block" type="submit">修改</button></p>
</form>
</body>
</html>
