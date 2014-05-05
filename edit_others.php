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
<title>个人资料</title>
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
<!--导航栏-->
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
						<li><a href="#basicinfo">基本信息</a></li>
						<li><a href="#dangke">党课小组</a></li>
						<li><a href="#zizhu">自主学习</a></li>
						<li><a href="#zhibu">支部联系</a></li>
						<li><a href="#yubei">预备考察</a></li>
					<ul>	
				</div>
			</div>	
			<div class="col-md-9">
				<div>
					<form role="form" onsubmit="return checkForm(this)" action="update/edit_others_process.php" method="POST">
<div class="panel panel-primary">
	<div id="basicinfo" class="panel-heading">基本信息</div>
	<div class="panel-body">
					<h3>个人信息</h3>
<?php
if ($adminroot==3 or ($adminroot==0 and $account==$otheraccount) or $adminroot==5 or $adminroot==2 or $adminroot==1 or $adminroot==4)
{
	GenerateBasicInfo($id);
}else
{
	NotGetBasicInfo();
}

?>

					<h3>社会工作<span id="add_jiben_shehui" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>

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

					<h3>党课研修<span id="add_jiben_dangke" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
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
	<div id="dangke" class="panel-heading">党课小组</div>
	<div class="panel-body">
					<h3>小组活动<span id="add_dangke_xiaozu" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==2 or $adminroot==3 or $adminroot==5)
{
	GetXiaozu($id);
}else
{
	NotGetXiaozu();
}
?>
					<h3>思辨平台<span id="add_dangke_sibian" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==4 or $adminroot==5)
{
	GetSibian($id);

}else
{
	NotGetSibian();
}
?>
					<h3>求索杯<span id="add_dangke_qiusuo" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
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
	<div id="zizhu" class="panel-heading">自主学习</div>
	<div class="panel-body">
					<h3>理论学习<span id="add_zizhu_lilun" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3  or $account==$otheraccount or $adminroot==5)
{
	GetLilun($id);

}else
{
	NotGetLilun();
}
?>
					<h3>活动参与<span id="add_zizhu_huodong" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
<?php
if ($adminroot==3  or $account==$otheraccount or $adminroot==5)
{
	GetHuodong($id);

}else
{
	NotGetHuodong();
}
?>
					<h3>红网投稿<span id="add_zizhu_tougao" style="float:right;cursor:pointer" class="glyphicon glyphicon-plus"></span></h3>
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
echo	"<div id=\"zhibu\" class=\"panel-heading\">支部联系</div>";
echo "	<div class=\"panel-body\">";
//echo"				<h2 id=\"zhibu\">支部联系</h2>";
echo"					<h3>联系情况<span id=\"add_zhibu_lianxi\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetLianxi($id);

echo"						<h3>思想汇报<span id=\"add_zhibu_huibao\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetHuibao($id);

echo"						<h3>发展会</h3>";

GetFanzhan($id);

echo"						<h3>支部活动<span id=\"add_zhibu_zhibu\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";

GetZhibu($id);
echo "</div></div>";
echo "<div class=\"panel panel-primary\">";
echo	"<div id=\"yubei\" class=\"panel-heading\">预备考察</div>";
echo "	<div class=\"panel-body\">";
//echo"					<h2 id=\"yubei\">预备考察</h2>";
echo"					<h3>思想汇报<span id=\"add_yubei_huibao\" style=\"float:right;cursor:pointer\" class=\"glyphicon glyphicon-plus\"></h3>";


GetHuibao2($id);

echo"					<h3>中期小结</h3>";

GetZhongqi($id);

echo"					<h3>全年总结</h3>";

GetQuannian($id);
echo"<h3>转正会</h3>";

	GetZhuanzheng($id);
echo "</div></div>";
}else
{	
	echo "<div class=\"panel panel-warning\">";
	echo	"<div id=\"yubei\" class=\"panel-heading\">积极分子用板块</div>";
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

	<button class="btn btn-lg" type="submit">修改</button>

		</form>
			<button class="btn btn-lg" onclick="window.location='home.php'">返回主页</button>
		</ul>
	</div>
</div>
</body>
</html>
