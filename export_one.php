<?php
$id=$_GET['id'];
include ('config/db.php');
$filename="tmpfile/Export".$id.".csv";
//echo "$filename";
$fp = fopen($filename, 'w');
//������Ϣ
//������Ϣ
$sql="select name,studentid,class,dangzhibu,mail,cell,time,stage from useraccount where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
$sample=$ans[0];
fputcsv($fp,array('������Ϣ'));
fputcsv($fp,array('������Ϣ'));
fputcsv($fp,array('����',$sample[0]));
fputcsv($fp,array('ѧ��',$sample[1]));
fputcsv($fp,array('�༶',$sample[2]));
fputcsv($fp,array('��֧��',$sample[3]));
fputcsv($fp,array('����',$sample[4]));
fputcsv($fp,array('�ֻ�',$sample[5]));
fputcsv($fp,array('�������ύʱ��',$sample[6]));
fputcsv($fp,array('��չ�׶�',$sample[7]));
fputcsv($fp,array(''));
//��Ṥ��
fputcsv($fp,array('��Ṥ��'));
$sql="select Associate,Position,Duration from basicinfo_socialwork where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
//echo $id;
fputcsv($fp,array('��֯','ְ��','����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));
//��������
fputcsv($fp,array('��������'));
$sql="select Qishu,Pass from basicinfo_dangke where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('����','�Ƿ�ͨ��'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));
//����С��
//С��
fputcsv($fp,array('С��'));
$sql="select Time,Theme,Attend from dangkexiaozu_activity where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','����','�Ƿ�μ�'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));

//˼��ƽ̨
fputcsv($fp,array('˼��ƽ̨'));
$sql="select Time,Theme,Canjia,Haotie,pingfen from dangkexiaozu_sibian where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','����','�Ƿ�μ�','�Ƿ����','����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]));
}
fputcsv($fp,array(''));

//������
fputcsv($fp,array('������'));
$sql="select Time,Level,Score from dangkexiaozu_qiusuo where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','��������','�ɼ�'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));
//����ѧϰ
//����ѧϰ
fputcsv($fp,array('����ѧϰ'));
$sql="select Time,Style,Content from zizhu_lilun where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','��ʽ','��Ҫ����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2]));
}
fputcsv($fp,array(''));

//�����
fputcsv($fp,array('�����'));
$sql="select Time,Style,Position,Content from zizhu_huodong where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','��ʽ','�ص�','��Ҫ����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));

//����Ͷ��
fputcsv($fp,array('����Ͷ��'));
$sql="select Time,Title from zizhu_tougao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));

//֧����ϵ
//��ϵ���
fputcsv($fp,array('֧����ϵ'));
fputcsv($fp,array('��ϵ���'));
$sql="select Time,Location,Contact,Content from zhibu_lianxiqingkuang where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','�ص�','��ϵ��','��Ҫ����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));



//˼��㱨
fputcsv($fp,array('˼��㱨'));
$sql="select Time,Content from zhibu_huibao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//��չ��
fputcsv($fp,array('��չ��'));
$sql="select Time,Total,Agree,Against,Giveup from zhibu_fazhanhui where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','ͶƱ����','�޳�����','��������','��Ȩ����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]));
}
fputcsv($fp,array(''));

//֧���
fputcsv($fp,array('֧���'));
$sql="select Time,Location,Theme,Results from zhibu_huodong where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','�ص�','����','�������'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1],$sample[2],$sample[3]));
}
fputcsv($fp,array(''));
fputcsv($fp,array(''));

//Ԥ������
//˼��㱨
fputcsv($fp,array('˼��㱨'));
$sql="select Time,Content from yubei_huibao where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','����'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));
 

//����С��
fputcsv($fp,array('����С��'));
$sql="select Time,Tijiao from yubei_zhongqi where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','�Ƿ��ύ'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//ȫ���ܽ�
fputcsv($fp,array('ȫ���ܽ�'));
$sql="select Time,Tijiao from yubei_quannian where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','�Ƿ��ύ'));
for ($i=0;$i<$num;$i++){
	$sample=$ans[$i];
	fputcsv($fp,array($sample[0],$sample[1]));
}
fputcsv($fp,array(''));

//ת����
fputcsv($fp,array('ת����'));
$sql="select Time,Total,Agree,Against,Giveup from yubei_zhuanzheng where id=".$id;
$DB->query($sql);
$ans=$DB->get_rows_array();
$num=$DB->get_rows();
fputcsv($fp,array('ʱ��','ͶƱ����','�޳�����','��������','��Ȩ����'));
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
	<title>������ҳ</title>
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

</div>
