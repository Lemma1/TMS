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
<title>TMSȨ�޹������</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="css/signin.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h2>TMSȨ�޹������ϵͳ</h2>
<h5>�κ��û�����ע�����Ա����ϵͳ����ʼע����û�����Ϊ0��ֻ�ܲ鿴�����˵����ϣ�û�и������ϵ�Ȩ��</h5>
<h5>1����֧����ǣ�2������С���鳤��3����TMS���Ա��4�����������Ա��5����������Ա�����������޸ġ��޸ĺ󣬸��û�������Ӧ�����ݷ���Ȩ�ޡ�</h5>
<form method="post" action="grant_process.php">
	<div class="row">
		<div class="col-md-3"><label>ѧ��</label></div>
		<div class="col-md-3"><label>����</label></div>
		<div class="col-md-3"><label>��ǰ�û�����</label></div>
		<div class="col-md-3"><label>ϣ���޸ĺ���û�����</label></div>
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

<p align="center"><button style="width:200px;" class="btn btn-lg btn-primary btn-block" type="submit">�޸�</button></p>
</form>
</body>
</html>
