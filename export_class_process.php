<?php
$class=$_GET['class'];
session_start();
include ('config/db.php');
include ('function/export.php');
$account=$_SESSION['account'];
$sql="select adminroot from useraccount where account='".$account."'";
$initial_ans=$DB->fetch_one_array($sql);
$adminroot=$initial_ans[0];
if ($adminroot!=0)
{
$DB=new DB_MySQL;
//echo $class;
$sql="select id from useraccount where class='".$class."'";
$DB->query($sql);
$ans=$DB->get_rows_array();
if ($ans)
	{	
		$filename="tmpfile/".$class."output.csv";
		$fp = fopen($filename, 'w');
		fputcsv($fp,GenerateTitie1());
		fputcsv($fp,GenerateTitie2());
		fputcsv($fp,GenerateTitie3());
		$num=$DB->get_rows();
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			$id=$sample[0];
			//echo $id;
			$final=export_one($id);
			$line=count($final);
			for ($j=0;$j<$line;$j++) 
			{
				fputcsv($fp,$final[$j]);
			}
		}
		fclose($fp); 
	}else
			{
				echo "无内容！";
				echo "<button onclick=\"window.location='home.php'\">返回主页</button>";
			}

$file_dir="tmpfile/";
$name=$class."output.csv";
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
}
?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>个人资料修改</title>
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
<h1>对不起，您没有这项权限！</h1>
</div>


<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav navbar-right">
			<button class="btn btn-lg" onclick="window.location='home.php'">返回主页</button>
		</ul>
	</div>
</div>
</body>


