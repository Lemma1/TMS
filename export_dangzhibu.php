<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>���������޸�</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;">
<!--������-->
<?php
include('guide.php');
?>

	<div class="container">
<h1>��ѡ����Ҫ������������֧��</h1>
		<table class="table table-hover">
			<thead><tr><th>�༶</th><th>˵��</th></tr></thead>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��3��֧��>��3��֧��</a></th><th>CE31 CE32 CE33 CE34</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��2��2��֧��>��2��2��֧��</a></th><th>CE21 CE22 CE23 CM2</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��1��1��һ��֧��>��1��1��һ��֧��</a></th><th>CE11 CE12</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��1��1�ڶ���֧��>��1��1�ڶ���֧��</a></th><th>CE13 CM1</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��01��֧��>��01��֧��</a></th><th>CE01</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��02��֧��>��02��֧��</a></th><th>CE02</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��03��֧��>��03��֧��</a></th><th>CE03</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��0��֧��>��0��֧��</a></th><th>CM0</th>
		</table>

	</div>
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav navbar-right">
			<button class="btn btn-lg" onclick="window.location='home.php'">������ҳ</button>
		</ul>
	</div>
</div>
</body>

</html>
