<?php


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>���������޸�</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��0��0��һ��֧��>��0��0��һ��֧��</a></th><th>CE01 CE02</th>
			<tr><th><a href=export_dangzhibu_process.php?dangzhibu=��0��0�ڶ���֧��>��0��0�ڶ���֧��</a></th><th>CE03 CM0</th>
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
