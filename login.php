<?php
	$islogin=2;
	include ('config/db.php');
	include ('config/config.php');
	if($_POST['ok']==1){
		$account=$_POST['account'];
		$_SESSION['account']=$account;
		$passwd=$_POST['passwd'];
		//print(account_exit($account));
		//print(passwd_match($account,$passwd));
		if(account_exit($account)==1 && passwd_match($account,$passwd)==1){
			$_SESSION['islogin']=1;
			jump('home.php');
		}else{
			$no='<p align="center" style="color:#ff0000;">用户名或密码错误</p>';
		}
	}

function account_exit($account)
{
	//include ('config/db.php');
	$DB = new DB_MySQL;
	$sql= "select * from useraccount where account='$account'";
	$ans=$DB->fetch_one_array($sql);
	if ( $ans== NULL )
	{
		return 0;
	}else
	{
		return 1;
	}	
}

function passwd_match($account,$passwd)
{
	//include ('config/db.php');
	$DB = new DB_MySQL;
	$sql= "select password from useraccount where account='$account'";
	$ans=$DB->query($sql);
	$array=mysql_fetch_array($ans);
	if ($array[0]==$passwd)
	{
		return 1;
	}else
	{
		return 0;
	}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>登陆界面</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background:url(img/bg2.JPG) center right no-repeat;background-attachment:fixed;width:100%;">
<div class="container">
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">

	</div>
</div>
	<h1><strong>土木建管系党建数据库系统</strong></h1>
<div class="panel panel-info" style="height:400px;width:40%;position:relative;top:60px;">
	<div class="panel-heading">请登录</div>
	<div class="panel-body">
	<form method="post" class="form-signin" role="form" action="">
		<?=$no?>
		<p><strong>学号:</strong><input class="form-control" type="text" value="" name="account" /></p>
    <p><strong>密码:</strong><input class="form-control" type="password" value="" name="passwd" /></p>
    <input type="hidden" value="1" name="ok" />
    <p align="center"><button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button></p>
		<button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location='register.php'">注册</button>
</form>
  </div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
</div>
</div>
</div>

</body>
</html>
