<?php
$id=$_GET['id'];
include ('config/db.php');
$filename="tmpfile/Export".$id.".csv";
//echo "$filename";
$fp = fopen($filename, 'w');
//基本信息
//个人信息
$sql="select name,studentid,class,dangzhibu,mail,cell,time,stage from useraccount where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
$sample=$ans[0];
fputcsv($fp,array('基本信息'));
fputcsv($fp,array('个人信息'));
fputcsv($fp,array('姓名',$sample[0]));
fputcsv($fp,array('学号',$sample[1]));
fputcsv($fp,array('班级',$sample[2]));
fputcsv($fp,array('党支部',$sample[3]));
fputcsv($fp,array('邮箱',$sample[4]));
fputcsv($fp,array('手机',$sample[5]));
fputcsv($fp,array('申请书提交时间',$sample[6]));
fputcsv($fp,array('发展阶段',$sample[7]));
fputcsv($fp,array(''));
//社会工作
fputcsv($fp,array('社会工作'));
$sql="select Associate,Position,Duration from basicinfo_socialwork where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
//echo $id;
fputcsv($fp,array('组织','职务','任期'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));
//党课研修
fputcsv($fp,array('党课研修'));
$sql="select Qishu,Pass from basicinfo_dangke where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('期数','是否通过'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));
//党课小组
//小组活动
fputcsv($fp,array('小组活动'));
$sql="select Time,Theme,Attend from dangkexiaozu_activity where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','主题','是否参加'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));

//思辨平台
fputcsv($fp,array('思辨平台'));
$sql="select Time,Theme,Canjia,Haotie,pingfen from dangkexiaozu_sibian where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','主题','是否参加','是否好贴','评分'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]));
}
fputcsv($fp,array(''));

//求索杯
fputcsv($fp,array('求索杯'));
$sql="select Time,Level,Score from dangkexiaozu_qiusuo where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','比赛级别','成绩'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));
//自主学习
//理论学习
fputcsv($fp,array('理论学习'));
$sql="select Time,Style,Content from zizhu_lilun where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','形式','主要内容'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));

//活动参与
fputcsv($fp,array('活动参与'));
$sql="select Time,Style,Position,Content from zizhu_huodong where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','形式','地点','主要内容'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));

//红网投稿
fputcsv($fp,array('红网投稿'));
$sql="select Time,Title from zizhu_tougao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','标题'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));

//支部联系
//联系情况
fputcsv($fp,array('支部联系'));
fputcsv($fp,array('联系情况'));
$sql="select Time,Location,Contact,Content from zhibu_lianxiqingkuang where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','地点','联系人','主要内容'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));



//思想汇报
fputcsv($fp,array('思想汇报'));
$sql="select Time,Content from zhibu_huibao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','内容'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//发展会
fputcsv($fp,array('发展会'));
$sql="select Time,Total,Agree,Against,Giveup from zhibu_fazhanhui where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','投票人数','赞成人数','反对人数','弃权人数'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]));
}
fputcsv($fp,array(''));

//支部活动
fputcsv($fp,array('支部活动'));
$sql="select Time,Location,Theme,Results from zhibu_huodong where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','地点','主题','参与情况'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));

//预备考察
//思想汇报
fputcsv($fp,array('思想汇报'));
$sql="select Time,Content from yubei_huibao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','内容'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
 

//中期小结
fputcsv($fp,array('中期小结'));
$sql="select Time,Tijiao from yubei_zhongqi where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','是否提交'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//全年总结
fputcsv($fp,array('全年总结'));
$sql="select Time,Tijiao from yubei_quannian where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','是否提交'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//转正会
fputcsv($fp,array('转正会'));
$sql="select Time,Total,Agree,Against,Giveup from yubei_zhuanzheng where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('时间','投票人数','赞成人数','反对人数','弃权人数'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]));
}
fputcsv($fp,array(''));
fclose($fp); 

$file_dir="tmpfile/";
$name="Export".$id.".csv";
$file = fopen($file_dir.$name,"r"); 
header("Content-Type: text/csv");  
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
header('Content-Transfer-Encodeing: binary');
Header("Accept-Length: ".filesize($file_dir . $name));
Header("Content-Disposition: attachment; filename=".$name);
echo fread($file, filesize($file_dir.$name));
die();
fclose($file);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人主页</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="padding-top: 70px;">
<!--导航栏-->
<?php
include('guide.php');
?>

<div class="container">

</div>
