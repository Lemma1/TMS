<?php
//include ('config/config.php');
	include('function/login_function.php');
	session_start();
	$account=$_POST['adminaccount'];
	$passwd=$_POST['passwd'];
	if($_POST['ok']==1){
	if ($account=='TMSadmin' && $passwd=='TMSTMSTMS')
	{
		jump('grant_home.php');
		$_SESSION['admin']=1;
	}else{
		$no='<p align="center" style="color:#ff0000;">用户名或密码错误</p>';
	}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head>
<title>TMS权限分配系统</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<h2>TMS权限分配系统</h2>
<h5>本系统用于分配用户的管理权限，制定辅导员、理论组成员等，不同权限成员能够修改的用户资料不同，请妥善保存密码</h5>
<form method="post"  class="form-signin" role="form">
	<?=$no?>
	<label>管理员账户</label>
	<input type="text" value="" name="adminaccount" class="form-control">
	<label>密码</label>
	<input type="password" value="" name="passwd" class="form-control">
    <input type="hidden" value="1" name="ok" />
    <p align="center"><button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button></p>
</form>
</div>
</body>
</html>
