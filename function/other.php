<?php
function GetStage($stage)
{
	if ($stage==0) {return "Ⱥ��";}
	if ($stage==1) {return "��������";}
	if ($stage==2) {return "Ԥ����Ա";}
	if ($stage==3) {return "��Ա";}
}

function YesNo($flag,$name)
{
	if ($flag=='��')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"��\" selected=\"selected\">��</option><option value =\"��\">��</option></select>";
	}	
	else
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"��\" >��</option><option value =\"��\" selected=\"selected\">��</option></select>";
	}	
}

function YesNoBlank($name)
{
	echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"��\" selected=\"selected\">��</option><option value =\"��\">��</option></select>";
}

function Qiusuo($flag,$name)
{
	if ($flag=='ϵ�ڳ���')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"ϵ�ڳ���\" selected=\"selected\">ϵ�ڳ���</option><option value =\"У�ڸ���\">У�ڸ���</option><option value =\"У�ھ���\">У�ھ���</option></select>";
	}	
	else 
	{
		if ($flag=='У�ڸ���')
		{
			echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"ϵ�ڳ���\">ϵ�ڳ���</option><option value =\"У�ڸ���\" selected=\"selected\">У�ڸ���</option><option value =\"У�ھ���\">У�ھ���</option></select>";
		}	
		else	
		{
				echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"ϵ�ڳ���\">ϵ�ڳ���</option><option value =\"У�ڸ���\">У�ڸ���</option><option value =\"У�ھ���\" selected=\"selected\">У�ھ���</option></select>";
		}
	}
}

function QiuSuoBlank($name)
{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"ϵ�ڳ���\" selected=\"selected\">ϵ�ڳ���</option><option value =\"У�ڸ���\">У�ڸ���</option><option value =\"У�ھ���\">У�ھ���</option></select>";
}

function ShehuiBlank($name)
{
	echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\">УTMS�ܻ�</option><option value =\"����ѧ��\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\">����С��</option><option value =\"��֧��\"  selected=\"selected\">��֧��</option></select>";
}


function Shehui($flag,$name)
{
	if ($flag=='УTMS�ܻ�')
	{
		echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\" selected=\"selected\">УTMS�ܻ�</option><option value =\"����ѧ��\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\">����С��</option><option value =\"��֧��\">��֧��</option></select>";
	}	
	else 
	{
		if ($flag=='����ѧ��')
		{
			echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\" >УTMS�ܻ�</option><option value =\"����ѧ��\" selected=\"selected\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\">����С��</option><option value =\"��֧��\">��֧��</option></select>";
		}	
		else	
		{
			if ($flag=='ϵѧ��������ѧϰ��ʵ������')
			{
				echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\" >УTMS�ܻ�</option><option value =\"����ѧ��\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\" selected=\"selected\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\">����С��</option><option value =\"��֧��\">��֧��</option></select>";
			}	
			else	
			{
				if ($flag=='����С��')
				{
					echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\" >УTMS�ܻ�</option><option value =\"����ѧ��\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\" selected=\"selected\">����С��</option><option value =\"��֧��\">��֧��</option></select>";
				}	
				else
				{
					echo"	<select class=\"form-control\" name=\"".$name."\" ><option value =\"УTMS�ܻ�\">УTMS�ܻ�</option><option value =\"����ѧ��\">����ѧ��</option><option value =\"ϵѧ��������ѧϰ��ʵ������\">ϵѧ��������ѧϰ��ʵ������</option><option value =\"����С��\">����С��</option><option value =\"��֧��\"  selected=\"selected\">��֧��</option></select>";
				}	
			}
		}
	}
}

?>
