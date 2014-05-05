<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人资料修改</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 70px;">
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
	<a class="navbar-brand" href="#">土木建管系党建数据库系统</a>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="../personal.php">个人中心</a></li>
		<li><a href="../name_list.php">查看他人</a></li>
		<li><a href="../name_list_foredit.php">管理他人</a></li>
		<li><a href="../home.php">返回主页</a></li>
		<li><a href="../logout.php">登出</a></li>
	</ul>
	</div>
</div>

<?php
include ('../config/db.php');
//echo ($_POST["time"]);
//basic
if ($_POST['basicinfo']=='null'){
	echo("<p>基本信息 个人信息 无需更新!</p>");
}else
{
	$sql1="UPDATE useraccount SET `name` ='".$_POST["name"]."' , `studentid`='".$_POST["studentid"]."', `class`='".$_POST["class"]."', `mail`='".$_POST["mail"]."', `cell`='".$_POST['cellphone']."', `time`='".$_POST["time"]."', `stage`=".$_POST["stage"].", `dangzhibu`='".$_POST["dangzhibu"]."'  WHERE `id` =".$_POST['otherid'];
	$DB->query($sql1);
}
//基本信息 社会工作
if ($_POST['jiben_shegong']=='null'){
	echo("<p>基本信息 社会工作 无需更新!</p>");
}else
{
	$sql="select workid from basicinfo_socialwork where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$zuzhi="basic_social_zuzhi".$i;
		$zhiwu="basic_social_zhiwu".$i;
		$renqi="basic_social_renqi".$i;
		$sql1="UPDATE basicinfo_socialwork SET `Associate` ='".$_POST["$zuzhi"]."' , `Position`='".$_POST["$zhiwu"]."', `Duration`='".$_POST["$renqi"]."'  WHERE `workid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_basic_social_zuzhi"]!="" and $_POST["new_basic_social_zhiwu"]!="" and $_POST["new_basic_social_renqi"]!="")
	{
		$sql1="insert into basicinfo_socialwork values (null, ".$_POST['otherid'].", '".$_POST["new_basic_social_zuzhi"]."','".$_POST["new_basic_social_zhiwu"]."','".$_POST["new_basic_social_renqi"]."')";	
		$DB->query($sql1);
	}
	echo("<p>基本信息 社会工作 更新完毕 !</p>");
}


//基本信息 党课研修
if ($_POST['jiben_dangke']=='null'){
	echo("<p>基本信息 党课研修 无需更新!</p>");
}else
{
	$sql="select dangkeid from basicinfo_dangke where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	if ($num==1)
	{
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$qishu="jiben_dangke_qishu".$i;
			$tonguo="jiben_dangke_Pass".$i;
			$sql1="UPDATE basicinfo_dangke SET `Qishu` ='".$_POST["$qishu"]."' , 
`Pass`='".$_POST["$tonguo"]."' WHERE `dangkeid` =".$sample[0];	
			$DB->query($sql1);
		}
	}else{
		$num=0;
		$qishu="jiben_dangke_qishu".$num;
		$tonguo="jiben_dangke_Pass".$num;
		if ($_POST["$qishu"]!="" and $_POST["$tonguo"]!="")
		{
			$sql="insert into basicinfo_dangke values (null,".$_POST['otherid'].",'".$_POST["$qishu"]."','".$_POST["$tonguo"]."')";
			$DB->query($sql);
		}
	}
	echo("<p>基本信息 党课研修 更新完毕 !</p>");
}


//党课 小组
if ($_POST['dangke_xiaozu']=='null'){
	echo("<p>党课小组 小组活动 无需更新!</p>");
}else
{
	$sql="select acitivityid from dangkexiaozu_activity where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="dangke_xiaozu_time".$i;
		$zhuti="dangke_xiaozu_zhuti".$i;
		$attend="dangke_xiaozu_canjia".$i;
		$sql1="UPDATE dangkexiaozu_activity SET `Time` ='".$_POST["$time"]."' , `Theme`='".$_POST["$zhuti"]."', `Attend`='".$_POST["$attend"]."'  WHERE `acitivityid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_dangke_xiaozu_time"]!="" and $_POST["new_dangke_xiaozu_zhuti"]!="" and $_POST["new_dangke_xiaozu_canjia"]!="")
	{
		$sql1="insert into dangkexiaozu_activity values (null, ".$_POST['otherid'].", '".$_POST["new_dangke_xiaozu_time"]."','".$_POST["new_dangke_xiaozu_zhuti"]."','".$_POST["new_dangke_xiaozu_canjia"]."')";	
		$DB->query($sql1);
	}
	echo("<p>党课小组 小组活动 更新完毕 !</p>");
}

//党课 思辨
if ($_POST['dangke_sibian']=='null'){
	echo("<p>党课小组 思辨平台 无需更新!</p>");
}else
{
	$sql="select sibianid from dangkexiaozu_sibian where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="dangke_sibian_time".$i;
		$zhuti="dangke_sibian_zhuti".$i;
		$canjia="dangke_sibian_canjia".$i;
		$haotie="dangke_sibian_haotie".$i;
		$pingfen="dangke_sibian_pingfen".$i;
		$sql1="UPDATE dangkexiaozu_sibian SET `Time` ='".$_POST["$time"]."' , `Theme`='".$_POST["$zhuti"]."', `Canjia`='".$_POST["$canjia"]."', `Haotie`='".$_POST["$haotie"]."', `pingfen`='".$_POST["$pingfen"]."'  WHERE `sibianid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_dangke_sibian_time"]!="" and $_POST["new_dangke_sibian_zhuti"]!="" and $_POST["new_dangke_sibian_canjia"]!="" and $_POST["new_dangke_sibian_haotie"]!=""and $_POST["new_dangke_sibian_pingfen"]!="")
	{
		$sql1="insert into dangkexiaozu_sibian values (null, ".$_POST["otherid"].", '".$_POST["new_dangke_sibian_time"]."','".$_POST["new_dangke_sibian_zhuti"]."','".$_POST["new_dangke_sibian_canjia"]."','".$_POST["new_dangke_sibian_haotie"]."','".$_POST["new_dangke_sibian_pingfen"]."')";	
		$DB->query($sql1);
	}
	echo("<p>党课小组 思辨平台 更新完毕 !</p>");
}

//党课 求索
if ($_POST['dangke_xiaozu']=='null'){
	echo("<p>党课小组 求索杯 无需更新!</p>");
}else
{
	$sql="select qiusuoid from dangkexiaozu_qiusuo where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="dangke_qiusuo_time".$i;
		$jibie="dangke_qiusuo_jibie".$i;
		$chengji="dangke_qiusuo_chengji".$i;
		$sql1="UPDATE dangkexiaozu_qiusuo SET `Time` ='".$_POST["$time"]."' , `Level`='".$_POST["$jibie"]."', `Score`=".$_POST["$chengji"]."  WHERE `qiusuoid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_dangke_qiusuo_time"]!="" and $_POST["new_dangke_qiusuo_jibie"]!="" and $_POST["new_dangke_qiusuo_chengji"]!="")
	{
		$sql1="insert into dangkexiaozu_qiusuo values (null, '".$_POST["new_dangke_qiusuo_time"]."', ".$_POST["otherid"].",'".$_POST["new_dangke_qiusuo_jibie"]."',".$_POST["new_dangke_qiusuo_chengji"].")";	
		$DB->query($sql1);
	}
	echo("<p>党课小组 求索杯 更新完毕 !</p>");
}

//自主 理论
if ($_POST['zizhu_lilun']=='null'){
	echo("<p>自主学习 理论学习 无需更新!</p>");
}else
{
	$sql="select lilunid from zizhu_lilun where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zizhu_lilun_time".$i;
		$xingshi="zizhu_lilun_xingshi".$i;
		$neirong="zizhu_lilun_neirong".$i;
		$sql1="UPDATE zizhu_lilun SET `Time` ='".$_POST["$time"]."' , `Style`='".$_POST["$xingshi"]."', `Content`='".$_POST["$neirong"]."'  WHERE `lilunid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zizhu_lilun_time"]!="" and $_POST["new_zizhu_lilun_xingshi"]!="" and $_POST["new_zizhu_lilun_neirong"]!="")
	{
		$sql1="insert into zizhu_lilun values (null, ".$_POST['otherid'].", '".$_POST["new_zizhu_lilun_time"]."','".$_POST["new_zizhu_lilun_xingshi"]."','".$_POST["new_zizhu_lilun_neirong"]."')";	
		$DB->query($sql1);
	}
	echo("<p>自主学习 理论学习 更新完毕 !</p>");
}

//自主 活动
if ($_POST['zizhu_huodong']=='null'){
	echo("<p>自主学习 活动参与 无需更新!</p>");
}else
{
	$sql="select huodong from zizhu_huodong where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zizhu_huodong_time".$i;
		$xingshi="zizhu_huodong_xingshi".$i;
		$didian="zizhu_huodong_didian".$i;
		$neirong="zizhu_huodong_neirong".$i;
		$sql1="UPDATE zizhu_huodong SET `Time` ='".$_POST["$time"]."' , `Style`='".$_POST["$xingshi"]."', `Position`='".$_POST["$didian"]."', `Content`='".$_POST["$neirong"]."'  WHERE `huodong` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zizhu_huodong_time"]!="" and $_POST["new_zizhu_huodong_xingshi"]!="" and $_POST["new_zizhu_huodong_didian"]!="" and $_POST["new_zizhu_huodong_neirong"]!="")
	{
		$sql1="insert into zizhu_huodong values (null, ".$_POST["otherid"].", '".$_POST["new_zizhu_huodong_time"]."','".$_POST["new_zizhu_huodong_xingshi"]."','".$_POST["new_zizhu_huodong_didian"]."','".$_POST["new_zizhu_huodong_neirong"]."')";	
		$DB->query($sql1);
	}
	echo("<p>自主学习 活动参与 更新完毕 !</p>");
}

//自主 投稿
if ($_POST['zizhu_tougao']=='null'){
	echo("<p>自主学习 红网投稿 无需更新!</p>");
}else
{
	$sql="select tougaoid from zizhu_tougao where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zizhu_tougao_time".$i;
		$biaoti="zizhu_tougao_biaoti".$i;
		$sql1="UPDATE zizhu_tougao SET `Time` ='".$_POST["$time"]."' , `Title`='".$_POST["$biaoti"]."'  WHERE `tougaoid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zizhu_tougao_time"]!="" and $_POST["new_dangke_xiaozu_zhuti"]!="")
	{
		$sql1="insert into zizhu_tougao values (null, ".$_POST['otherid'].", '".$_POST["new_zizhu_tougao_time"]."','".$_POST["new_dangke_xiaozu_zhuti"]."')";	
		$DB->query($sql1);
	}
	echo("<p>自主学习 红网投稿 更新完毕 !</p>");
}

//支部 联系
if ($_POST['rudang']=='null'){
	echo("<p>支部联系 联系情况 无需更新!</p>");
}else
{
	$sql="select qingkuangid from zhibu_lianxiqingkuang where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zhibu_lianxi_time".$i;
		$didian="zhibu_lianxi_didian".$i;
		$lianxiren="zhibu_lianxi_lianxiren".$i;
		$neirong="zhibu_lianxi_neirong".$i;
		$sql1="UPDATE zhibu_lianxiqingkuang SET `Time` ='".$_POST["$time"]."' , `Location`='".$_POST["$didian"]."', `Contact`='".$_POST["$lianxiren"]."', `Content`='".$_POST["$neirong"]."'  WHERE `qingkuangid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zhibu_lianxi_time"]!="" and $_POST["new_zhibu_lianxi_didian"]!="" and $_POST["new_zhibu_lianxi_lianxiren"]!="" and $_POST["new_zhibu_lianxi_neirong"]!="")
	{
		$sql1="insert into zhibu_lianxiqingkuang values (null, ".$_POST["otherid"].", '".$_POST["new_zhibu_lianxi_time"]."','".$_POST["new_zhibu_lianxi_didian"]."','".$_POST["new_zhibu_lianxi_lianxiren"]."','".$_POST["new_zhibu_lianxi_neirong"]."')";	
		$DB->query($sql1);
	}
	echo("<p>支部联系 联系情况 更新完毕 !</p>");
}

//支部 思想
if ($_POST['rudang']=='null'){
	echo("<p>支部联系 思想汇报 无需更新!</p>");
}else
{
	$sql="select huibaoid from zhibu_huibao where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zhibu_sixiang_time".$i;
		$neirong="zhibu_sixiang_neirong".$i;
		$sql1="UPDATE zhibu_huibao SET `Time` ='".$_POST["$time"]."' , `Content`='".$_POST["$neirong"]."'  WHERE `huibaoid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zhibu_sixiang_time"]!="" and $_POST["new_zhibu_sixiang_neirong"]!="")
	{
		$sql1="insert into zhibu_huibao values (null, ".$_POST['otherid'].", '".$_POST["new_zhibu_sixiang_time"]."','".$_POST["new_zhibu_sixiang_neirong"]."')";	
		$DB->query($sql1);
	}
	echo("<p>支部联系 思想汇报 更新完毕 !</p>");
}

//支部 发展会
if ($_POST['rudang']=='null'){
	echo("<p>支部联系 发展会 无需更新!</p>");
}else
{
	$sql="select fazhanhuiid from zhibu_fazhanhui where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	if ($num==1)
	{
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$time="zhibu_fanzhanhui_time".$i;
			$zong="zhibu_fanzhanhui_zong".$i;
			$zancheng="zhibu_fanzhanhui_zancheng".$i;
			$fandui="zhibu_fanzhanhui_fandui".$i;
			$qiquan="zhibu_fanzhanhui_qiquan".$i;
			$sql1="UPDATE zhibu_fazhanhui SET `Time` ='".$_POST["$time"]."' , `Total`=".$_POST["$zong"].", `Agree`=".$_POST["$zancheng"].", `Against`=".$_POST["$fandui"].", `Giveup`=".$_POST["$qiquan"]."  WHERE `fazhanhuiid` =".$sample[0];	
			$DB->query($sql1);
		}
	}else{
		$num=0;
		$time="zhibu_fanzhanhui_time".$num;
		$zong="zhibu_fanzhanhui_zong".$num;
		$zancheng="zhibu_fanzhanhui_zancheng".$num;
		$fandui="zhibu_fanzhanhui_fandui".$num;
		$qiquan="zhibu_fanzhanhui_qiquan".$num;
		if ($_POST['otherid']!="" and $_POST["$time"]!="" and $_POST["$zong"]!="" and $_POST["$zancheng"]!="" and $_POST["$fandui"]!= "" and $_POST["$qiquan"]!="")
		{
			$sql="insert into zhibu_fazhanhui values (null,".$_POST['otherid'].",'".$_POST["$time"]."',".$_POST["$zong"].",".$_POST["$zancheng"].",".$_POST["$fandui"].",".$_POST["$qiquan"].")";
			$DB->query($sql);
		}
	}
	echo("<p>支部联系 发展会 更新完毕 !</p>");
}

//支部 活动
if ($_POST['rudang']=='null'){
	echo("<p>支部联系 支部活动 无需更新!</p>");
}else
{
	$sql="select huodongid from zhibu_huodong where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="zhibu_huodong_time".$i;
		$didian="zhibu_huodong_didian".$i;
		$zhuti="zhibu_huodong_zhuti".$i;
		$canyu="zhibu_huodong_canyu".$i;
		$sql1="UPDATE zhibu_huodong SET `Time` ='".$_POST["$time"]."' , `Location`='".$_POST["$didian"]."', `Theme`='".$_POST["$zhuti"]."', `Results`='".$_POST["$canyu"]."'  WHERE `huodongid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_zhibu_huodong_time"]!="" and $_POST["new_zhibu_huodong_didian"]!="" and $_POST["new_zhibu_huodong_zhuti"]!="" and $_POST["new_zhibu_huodong_canyu"]!="")
	{
		$sql1="insert into zhibu_huodong values (null, ".$_POST["otherid"].", '".$_POST["new_zhibu_huodong_time"]."','".$_POST["new_zhibu_huodong_didian"]."','".$_POST["new_zhibu_huodong_zhuti"]."','".$_POST["new_zhibu_huodong_canyu"]."')";	
		$DB->query($sql1);
	}
	echo("<p>支部联系 支部活动 更新完毕 !</p>");
}

//预备 思想
if ($_POST['rudang']=='null'){
	echo("<p>预备考察 思想汇报 无需更新!</p>");
}else
{
	$sql="select huibaoid from yubei_huibao where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		$time="yubei_huibao_time".$i;
		$neirong="yubei_huibao_neirong".$i;
		$sql1="UPDATE yubei_huibao SET `Time` ='".$_POST["$time"]."' , `Content`='".$_POST["$neirong"]."'  WHERE `huibaoid` =".$sample[0];	
		$DB->query($sql1);
	}
	if ($_POST["new_yubei_huibao_time"]!="" and $_POST["new_yubei_huibao_neirong"]!="")
	{
		$sql1="insert into yubei_huibao values (null, ".$_POST['otherid'].", '".$_POST["new_yubei_huibao_time"]."','".$_POST["new_yubei_huibao_neirong"]."')";	
		$DB->query($sql1);
	}
	echo("<p>预备考察 思想汇报 更新完毕 !</p>");
}

//预备 中期
if ($_POST['rudang']=='null'){
	echo("<p>预备考察 中期小结 无需更新!</p>");
}else
{
	$sql="select zhongqiid from yubei_zhongqi where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	if ($num==1)
	{
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$time="yubei_zhongqi_time".$i;
			$tijiao="yubei_zhongqi_tijiao".$i;
			$sql1="UPDATE yubei_zhongqi SET `Time` ='".$_POST["$time"]."' , `Tijiao`='".$_POST["$tijiao"]."' WHERE `zhongqiid` =".$sample[0];	
			$DB->query($sql1);
		}
	}else{
		$num=0;
		$time="yubei_zhongqi_time".$num;
		$tijiao="yubei_zhongqi_tijiao".$num;
		if ($_POST["$time"]!="" and $_POST["$tijiao"]!="")
		{
			$sql="insert into yubei_zhongqi values (null,".$_POST['otherid'].",'".$_POST["$time"]."','".$_POST["$tijiao"]."')";
			$DB->query($sql);
		}
	}
	echo("<p>预备考察 中期小结 更新完毕 !</p>");
}

//预备 全年
if ($_POST['rudang']=='null'){
	echo("<p>预备考察 全年总结 无需更新!</p>");
}else
{
	$sql="select quannianid from yubei_quannian where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	if ($num==1)
	{
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$time="yubei_quannian_time".$i;
			$tijiao="yubei_quannian_tijiao".$i;
			$sql1="UPDATE yubei_quannian SET `Time` ='".$_POST["$time"]."' , `Tijiao`='".$_POST["$tijiao"]."' WHERE `quannianid` =".$sample[0];	
			$DB->query($sql1);
		}
	}else{
		$num=0;
		$time="yubei_quannian_time".$num;
		$tijiao="yubei_quannian_tijiao".$num;
		if ($_POST["$time"]!="" and $_POST["$tijiao"]!="")
		{
			$sql="insert into yubei_quannian values (null,".$_POST['otherid'].",'".$_POST["$time"]."','".$_POST["$tijiao"]."')";
			$DB->query($sql);
		}
	}
	echo("<p>预备考察 全年总结 更新完毕 !</p>");
}

//支部 转正会
if ($_POST['rudang']=='null'){
	echo("<p>预备考察 转正会 无需更新!</p>");
}else
{
	$sql="select zhuanzhengid from yubei_zhuanzheng where id='".$_POST['otherid']."'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	if ($num==1)
	{
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$time="yubei_zhuanzheng_time".$i;
			$zong="yubei_zhuanzheng_zong".$i;
			$zancheng="yubei_zhuanzheng_zancheng".$i;
			$fandui="yubei_zhuanzheng_fandui".$i;
			$qiquan="yubei_zhuanzheng_qiquan".$i;
			$sql1="UPDATE yubei_zhuanzheng SET `Time` ='".$_POST["$time"]."' , `Total`=".$_POST["$zong"].", `Agree`=".$_POST["$zancheng"].", `Against`=".$_POST["$fandui"].", `Giveup`=".$_POST["$qiquan"]."  WHERE `zhuanzhengid` =".$sample[0];	
			$DB->query($sql1);
		}
	}else{
		$num=0;
		$time="yubei_zhuanzheng_time".$num;
		$zong="yubei_zhuanzheng_zong".$num;
		$zancheng="yubei_zhuanzheng_zancheng".$num;
		$fandui="yubei_zhuanzheng_fandui".$num;
		$qiquan="yubei_zhuanzheng_qiquan".$num;
		if ($_POST['otherid']!="" and $_POST["$time"]!="" and $_POST["$zong"]!="" and $_POST["$zancheng"]!="" and $_POST["$fandui"]!= "" and $_POST["$qiquan"]!="")
		{
			$sql="insert into yubei_zhuanzheng values (null,".$_POST['otherid'].",'".$_POST["$time"]."',".$_POST["$zong"].",".$_POST["$zancheng"].",".$_POST["$fandui"].",".$_POST["$qiquan"].")";
			$DB->query($sql);
		}
	}
	echo("<p>预备考察 转正会 更新完毕 !</p>");
}

?>
<button style="width:200px" class="btn btn-lg btn-primary btn-block" type="button" onClick="history.back(-1)">返回该人</button>
<button style="width:200px" class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location='../name_list_foredit.php'">返回名单</button>

</body>
</html>
