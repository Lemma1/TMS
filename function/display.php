<?php
function GetPerson($id)
{	
	//echo("DISPLAY");
	//include ("config/db.php");
	$DB = new DB_MySQL;
	//个人信息
	$sql= "select * from useraccount where id='$id'";
	$ans= $DB->fetch_one_array($sql);
	//echo($ans[9]);
	$stage=Getstagea($ans[10]);
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"basicinfo\" class=\"panel-heading\">基本信息</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"basicinfo\">基本信息</h2>";
	echo "<h3>个人信息</h3>";
	echo "<table class=\"table table-bordered\">";
	echo "<tr><th>姓名</th><th>".$ans[2]."</th></tr>";
	echo "<tr><th>学号</th><th>".$ans[3]."</th></tr>";
	echo "<tr><th>班级</th><th>".$ans[4]."</th></tr>";
	echo "<tr><th>党支部</th><th>".$ans[5]."</th></tr>";
	echo "<tr><th>邮箱</th><th>".$ans[6]."</th></tr>";
	echo "<tr><th>手机</th><th>".$ans[7]."</th></tr>";
	echo "<tr><th>申请书提交时间</th><th>".$ans[9]."</th></tr>";
	echo "<tr><th>发展阶段</th><th>".$stage."</th></tr>";
	echo "</table>";


	//社会工作
	echo "<h3>社会工作</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  basicinfo_socialwork where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>组织</th><th>职务</th><th>任期</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
			}
			echo "</table>";
			
	//党课研修
	echo "<h3>党课研修</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  basicinfo_dangke where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>期数</th><th>是否通过</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		
		}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	//党课小组
	//小组活动	
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"dangke\" class=\"panel-heading\">党课小组</div>";
	echo "<div class=\"panel-body\">";				
//	echo "<h2 id=\"dangke\">党课小组</h2>";
	echo "<h3>小组活动</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_activity where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>主题</th><th>是否参加</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
		
		}
	echo "</table>";

	//思辨平台
	echo "<h3>思辨平台</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_sibian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>主题</th><th>是否参加</th><th>是否好帖</th><th>评分</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th><th>".$sample[6]."</th></tr>";
		}

		}
		echo "</table>";
	//求索杯			
	echo "<h3>求索杯</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  dangkexiaozu_qiusuo where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>比赛级别</th><th>成绩</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";	
	//自主学习
	//理论学习	
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"zizhu\" class=\"panel-heading\">自主学习</div>";
	echo "<div class=\"panel-body\">";		
	//echo "<h2 id=\"zizhu\">自主学习</h2>";
	echo "<h3>理论学习</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_lilun where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>形式</th><th>主要内容</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th></tr>";
		}
	
		}
		echo "</table>";

	//活动参与
	echo "<h3>活动参与</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>形式</th><th>地点</th><th>主要内容</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		
		}
	echo "</table>";


	//红网投稿
	echo "<h3>红网投稿</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zizhu_tougao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>标题</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
	
		}
		echo "</table>";
		echo "</div>";
		echo "</div>";
	
	//支部联系
		//联系情况
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"zhibu\" class=\"panel-heading\">支部联系</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"zhibu\">支部联系</h2>";
	echo "<h3>联系情况</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_lianxiqingkuang where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>地点</th><th>联系人</th><th>主要内容</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		}
			echo "</table>";

		//思想汇报
	echo "<h3>思想汇报</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>内容</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//发展会
	echo "<h3>发展会</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_fazhanhui where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>投票人数</th><th>赞成人数</th><th>反对人数</th><th>弃权人数</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th><th>".$sample[6]."</th></tr>";
		}
		}
			echo "</table>";

		//支部活动
	echo "<h3>支部活动</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  zhibu_huodong where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>地点</th><th>主题</th><th>参与情况</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th><th>".$sample[4]."</th><th>".$sample[5]."</th></tr>";
		}
		}
	echo "</table>";
		echo "</div>";
		echo "</div>";

	//预备考察
		//思想汇报
	echo "<div class=\"panel panel-primary\">";
	echo "<div id=\"yubei\" class=\"panel-heading\">预备考察</div>";
	echo "<div class=\"panel-body\">";
	//echo "<h2 id=\"yubei\">预备考察</h2>";
	echo "<h3>思想汇报</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_huibao where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>内容</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//中期小结
	echo "<h3>中期小结</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_zhongqi where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>是否提交</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";

		//全年总结
	echo "<h3>全年总结</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_quannian where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>是否提交</th></tr></thead>";
		for ($i=0;$i<$num;$i++)
		{
			$sample=$ans[$i];
			echo"<tr><th>".$sample[2]."</th><th>".$sample[3]."</th></tr>";
		}
		}
			echo "</table>";
	
		//转正会
	echo "<h3>转正会</h3>";
	echo "<table class=\"table table-bordered\">";
	$sql= "select * from  yubei_zhuanzheng where id='$id'";
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	$num=$DB->get_rows();
		if ($num==0) {echo "<h4>暂无信息</h4>";}
		else{
			echo"<thead><tr><th>时间</th><th>投票人数</th><th>赞成人数</th><th>反对人数</th><th>弃权人数</th></tr></thead>";
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
if ($stage==0) {return "群众";}
if ($stage==1) {return "积极分子";}
if ($stage==2) {return "预备党员";}
if ($stage==3) {return "党员";}
}
?>
