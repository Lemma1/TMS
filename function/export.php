<?php
//include ('./config/db.php');
include('other.php');
function GenerateTitie1()
{
	return array('������Ϣ','','','','','','','','','','','','','����С��','','','','','','','','','','','����ѧϰ','','','','','','','','','֧����ϵ','','','','','','','','','','','','','','','Ԥ������','','','','','','','','','','');
}

function GenerateTitie2()
{
	return array('������Ϣ','','','','','','','','��Ṥ��','','','��������','','С��','','','˼��ƽ̨','','','','','������','','','����ѧϰ','','','�����','','','','����Ͷ��','','��ϵ���','','','','˼��㱨','','��չ��','','','','','֧���','','','','˼��㱨','','����С��','','ȫ���ܽ�','','ת����');
}

function GenerateTitie3()
{
	return array('����','ѧ��','�༶','��֧��','����','�ֻ�','�������ύʱ��','��չ�׶�','��֯','ְ��','����','����','�Ƿ�ͨ��','ʱ��','����','�Ƿ�μ�','ʱ��','����','�Ƿ�μ�','�Ƿ����','����','ʱ��','��������','�ɼ�','ʱ��','��ʽ','��Ҫ����','ʱ��','��ʽ','�ص�','��Ҫ����','ʱ��','����','ʱ��','�ص�','��ϵ��','��Ҫ����','ʱ��','����','ʱ��','ͶƱ����','�޳�����','��������','��Ȩ����','ʱ��','�ص�','����','�������','ʱ��','����','ʱ��','�Ƿ��ύ','ʱ��','�Ƿ��ύ','ʱ��','ͶƱ����','�޳�����','��������','��Ȩ����');
}

//������Ϣ
//������Ϣ
function Getjiben($id)
{
	$DB=new DB_MySQL;
	$sql="select name,studentid,class,dangzhibu,mail,cell,time,stage from useraccount where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4],$sample[5],$sample[6],GetStage($sample[7]));
		return $output;
	} else
	{
		return array('');
	}
}

//��Ṥ��
function GetJibenShehui($id)
{
	$DB=new DB_MySQL;
	$sql="select Associate,Position,Duration from basicinfo_socialwork where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//��������
function GetJibenDangke($id)
{
	$DB=new DB_MySQL;
	$sql="select Qishu,Pass from basicinfo_dangke where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1]);
		return $output;
	} else
	{
		return array('');
	}
}

//����С��
//С��
function GetDangkeXiaozu($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Theme,Attend from dangkexiaozu_activity where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//˼��ƽ̨
function GetDangkeSibian($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Theme,Canjia,Haotie,pingfen from dangkexiaozu_sibian where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//������
function GetDangkeQiusuo($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Level,Score from dangkexiaozu_qiusuo where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//����ѧϰ
//����ѧϰ
function GetZizhuLilun($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Style,Content from zizhu_lilun where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//�����
function GetZizhuHuodong($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Style,Position,Content from zizhu_huodong where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2],$sample[3]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//����Ͷ��
function GetZizhuTougao($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Title from zizhu_tougao where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//֧����ϵ
//��ϵ���
function GetZhibuLianxi($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Location,Contact,Content from zhibu_lianxiqingkuang where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2],$sample[3]);
		}
		return $output;
	} else
		{
			return array('');
		}
}


//˼��㱨
function GetZhibuSixiang($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Content from zhibu_huibao where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

//��չ��
function GetZhibuFazhan($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Total,Agree,Against,Giveup from zhibu_fazhanhui where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]);
		return $output;
	} else
	{
		return array('');
	}
}

function GetZhibuZhibu($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Location,Theme,Results from zhibu_huodong where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1],$sample[2],$sample[3]);
		}
		return $output;
	} else
		{
			return array('');
		}
}

function GetYubeiSixiang($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Content from yubei_huibao where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		for ($i=0;$i<=$num;$i++)
		{
			$sample=$ans[$i];
			$output[$i]=array($sample[0],$sample[1]);
		}
		return $output;
	} else
		{
			return array('');
		}
}


function GetYubeiZhongqi($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Tijiao from yubei_zhongqi where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1]);
		return $output;
	} else
	{
		return array('');
	}
}

function GetYubeiQuannian($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Tijiao from yubei_quannian where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1]);
		return $output;
	} else
	{
		return array('');
	}
}

function GetYubeiZhuanzheng($id)
{
	$DB=new DB_MySQL;
	$sql="select Time,Total,Agree,Against,Giveup from yubei_zhuanzheng where id=".$id;
	$DB->query($sql);
	$ans=$DB->get_rows_array();
	if ($ans)
	{
		$num=$DB->get_rows();
		$sample=$ans[$num-1];
		$output[0]=array($sample[0],$sample[1],$sample[2],$sample[3],$sample[4]);
		return $output;
	} else
	{
		return array('');
	}
}



function export_one($id)
{
$max=5;
$jiben=Getjiben($id);
$jibenShehui=GetJibenShehui($id);
$jibenDangke=GetJibenDangke($id);
$DangkeXiaozu=GetDangkeXiaozu($id);
$DangkeSibian=GetDangkeSibian($id);
$DangkeQiusuo=GetDangkeQiusuo($id);
$ZizhuLilun=GetZizhuLilun($id);
$ZizhuHuodong=GetZizhuHuodong($id);
$ZizhuTougao=GetZizhuTougao($id);
$ZhibuLianxi=GetZhibuLianxi($id);
$ZhibuSixiang=GetZhibuSixiang($id);
$ZhibuFazhan=GetZhibuFazhan($id);
$ZhibuZhibu=GetZhibuZhibu($id);
$YubeiSixiang=GetYubeiSixiang($id);
$YubeiZhongqi=GetYubeiZhongqi($id);
$YubeiQuannian=GetYubeiQuannian($id);
$YubeiZhuanzheng=GetYubeiZhuanzheng($id);

//combine
for ($i=0;$i<$max;$i++)
{
	//jiben_basicinfo
	if ($jiben[$i])
	{
		$sample_jiben=$jiben[$i];
	} else
		{
			$sample_jiben=array('','','','','','','','');	
		}

	//jiben_shehui
	if ($jibenShehui[$i])
	{
		$sample_jibenShehui=$jibenShehui[$i];
	} else
		{
			$sample_jibenShehui=array('','','');	
		}

	//jiben_dangke
	if ($jibenDangke[$i])
	{
		$sample_jibenDangke=$jibenDangke[$i];
	} else
		{
			$sample_jibenDangke=array('','');	
		}

		//dangke_xiaozu
	if ($DangkeXiaozu[$i])
	{
		$sample_DangkeXiaozu=$DangkeXiaozu[$i];
	} else
		{
			$sample_DangkeXiaozu=array('','','');	
		}

		//dangke_sibian
	if ($DangkeSibian[$i])
	{
		$sample_DangkeSibian=$DangkeSibian[$i];
	} else
		{
			$sample_DangkeSibian=array('','','','','');	
		}

		//dangke_qiusuo
	if ($DangkeQiusuo[$i])
	{
		$sample_DangkeQiusuo=$DangkeQiusuo[$i];
	} else
		{
			$sample_DangkeQiusuo=array('','','');	
		}

		//zizhu_lilun
	if ($ZizhuLilun[$i])
	{
		$sample_ZizhuLilun=$ZizhuLilun[$i];
	} else
		{
			$sample_ZizhuLilun=array('','','');	
		}

		//zizhu_huodong
	if ($ZizhuHuodong[$i])
	{
		$sample_ZizhuHuodong=$ZizhuHuodong[$i];
	} else
		{
			$sample_ZizhuHuodong=array('','','','');	
		}

		//zizhu_tougao
	if ($ZizhuTougao[$i])
	{
		$sample_ZizhuTougao=$ZizhuTougao[$i];
	} else
		{
			$sample_ZizhuTougao=array('','');	
		}

		//zhibu_lianxi
	if ($ZhibuLianxi[$i])
	{
		$sample_ZhibuLianxi=$ZhibuLianxi[$i];
	} else
		{
			$sample_ZhibuLianxi=array('','','','');	
		}

		//zhibu_sixiang
	if ($ZhibuSixiang[$i])
	{
		$sample_ZhibuSixiang=$ZhibuSixiang[$i];
	} else
		{
			$sample_ZhibuSixiang=array('','');	
		}

		//zhibu_fazhan
	if ($ZhibuFazhan[$i])
	{
		$sample_ZhibuFazhan=$ZhibuFazhan[$i];
	} else
		{
			$sample_ZhibuFazhan=array('','','','','');	
		}

		//zhibu_zhibu
	if ($ZhibuZhibu[$i])
	{
		$sample_ZhibuZhibu=$ZhibuZhibu[$i];
	} else
		{
			$sample_ZhibuZhibu=array('','','','');	
		}

		//yubei_sixiang
	if ($YubeiSixiang[$i])
	{
		$sample_YubeiSixiang=$YubeiSixiang[$i];
	} else
		{
			$sample_YubeiSixiang=array('','');	
		}

		//yubei_zhongqi
	if ($YubeiZhongqi[$i])
	{
		$sample_YubeiZhongqi=$YubeiZhongqi[$i];
	} else
		{
			$sample_YubeiZhongqi=array('','');	
		}

		//yubei_quannian
	if ($YubeiQuannian[$i])
	{
		$sample_YubeiQuannian=$YubeiQuannian[$i];
	} else
		{
			$sample_YubeiQuannian=array('','');	
		}

		//yubei_zhuanzheng
	if ($YubeiZhuanzheng[$i])
	{
		$sample_YubeiZhuanzheng=$YubeiZhuanzheng[$i];
	} else
		{
			$sample_YubeiZhuanzheng=array('','','','','');	
		}

	$m = array_merge($sample_jiben, $sample_jibenShehui, $sample_jibenDangke,		$sample_DangkeXiaozu, $sample_DangkeSibian,$sample_DangkeQiusuo, $sample_ZizhuLilun, $sample_ZizhuHuodong,$sample_ZizhuTougao, $sample_ZhibuLianxi, $sample_ZhibuSixiang, $sample_ZhibuFazhan,$sample_ZhibuZhibu,$sample_YubeiSixiang, $sample_YubeiZhongqi,$sample_YubeiQuannian,$sample_YubeiZhuanzheng);
	$len=count($m);
	for ($k=0;$k<$len;$k++) 
	{
		if ($m[$k]==NULL or $m[$k]==1) $m[$k]='';
	}
	$final[$i]=$m;
}//end_loop
	return $final;
}//end_of_funtion


?>
