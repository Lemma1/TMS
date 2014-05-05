<?php
//include ('other.php');
function GenerateHuibao2Title()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-9\"><label>内容</label></div>"
  . "						</div>";
}

function GetHuibao2($id)
{
	GenerateHuibao2Title();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from yubei_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"yubei_huibao_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-9\">");
		echo("<input class=\"form-control\" name=\"yubei_huibao_neirong$i\" value=".$sample[3].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewHuibao2();
}


function GenerateNewHuibao2()
{
		echo("<div id=\"yubei_huibao\" class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"new_yubei_huibao_time\">");
		echo("</div>");
		echo("<div class=\"col-md-9\">");
		echo("<input class=\"form-control\" name=\"new_yubei_huibao_neirong\">");
		echo("</div>");
		echo("</div>");
}


function GenerateZhongqiTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-3\"><label>是否提交</label></div>"
  . "						</div>";
}

function GetZhongqi($id)
{
	GenerateZhongqiTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from yubei_zhongqi where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	//$num=$DB->get_rows();
	$num=1;
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"yubei_zhongqi_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"yubei_zhongqi_tijiao$i\" value=".$sample[3].">");
		YesNo($sample[3],"yubei_zhongqi_tijiao$i");
		echo("</div>");
		echo("</div>");
	}
	//GenerateNewZhongqi();
}


function GenerateNewZhongqi()
{
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_ass\">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_pos\">");
		echo("</div>");
		echo("</div>");
}

function GenerateQuannianTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-3\"><label>是否提交</label></div>"
  . "						</div>";
}

function GetQuannian($id)
{
	GenerateQuannianTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from yubei_quannian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	//$num=$DB->get_rows();
	$num=1;
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"yubei_quannian_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"yubei_quannian_tijiao$i\" value=".$sample[3].">");
		YesNo($sample[3],"yubei_quannian_tijiao$i");
		echo("</div>");
		echo("</div>");
	}
	//GenerateNewQuannian();
}


function GenerateNewQuannian()
{
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_ass\">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_pos\">");
		echo("</div>");
		echo("</div>");
}

		function GenerateZhuanzhengTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-4\"><label>时间</label></div>	<div class=\"col-md-2\"><label>投票人数</label></div>"
  . "						<div class=\"col-md-2\"><label>赞成人数</label></div>"
  . "						<div class=\"col-md-2\"><label>反对人数</label></div><div class=\"col-md-2\"><label>弃权人数</label></div></div>";
}


function GetZhuanzheng($id)
{
	GenerateFazhanTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from yubei_zhuanzheng where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	//$num=$DB->get_rows();
	$num=1;
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"yubei_zhuanzheng_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"yubei_zhuanzheng_zong$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"yubei_zhuanzheng_zancheng$i\" value=".$sample[4].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"yubei_zhuanzheng_fandui$i\" value=".$sample[5].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"yubei_zhuanzheng_qiquan$i\" value=".$sample[6].">");
		echo("</div>");
		echo("</div>");
	}
//	GenerateNewZhuanzheng();
}

function GenerateNewZhuanzheng()
{
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_ass\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_ass\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_pos\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_pos\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" id=\"new_basic_social_dur\">");
		echo("</div>");
		echo("</div>");
}

?>
