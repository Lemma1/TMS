<?php
function GetStage($stage)
{
	if ($stage==0) {return "群众";}
	if ($stage==1) {return "积极分子";}
	if ($stage==2) {return "预备党员";}
	if ($stage==3) {return "党员";}
}

function YesNo($flag,$name)
{
	if ($flag=='是')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"是\" selected=\"selected\">是</option><option value =\"否\">否</option></select>";
	}	
	else
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"是\" >是</option><option value =\"否\" selected=\"selected\">否</option></select>";
	}	
}

function YesNoBlank($name)
{
	echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"是\" selected=\"selected\">是</option><option value =\"否\">否</option></select>";
}

function Qiusuo($flag,$name)
{
	if ($flag=='系内初赛')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"系内初赛\" selected=\"selected\">系内初赛</option><option value =\"校内复赛\">校内复赛</option><option value =\"校内决赛\">校内决赛</option></select>";
	}	
	else 
	{
		if ($flag=='校内复赛')
		{
			echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"系内初赛\">系内初赛</option><option value =\"校内复赛\" selected=\"selected\">校内复赛</option><option value =\"校内决赛\">校内决赛</option></select>";
		}	
		else	
		{
				echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"系内初赛\">系内初赛</option><option value =\"校内复赛\">校内复赛</option><option value =\"校内决赛\" selected=\"selected\">校内决赛</option></select>";
		}
	}
}

function QiuSuoBlank($name)
{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"系内初赛\" selected=\"selected\">系内初赛</option><option value =\"校内复赛\">校内复赛</option><option value =\"校内决赛\">校内决赛</option></select>";
}

function ShehuiBlank($name)
{
	echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\">校TMS总会</option><option value =\"求是学会\">求是学会</option><option value =\"系学生组理论学习与实践中心\">系学生组理论学习与实践中心</option><option value =\"党课小组\">党课小组</option><option value =\"党支部\"  selected=\"selected\">党支部</option></select>";
}


function Shehui($flag,$name)
{
	if ($flag=='校TMS总会')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\" selected=\"selected\">校TMS总会</option><option value =\"求是学会\">求是学会</option><option value =\"系学生组理论学习与实践中心\">系学生组理论学习与实践中心</option><option value =\"党课小组\">党课小组</option><option value =\"党支部\">党支部</option></select>";
	}	
	else 
	{
		if ($flag=='求是学会')
		{
			echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\" >校TMS总会</option><option value =\"求是学会\" selected=\"selected\">求是学会</option><option value =\"系学生组理论学习与实践中心\">系学生组理论学习与实践中心</option><option value =\"党课小组\">党课小组</option><option value =\"党支部\">党支部</option></select>";
		}	
		else	
		{
			if ($flag=='系学生组理论学习与实践中心')
			{
				echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\" >校TMS总会</option><option value =\"求是学会\">求是学会</option><option value =\"系学生组理论学习与实践中心\" selected=\"selected\">系学生组理论学习与实践中心</option><option value =\"党课小组\">党课小组</option><option value =\"党支部\">党支部</option></select>";
			}	
			else	
			{
				if ($flag=='党课小组')
				{
					echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\" >校TMS总会</option><option value =\"求是学会\">求是学会</option><option value =\"系学生组理论学习与实践中心\">系学生组理论学习与实践中心</option><option value =\"党课小组\" selected=\"selected\">党课小组</option><option value =\"党支部\">党支部</option></select>";
				}	
				else
				{
					echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"校TMS总会\">校TMS总会</option><option value =\"求是学会\">求是学会</option><option value =\"系学生组理论学习与实践中心\">系学生组理论学习与实践中心</option><option value =\"党课小组\">党课小组</option><option value =\"党支部\"  selected=\"selected\">党支部</option></select>";
				}	
			}
		}
	}
}

?>
