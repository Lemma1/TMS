<?php
session_start(); 
if ($_SESSION['admin']!=1)
{
	print('You are not allowed!');
}else
{
	include ('config/db.php');
	$DB2 = new DB_MySQL;
	$sql="select account, adminroot from useraccount";
	$ans=$DB->query($sql);
	$i=0;
	while($row=mysql_fetch_array($ans))
	{
		$account=$row[0];
		$new_adminroot=$_POST["$account"];
		if($new_adminroot!=$row[1])
		{
		$sql1="UPDATE useraccount SET `adminroot` = ".$new_adminroot." WHERE `account` ='".$account."'";	
		$ans1=$DB2->query($sql1);
		}
	}
	$DB2->free();
	$flag=1;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>TMS权限管理分配</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script language="javascript">
function jump()
{
 window.location="grant_home.php"
}
</script>

</head>
<body>
<div class="container">
<?php
if ($flag==1)
{
	echo("<h2>修改成功，点击跳转</h2>");
	echo("<button style=\"width:200px;\" class=\"btn btn-lg btn-primary btn-block\" onClick=\"jump()\">返回</button>");
}
?>
</div>
</body>
