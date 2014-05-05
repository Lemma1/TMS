<?php
//include ('other.php');

function NotGetXiaozu()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"dangke_xiaozu\" />";
}

function GenerateXiaozuTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-3\"><label>时间</label></div>"
  . "						<div class=\"col-md-6\"><label>主题</label></div>"
  . "						<div class=\"col-md-3\"><label>是否参加</label></div></div>";
}

function GetXiaozu($id)
{
	GenerateXiaozuTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from dangkexiaozu_activity where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control date\" name=\"dangke_xiaozu_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"dangke_xiaozu_zhuti$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"dangke_xiaozu_canjia$i\" value=".$sample[4].">");
		//$name="dangke_xiaozu_zhuti$i";
		YesNo($sample[4],"dangke_xiaozu_canjia$i");
		echo("</div>");
		echo("</div>");	
	}
	echo"<input type=\"hidden\" value=".$num." name=\"dangke_xiaozu_num\" />";
	GenerateNewXiaozu();
}

function GenerateNewXiaozu()
{
		echo("<div id=\"dangke_xiaozu\" class=\"row\">");
		echo("<div class=\"col-md-3\">");
		echo("<input class=\"form-control date\" name=\"new_dangke_xiaozu_time\">");
		echo("</div>");
		echo("<div class=\"col-md-6\">");
		echo("<input class=\"form-control\" name=\"new_dangke_xiaozu_zhuti\">");

		echo("</div>");
		echo("<div class=\"col-md-3\">");
		//echo("<input class=\"form-control\" name=\"new_dangke_xiaozu_canjia\">");
		YesNoBlank("new_dangke_xiaozu_canjia");
		echo("</div>");
		echo("</div>");
}

function NotGetSibian()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"dangke_sibian\" />";
}

function GenerateSibianTitle()
{
	echo"<div class=\"row\">"
  . "<div class=\"col-md-2\"><label>时间</label></div>"
  . "<div class=\"col-md-4\"><label>主题</label></div>"
	. "<div class=\"col-md-2\"><label>是否参加</label></div>"
	. "<div class=\"col-md-2\"><label>是否好帖</label></div>"
	. "<div class=\"col-md-2\"><label>评分</label></div></div>";
}

function GetSibian($id)
{
	GenerateSibianTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from dangkexiaozu_sibian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"dangke_sibian_time$i\" value=".$sample[2].">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"dangke_sibian_zhuti$i\" value=".$sample[3].">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		//echo("<input class=\"form-control\" name=\"dangke_sibian_canjia$i\" value=".$sample[4].">");
		YesNo($sample[4],"dangke_sibian_canjia$i");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		//echo("<input class=\"form-control\" name=\"dangke_sibian_haotie$i\" value=".$sample[5].">");
		YesNo($sample[5],"dangke_sibian_haotie$i");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"dangke_sibian_pingfen$i\" value=".$sample[6].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewSibian();
}

function GenerateNewSibian()
{
		echo("<div id=\"dangke_sibian\" class=\"row\">");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control date\" name=\"new_dangke_sibian_time\">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"new_dangke_sibian_zhuti\">");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		//echo("<input class=\"form-control\" name=\"new_dangke_sibian_canjia\">");
		YesNoBlank("new_dangke_sibian_canjia");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		//echo("<input class=\"form-control\" name=\"new_dangke_sibian_haotie\">");
		YesNoBlank("new_dangke_sibian_haotie");
		echo("</div>");
		echo("<div class=\"col-md-2\">");
		echo("<input class=\"form-control\" name=\"new_dangke_sibian_pingfen\">");
		echo("</div>");
		echo("</div>");
}
function NotGetQiusuo()
{
	echo("<h4>你没有权限修改</h4>");
	echo"<input type=\"hidden\" value=\"null\" name=\"dangke_qiusuo\" />";
}

function GenerateQiusuoTitle()
{
	echo"<div class=\"row\">"
  . "						<div class=\"col-md-4\"><label>时间</label></div>"
  . "						<div class=\"col-md-4\"><label>比赛级别</label></div>"
  . "						<div class=\"col-md-4\"><label>成绩</label></div></div>";
}

function GetQiusuo($id)
{
	GenerateQiusuoTitle();
	$DB = new DB_MySQL;
	//include ('./config/db.php');
	$sql= "select * from dangkexiaozu_qiusuo where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
	for ($i=0;$i<$num;$i++)
	{
		$sample=$ans[$i];
		echo("<div class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control date\" name=\"dangke_qiusuo_time$i\" value=".$sample[1].">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		//echo("<input class=\"form-control\" name=\"dangke_qiusuo_jibie$i\" value=".$sample[3].">");
		Qiusuo($sample[3],"dangke_qiusuo_jibie$i");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"dangke_qiusuo_chengji$i\" value=".$sample[4].">");
		echo("</div>");
		echo("</div>");
	}
	GenerateNewQiusuo();
}


function GenerateNewQiusuo()
{
		echo("<div id=\"dangke_qiusuo\" class=\"row\">");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control date\" name=\"new_dangke_qiusuo_time\">");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		//echo("<input class=\"form-control\" name=\"new_dangke_qiusuo_jibie\">");
		QiuSuoBlank("new_dangke_qiusuo_jibie");
		echo("</div>");
		echo("<div class=\"col-md-4\">");
		echo("<input class=\"form-control\" name=\"new_dangke_qiusuo_chengji\">");
		echo("</div>");
		echo("</div>");
}

?>
