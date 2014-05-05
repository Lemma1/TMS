<?php
function NotGetLilun()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"zizhu_lilun\" />";
}

function GenerateLilunTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-3\"><label>形式</label></div>"
  . "						<div class=\"col-md-6\"><label>主要内容</label></div></div>";
}


function GetLilun($id)
{
	GenerateLilunTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zizhu_lilun where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"zizhu_lilun_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\" name=\"zizhu_lilun_xingshi$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"zizhu_lilun_neirong$i\" value=".$sample[4].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewLilun();
}

function GenerateNewLilun()
{
		echo("<div id=\"zizhu_lilun\" class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\"  name=\"new_zizhu_lilun_time\">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control\"  name=\"new_zizhu_lilun_xingshi\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_lilun_neirong\">");
		echo("</div>");
		echo("</div>");
}

function NotGetHuodong()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"zizhu_huodong\" />";
}

function GenerateHuodongTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-2\"><label>时间</label></div>"
  . "						<div class=\"col-md-2\"><label>形式</label></div>"
	. "						<div class=\"col-md-2\"><label>地点</label></div>"
	."						<div class=\"col-md-6\"><label>主要内容</label></div></div>";
}


function GetHuodong($id)
{
	GenerateHuodongTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from zizhu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zizhu_huodong_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zizhu_huodong_xingshi$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"zizhu_huodong_didian$i\" value=".$sample[4].">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"zizhu_huodong_neirong$i\" value=".$sample[5].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewHuodong();
}

function GenerateNewHuodong()
{
		echo("<div id=\"zizhu_huodong\" class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_huodong_time\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_huodong_xingshi\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_huodong_didian\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_huodong_neirong\">");
		echo("</div>");
		echo("</div>");
}

function GenerateTougaoTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-6\"><label>时间</label></div>"
  . "						<div class=\"col-md-6\"><label>标题</label></div>"
  . "						</div>";
}

function NotGetTougao()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"zizhu_tougao\" />";
}

function GetTougao($id)
{
	GenerateTougaoTitle();
	$DB = new DB_MySQL;	
	//include ('./config/db.php');
	$sql= "select * from zizhu_tougao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"zizhu_tougao_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"zizhu_tougao_biaoti$i\" value=".$sample[3].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewTougao();
}


function GenerateNewTougao()
{
		echo("<div id=\"zizhu_tougao\" class=\"row\">");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_tougao_time\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_zizhu_tougao_biaoti\">");
		echo("</div>");
		echo("</div>");
}
?>
