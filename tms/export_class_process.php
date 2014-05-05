<?php
$class=$_GET['class'];
include ('config/db.php');
include ('function/export.php');
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
?>

	

