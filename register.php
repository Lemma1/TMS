<?php
include('config/db.php');
include('function/login_function.php');
if($_POST['ok']==1)
{
	if($_POST['passwd']==$_POST['passwd2'])
	{
		$account=$_POST['account'];
		$name=$_POST['name'];
		$passwd=$_POST['passwd'];
		$studentid=$_POST['studentid'];
		$class=$_POST['selectClass'];
		$mail=$_POST['mail'];		
		$cell=$_POST['cell'];	
		$dangzhibu=$_POST['dangzhibu'];	
		$type = 0;
		$sql="INSERT INTO useraccount (`id`, `account`, `name`, `studentid`, `class`, `dangzhibu`, `mail`, `cell`, `tmstype`,`password`) VALUES (NULL,'$account', '$name','$studentid', '$class', '$dangzhibu','$mail','$cell', $type,'$passwd')" ;
		$DB->query($sql);
		$no='<p align="center" style="color:#ff0000;">success.</p>';
		jump('login.php');
	}
	else
	{
		$no='<p align="center" style="color:#ff0000;">passwords do not match.</p>';	
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户注册</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
$("#account_in").click(function(){
    $("#account_in").val("");
  });
});
</script>
</head>

<body >

<div class="container">
<h1>请注册</h1>
	<form action="" method="post" class="form-signin" role="form">
	<h2>注册信息</h2>
	<label>用户名</label>
	<input type="text" id="account_in" value="请使用学号作为用户名" name="account" class="form-control"/>
	<label>密码</label>
	<input type="password" value="" name="passwd" class="form-control"/>
	<label>再输一遍密码</label>
	<input type="password" value="" name="passwd2" class="form-control"/>
	<h2>个人信息</h2>
	<label>姓名</label>
	<input type="text" value="" name="name" class="form-control"/>
	<label>学号</label>
	<input type="text" value="" name="studentid" class="form-control"/>
	<label>手机</label>
	<input type="text" value="" name="cell" class="form-control"/>
	<label>邮箱</label>
	<input type="text" value="" name="mail" class="form-control"/>
	<label>班级</label>
      	<select name="selectClass" class="form-control input-lg">   
        	<option value="CE31">CE31</option>   
        	<option value="CE32">CE32</option>   
        	<option value="CE33">CE33</option>   
        	<option value="CE34">CE34</option>   
        	<option value="CE21">CE21</option>   
        	<option value="CE22">CE22</option>   
        	<option value="CE23">CE23</option>   
		<option value="CM2">CM2</option>          
		<option value="CE11">CE11</option>   
        	<option value="CE12">CE12</option>   
        	<option value="CE13">CE13</option>   
		<option value="CM1">CM1</option> 
        	<option value="CE01">CE01</option>   
        	<option value="j02">CE02</option>   
        	<option value="j03">CE03</option>   
					<option value="CM0">CM0</option> 
					<option value="辅导员">辅导员</option>
				 </select>  
				<label>党支部</label>
      	<select name="dangzhibu" class="form-control input-lg">   
        	<option value="结3党支部">结3党支部</option>   
					<option value="结2管2党支部">结2管2党支部</option>
					<option value="结1管1第一党支部">结1管1第一党支部</option>
					<option value="结1管1第二党支部">结1管1第二党支部</option>
					<option value="结01党支部">结01党支部</option>
					<option value="结02党支部">结02党支部</option>
					<option value="结03党支部">结03党支部</option>
					<option value="管0党支部">管0党支部</option>
				</select>			
		<input type="hidden" value="1" name="ok" />
		<?=$no?>
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="position:relative;top:20px;">注册</button>

</form>
</div>
</body>
</html>
