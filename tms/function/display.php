<?php
function GetPerson($id)
{	
	//echo("DISPLAY");
	//include ("config/db.php");
	$DB = new DB_MySQL;
	//������Ϣ
	$sql= "select * from useraccount where id='$id'";
	$ans= $DB->fetch_one_array($sql);
	//echo($ans[9]);
	$stage=Getstagea($ans[10]);
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"basicinfo\" class=\"panel-heading\">������Ϣ</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"basicinfo\">������Ϣ</h2>";
	echo "<h3>������Ϣ</h3>";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>����</th><th>".$ans[2]."</th></tr>";
	echo "<tr><th>ѧ��</th><th>".$ans[3]."</th></tr>";
	echo "<tr><th>�༶</th><th>".$ans[4]."</th></tr>";
	echo "<tr><th>��֧��</th><th>".$ans[5]."</th></tr>";
	echo "<tr><th>����</th><th>".$ans[6]."</th></tr>";
	echo "<tr><th>�ֻ�</th><th>".$ans[7]."</th></tr>";
	echo "<tr><th>�������ύʱ��</th><th>".$ans[9]."</th></tr>";
	echo "<tr><th>��չ�׶�</th><th>".$stage."</th></tr>";
	echo "</table>";


	//��Ṥ��
	echo "<h3>��Ṥ��</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  basicinfo_socialwork where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>��֯</th><th>ְ��</th><th>����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
			}
			echo "</table>";
			
	//��������
	echo "<h3>��������</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  basicinfo_dangke where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>����</th><th>�Ƿ�ͨ��</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		
		}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	//����С��
	//С��	
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"dangke\" class=\"panel-heading\">����С��</div>";
	echo "<div class=\"panel-body\">";				
//	echo "<h2 id=\"dangke\">����С��</h2>";
	echo "<h3>С��</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_activity where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>����</th><th>�Ƿ�μ�</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
		
		}
	echo "</table>";

	//˼��ƽ̨
	echo "<h3>˼��ƽ̨</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_sibian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>����</th><th>�Ƿ�μ�</th><th>�Ƿ����</th><th>����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th><th>".$sample[6]."</th></tr>";
		}

		}
		echo "</table>";
	//������			
	echo "<h3>������</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_qiusuo where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>��������</th><th>�ɼ�</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";	
	//����ѧϰ
	//����ѧϰ	
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"zizhu\" class=\"panel-heading\">����ѧϰ</div>";
	echo "<div class=\"panel-body\">";		
	//echo "<h2 id=\"zizhu\">����ѧϰ</h2>";
	echo "<h3>����ѧϰ</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_lilun where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>��ʽ</th><th>��Ҫ����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
	
		}
		echo "</table>";

	//�����
	echo "<h3>�����</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>��ʽ</th><th>�ص�</th><th>��Ҫ����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		
		}
	echo "</table>";


	//����Ͷ��
	echo "<h3>����Ͷ��</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_tougao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
	
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
	
	//֧����ϵ
		//��ϵ���
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"zhibu\" class=\"panel-heading\">֧����ϵ</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"zhibu\">֧����ϵ</h2>";
	echo "<h3>��ϵ���</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_lianxiqingkuang where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>�ص�</th><th>��ϵ��</th><th>��Ҫ����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		}
			echo "</table>";

		//˼��㱨
	echo "<h3>˼��㱨</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//��չ��
	echo "<h3>��չ��</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_fazhanhui where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>ͶƱ����</th><th>�޳�����</th><th>��������</th><th>��Ȩ����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th><th>".$sample[6]."</th></tr>";
		}
		}
			echo "</table>";

		//֧���
	echo "<h3>֧���</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>�ص�</th><th>����</th><th>�������</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		}
	echo "</table>";
		echo "</div>";
		echo "</div>";

	//Ԥ������
		//˼��㱨
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"yubei\" class=\"panel-heading\">Ԥ������</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"yubei\">Ԥ������</h2>";
	echo "<h3>˼��㱨</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//����С��
	echo "<h3>����С��</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_zhongqi where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>�Ƿ��ύ</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//ȫ���ܽ�
	echo "<h3>ȫ���ܽ�</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_quannian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>�Ƿ��ύ</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";
	
		//ת����
	echo "<h3>ת����</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_zhuanzheng where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>������Ϣ</h4>";}
		else{
			echo"<thead><tr><th>ʱ��</th><th>ͶƱ����</th><th>�޳�����</th><th>��������</th><th>��Ȩ����</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th><th>".$sample[6]."</th></tr>";
		}
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
;}

function Getstagea($stage)
{
if ($stage==0) {return "Ⱥ��";}
if ($stage==1) {return "��������";}
if ($stage==2) {return "Ԥ����Ա";}
if ($stage==3) {return "��Ա";}
}
?>
