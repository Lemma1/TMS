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
<title>�û�ע��</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body >

<div class="container">
<h1>��ע��</h1>
	<form action="" method="post" class="form-signin" role="form">
	<h2>ע����Ϣ</h2>
	<label>�û���</label>
	<input type="text" value="" name="account" class="form-control"/>
	<label>����</label>
	<input type="password" value="" name="passwd" class="form-control"/>
	<label>����һ������</label>
	<input type="password" value="" name="passwd2" class="form-control"/>
	<h2>������Ϣ</h2>
	<label>����</label>
	<input type="text" value="" name="name" class="form-control"/>
	<label>ѧ��</label>
	<input type="text" value="" name="studentid" class="form-control"/>
	<label>�ֻ�</label>
	<input type="text" value="" name="cell" class="form-control"/>
	<label>����</label>
	<input type="text" value="" name="mail" class="form-control"/>
	<label>�༶</label>
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
					<option value="����Ա">����Ա</option>
				 </select>  
				<label>��֧��</label>
      	<select name="dangzhibu" class="form-control input-lg">   
        	<option value="��0��0��һ��֧��">��0��0��һ��֧��</option>   
					<option value="��0��0�ڶ���֧��">��0��0�ڶ���֧��</option> 
				</select>			
		<input type="hidden" value="1" name="ok" />
		<?=$no?>
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="position:relative;top:20px;">ע��</button>

</form>
</div>
</body>
</html>