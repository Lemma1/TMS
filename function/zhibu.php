<?php
//include ('other.php');
function NotGetRuDang()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"rudang\" />";
}

function GenerateLianxiTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-2\"><label>时间</label></div>"
  . "						<div class=\"col-md-2\"><label>地点</label></div>"
  . "						<div class=\"col-md-2\"><label>联系人</label></div><div class=\"col-md-6\"><label>主要内容</label></div></div>";
}


function GetLianxi($id)
{
	GenerateLianxiTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zhibu_lianxiqingkuang where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"zhibu_lianxi_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_lianxi_didian$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_lianxi_lianxiren$i\" value=".$sample[4].">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"zhibu_lianxi_neirong$i\" value=".$sample[5].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewLianxi();
}

function GenerateNewLianxi()
{
		echo("<div id=\"zhibu_lianxi\" class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"new_zhibu_lianxi_time\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_lianxi_didian\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_lianxi_lianxiren\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_lianxi_neirong\">");
		echo("</div>");
		echo("</div>");
}

function GenerateHuibaoTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-9\"><label>内容</label></div>"
  . "						</div>";
}

function GetHuibao($id)
{
	GenerateHuibaoTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zhibu_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control date\" name=\"zhibu_sixiang_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-9\">");
		echo("<input class=\"form-control\"  name=\"zhibu_sixiang_neirong$i\" value=".$sample[3].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewHuibao();
}


function GenerateNewHuibao()
{
		echo("<div id=\"zhibu_huibao\" class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control date\" name=\"new_zhibu_sixiang_time\">");
		echo("</div>");
		echo("<div class=\"col-md-9\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_sixiang_neirong\">");
		echo("</div>");
		echo("</div>");
}


function GenerateFazhanTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-4\"><label>时间</label></div>	<div class=\"col-md-2\"><label>投票人数</label></div>"
  . "						<div class=\"col-md-2\"><label>赞成人数</label></div>"
  . "						<div class=\"col-md-2\"><label>反对人数</label></div><div class=\"col-md-2\"><label>弃权人数</label></div></div>";
}


function GetFanzhan($id)
{
	GenerateFazhanTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zhibu_fazhanhui where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	//$num=$DB->get_rows();
	$num=1;
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control date\" name=\"zhibu_fanzhanhui_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_fanzhanhui_zong$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_fanzhanhui_zancheng$i\" value=".$sample[4].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_fanzhanhui_fandui$i\" value=".$sample[5].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_fanzhanhui_qiquan$i\" value=".$sample[6].">");
		echo("</div>");
		echo("</div>");
	}
//	GenerateNewFazhan();
}

function GenerateNewFanzhan()
{
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control date\" name=\"new_zhibu_fanzhanhui_time\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_fanzhanhui_zong\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_fanzhanhui_zancheng\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_fanzhanhui_fandui\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_fanzhanhui_qiquan\">");
		echo("</div>");
		echo("</div>");
}

function GenerateZhibuTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-2\"><label>时间</label></div>"
  . "						<div class=\"col-md-2\"><label>地点</label></div>"
	. "						<div class=\"col-md-5\"><label>主题</label></div>"
	."						<div class=\"col-md-3\"><label>是否参与</label></div></div>";
}


function GetZhibu($id)
{
	GenerateZhibuTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zhibu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"zhibu_huodong_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zhibu_huodong_didian$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-5\">");
		echo("<input class=\"form-control\" name=\"zhibu_huodong_zhuti$i\" value=".$sample[4].">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"zhibu_huodong_canyu$i\" value=".$sample[5].">");
		YesNo($sample[5],"zhibu_huodong_canyu$i");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewZhibu();
}

function GenerateNewZhibu()
{
		echo("<div id=\"zhibu_zhibu\" class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"new_zhibu_huodong_time\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_huodong_didian\">");
		echo("</div>");
		echo("<div class=\"col-md-5\">");
		echo("<input class=\"form-control\" name=\"new_zhibu_huodong_zhuti\">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"new_zhibu_huodong_canyu\">");
		YesNoBlank("new_zhibu_huodong_canyu");
		echo("</div>");
		echo("</div>");
}
?>
