<?php
session_start();
include('function/basicinfo.php');
include('function/dangke.php');
include('function/zizhu.php');
include('function/zhibu.php');
include('function/yubei.php');
	$otheraccount=$_GET["otheraccount"];
	include ('config/db.php');
	$sql= "select id from useraccount where account='$otheraccount'";
	$ans=$DB->fetch_one_array($sql);
	$id=$ans[0];
	$sql= "select adminroot,stage from useraccount where account='".$_SESSION["account"]."'";
	$ans=$DB->fetch_one_array($sql);
	$adminroot=$ans[0];
	$stage=$ans[1];
	$account=$_SESSION["account"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
<link rel="stylesheet" href="js/date/bootstrap.css">
<script type="text/javascript" src="js/date/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/addicon.js"></script>
<script type="text/javascript" src="js/date/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="js/date/datepicker.css">
<script type="text/javascript">
$(function(){
$('.date').datepicker();
});
</script>

</head>


<body style="padding-top: 70px;padding-bottom: 70px;">
<!--������-->
<?php
include('guide.php');
?>
		
<?php
//echo($adminroot);
?>
<div class="container">
	<div class="row">
			<div class="col-md-3">
				<div class="bs-sidebar hidden-print affix" role="complementary">
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
					<form role="form" onsubmit="return checkForm(this)" action="update/edit_others_process.php" method="POST">
<div class="panel panel-primary">
	<div id="basicinfo" class="panel-heading">������Ϣ</div>
	<div class="panel-body">
					<h3>������Ϣ</h3>
<?php
if ($adminroot==3 or ($adminroot==0 and $account==$otheraccount) or $adminroot==5 or $adminroot==2 or $adminroot==1 or $adminroot==4)
{
	GenerateBasicInfo($id);
}else
{
	NotGetBasicInfo();
}

?>

					<h3>��Ṥ��<span id="add_jiben_shehui" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>

<?php
if ($adminroot==3 or ($adminroot==0 and $account==$otheraccount) or $adminroot==5)
{
	GetSocialWork($id);
	GenerateNewWork();
}else
{
	NotGetSocialWork();
}
?>

					<h3>��������<span id="add_jiben_dangke" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3 or $account==$otheraccount or $adminroot==5)
{
	GetDangke($id);
}else
{
	NotGetDangke();
}
?>
</div>
	</div>
<div class="panel panel-primary">
	<div id="dangke" class="panel-heading">����С��</div>
	<div class="panel-body">
					<h3>С��<span id="add_dangke_xiaozu" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==2 or $adminroot==3 or $adminroot==5)
{
	GetXiaozu($id);
}else
{
	NotGetXiaozu();
}
?>
					<h3>˼��ƽ̨<span id="add_dangke_sibian" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==4 or $adminroot==5)
{
	GetSibian($id);

}else
{
	NotGetSibian();
}
?>
					<h3>������<span id="add_dangke_qiusuo" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3 or $adminroot==5)
{
	GetQiusuo($id);

}else
{
	NotGetQiusuo();
}
?>
</div>
	</div>
<div class="panel panel-primary">
	<div id="zizhu" class="panel-heading">����ѧϰ</div>
	<div class="panel-body">
					<h3>����ѧϰ<span id="add_zizhu_lilun" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3  or $account==$otheraccount or $adminroot==5)
{
	GetLilun($id);

}else
{
	NotGetLilun();
}
?>
					<h3>�����<span id="add_zizhu_huodong" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3  or $account==$otheraccount or $adminroot==5)
{
	GetHuodong($id);

}else
{
	NotGetHuodong();
}
?>
					<h3>����Ͷ��<span id="add_zizhu_tougao" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3 or $adminroot==5)
{
	GetTougao($id);

}else
{
	NotGetTougao();
}
?>
</div>
	</div>

<?php
if ($adminroot==1 or $adminroot==5)
{
echo "<div class=\"panel panel-primary\">";
echo	"<div id=\"zhibu\" class=\"panel-heading\">֧����ϵ</div>";
echo "	<div class=\"panel-body\">";
//echo"				<h2 id=\"zhibu\">֧����ϵ</h2>";
echo"					<h3>��ϵ���<span id=\"add_zhibu_lianxi\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetLianxi($id);

echo"						<h3>˼��㱨<span id=\"add_zhibu_huibao\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetHuibao($id);

echo"						<h3>��չ��</h3>";

GetFanzhan($id);

echo"						<h3>֧���<span id=\"add_zhibu_zhibu\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetZhibu($id);
echo "</div></div>";
echo "<div class=\"panel panel-primary\">";
echo	"<div id=\"yubei\" class=\"panel-heading\">Ԥ������</div>";
echo "	<div class=\"panel-body\">";
//echo"					<h2 id=\"yubei\">Ԥ������</h2>";
echo"					<h3>˼��㱨<span id=\"add_yubei_huibao\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";


GetHuibao2($id);

echo"					<h3>����С��</h3>";

GetZhongqi($id);

echo"					<h3>ȫ���ܽ�</h3>";

GetQuannian($id);
echo"<h3>ת����</h3>";

	GetZhuanzheng($id);
echo "</div></div>";
}else
{	
	echo "<div class=\"panel panel-warning\">";
	echo	"<div id=\"yubei\" class=\"panel-heading\">���������ð��</div>";
	echo "	<div class=\"panel-body\">";
	NotGetRuDang();
	echo "</div></div>";
}
?>
<p></p>
<input type="hidden" value=<?=$id?> name="otherid" />
				</div>				
			</div>
	</div>
</div>
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav navbar-right">

	<button class="btn btn-lg" type="submit">�޸�</button>

		</form>
			<button class="btn btn-lg" onclick="window.location='home.php'">������ҳ</button>
		</ul>
	</div>
</div>
</body>
</html>
