<?php
	function jump($x){
		echo '<script language="javascript" type="text/javascript">window.location="'.$x.'";;</script>';	
		
	}

	function checklogin($x){
		global $islogin;
		if($x){
			if($x==1){
				if($islogin!=1){
					jump('home.php');
				}
			}else{
				jump('login.php');	
			}
		}elseif($islogin!=2){
			jump('login.php');	
		}
	}
?>
