<?php

include ('other.php');
function GenerateBasicInfo($id)
{
	//include ('./config/db.php');
	$DB = new DB_MySQL;
	$sql= "select * from useraccount where id='$id'";
	$ans=$DB->fetch_one_array($sql);
	echo"<label>����</label>"
  . "					<input class=\"form-control\" name=\"name\" value=\"".$ans[2]."\">"
  . "					<label>ѧ��</label>"
  . "					<input class=\"form-control\" name=\"studentid\" value=\"".$ans[3]."\">"
  . "					<label>�༶</label>"
	. "					<input class=\"form-control\" name=\"class\"  value=\"".$ans[4]."\">"
		. "					<p><small>�������ѭ�淶��д</small></p>"
	. "					<label>��֧��</label>"
	. "					<input class=\"form-control\" name=\"dangzhibu\"  value=\"".$ans[5]."\">"
	. "					<p><small>�������ѭ�淶��д</small></p>"
  . "					<label>����</label>"
  . "					<input class=\"form-control\" name=\"mail\"  value=\"".$ans[6]."\">"
  . "					<label>�ֻ�</label>"
  . "					<input class=\"form-control\" name=\"cellphone\"  value=\"".$ans[7]."\">"
  . "					<label>�������ύʱ��</label>"
  . "					<input type=\"text\" class=\"form-control date\" name=\"time\"  value=\"".$ans[9]."\">"
	. "					<label>��չ�׶�</label>";
	GenerateStageSelection($ans[10]);
}

function GenerateStageSelection($stage)
{
	if ($stage==0)
	{
		echo"	<select class=\"form-control\" name=\"stage\" ><option value =\"0\" selected=\"selected\">Ⱥ��</option><option value =\"1\">��������</option><option value =\"2\">Ԥ����Ա</option><option value =\"3\">��ʽ��Ա</option></select>";
	}
	if ($stage==1)
	{
		echo"	<select class=\"form-control\" name=\"stage\" ><option value =\"0\" >Ⱥ��</option><option value =\"1\" selected=\"selected\">��������</option><option value =\"2\">Ԥ����Ա</option><option value =\"3\">��ʽ��Ա</option></select>";
	}
		if ($stage==2)
	{
		echo"	<select class=\"form-control\" name=\"stage\" ><option value =\"0\" >Ⱥ��</option><option value =\"1\" >��������</option><option value =\"2\" selected=\"selected\">Ԥ����Ա</option><option value =\"3\" >��ʽ��Ա</option></select>";
	}
		if ($stage==3)
	{
		echo"	<select class=\"form-control\" name=\"stage\" ><option value =\"0\" >Ⱥ��</option><option value =\"1\" >��������</option><option value =\"2\">Ԥ����Ա</option><option value =\"3\" selected=\"selected\">��ʽ��Ա</option></select>";
	}

}

function GenerateSocialTitle()
{

	echo"<div class=\"row\">"
  . "						<div class=\"col-md-4\"><label>��֯</label></div>"
  . "						<div class=\"col-md-4\"><label>ְ��</label></div>"
  . "						<div class=\"col-md-4\"><label>����</label></div></div>";

	
}

function GetSocialWork($id)
{	
	//include ('./config/db.php');
	$DB = new DB_MySQL;
	$sql= "select * from basicinfo_socialwork where id='$id'";
	$DB->query($sql);
	$Work_Array=$DB->get_rows_array();
	GenerateSocialTitle();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$Work_Sample=$Work_Array[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		//echo("<input class=\"form-control\" name=\"basic_social_zuzhi$i\" value=".$Work_Sample[2].">");
		Shehui($Work_Sample[2],"basic_social_zuzhi$i");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"basic_social_zhiwu$i\" value=".$Work_Sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"basic_social_renqi$i\" value=".$Work_Sample[4].">");
		echo("</div>");
		echo("</div>");
	}
}

function GenerateNewWork()
{
		echo("<div id=\"jiben_shehui\" class=\"row\">");
		echo("<div class=\"col-md-4\">");
		//echo("<input class=\"form-control\" name=\"new_basic_social_zuzhi\">");
		ShehuiBlank("new_basic_social_zuzhi");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"new_basic_social_zhiwu\">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"new_basic_social_renqi\">");
		echo("</div>");
		echo("</div>");
}

function GenerateDangkeTitle()
{
echo"					<div class=\"row\">"
  . "					<div class=\"col-md-6\"><label>����</label></div>"
  . "					<div class=\"col-md-6\"><label>�Ƿ�ͨ��</label></div>"
  . "				</div>"
;
}

function GetDangke($id)
{
	GenerateDangkeTitle();
	$DB = new DB_MySQL;
	//include ('config/db.php');
	$sql= "select * from basicinfo_dangke where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	$num_qishu=2;;
	$num_Pass=3;
	for ($i=0;$i<$num;$i++)
	{
	$sample=$ans[$i];
	echo("<div class=\"row\">");
	echo("<div class=\"col-md-6\">");
	echo("<input class=\"form-control\" name=\"jiben_dangke_qishu".$i."\" value=".$sample[$num_qishu].">");
	echo("</div>");
	echo("<div class=\"col-md-6\">");
	//echo("<input class=\"form-control\" name=\"jiben_dangke_Pass0\" value=".$ans[$num_Pass].">");
	YesNo($sample[$num_Pass],"jiben_dangke_Pass".$i);
	echo("</div>");
	echo("</div>");
	}
	GenerateNewDangke();
}

function GenerateNewDangke()
{
		echo("<div id=\"jiben_dangke\" class=\"row\">");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_basic_dangke_qishu\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		//echo("<input class=\"form-control\" name=\"new_basic_social_renqi\">");
		YesNo('��',"new_basic_dangke_pass");
		echo("</div>");
		echo("</div>");
}

function NotGetDangke()
{
	echo("<h4>��û��Ȩ���޸�</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"jiben_dangke\" />";
}

function NotGetSocialWork()
{
	echo("<h4>��û��Ȩ���޸�</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"jiben_shegong\" />";
}

function NotGetBasicInfo()
{
	echo("<h4>��û��Ȩ���޸�</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"basicinfo\" />";
}

?>
