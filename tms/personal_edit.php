<?php
	include ('config/db.php');
	include ('function/basicinfo.php');
	session_start();
	$account=$_SESSION['account'];
	//print($account);
	$sql= "select id from useraccount where account='$account'";
	$ans=$DB->fetch_one_array($sql);
	$id=$ans[0];
	$sql= "select * from useraccount where id='$id'";
	$ans=$DB->fetch_one_array($sql);
	$DB->free();
	$class=Getclass($ans[5]);

function GetClass($classcode)
{
	return 1;
}

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
	

<!--���ݲ���-->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="bs-sidebar hidden-print affix" role="complementary" style="width:240px;">
					<ul class="nav bs-sidenav">
						<li><a href="#basicinfo">������Ϣ</a></li>
						<li><a href="#dangke">����С��</a></li>
						<li><a href="#zizhu">����ѧϰ</a></li>
						<li><a href="#zhibu">֧����ϵ</a></li>
						<li><a href="#yubei">Ԥ������</a></li>
					<ul>	
				</div>
			</div>

			<div class="col-md-9">
				<div>
					<h2 id="basicinfo">������Ϣ</h2>
					<h3>������Ϣ</h3>
					<form role="form">
						<label>����</label>
						<input class="form-control" id="name" value="<?=$ans[2]?>">
						<label>ѧ��</label>
						<input class="form-control" id="studentid" value="<?=$ans[3]?>">
						<label>�༶</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>����</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>�ֻ�</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>�������ύʱ��</label>
						<input class="form-control" id="class" value="<?=$class?>">
						<label>��չ�׶�</label>
						<input class="form-control" id="class" value="<?=$class?>">
					<h3>��Ṥ��</h3>
						<div class="row">
							<div class="col-md-4"><label>��֯</label></div>
							<div class="col-md-4"><label>ְ��</label></div>
							<div class="col-md-4"><label>����</label></div>					
						</div>
<?php
GetSocialWork($id);
GenerateNewWork();
?>
					<h3>��������</h3>
					<div class="row">
						<div class="col-md-6"><label>����</label></div>
						<div class="col-md-6"><label>�Ƿ�ͨ��</label></div>
					</div>
<?php
GetDangke($id);
?>
					<h2 id="dangke">����С��</h2>
						<p>�����ڴ��޸�</p>
					<h2 id="zizhu">����ѧϰ</h2>
						<p>�����ڴ��޸�</p>
					<h2 id="zhibu">֧����ϵ</h2>
						<p>�����ڴ��޸�</p>
					<h2 id="yubei">Ԥ������</h2>
						<p>�����ڴ��޸�</p>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
