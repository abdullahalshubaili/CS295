<?php
//set session for 2h
ini_set('session.gc_maxlifetime', 7200);

session_set_cookie_params(7200);
@session_start();

	function countsignup($sign)
	{
		$count = 0;
		if(@$_SESSION['Monday']){
			foreach(@$_SESSION['Monday'] as $var1 => $var2){
				if(@$_SESSION['Monday'][$var1]['user_name'] && $sign == @$_SESSION['Monday'][$var1]['user_name']){
					$count++;
				}
			}
		}
		if(@$_SESSION['Tuesday']){
			foreach(@$_SESSION['Tuesday'] as $var1 => $var2){
				if(@$_SESSION['Tuesday'][$var1]['user_name'] && $sign == @$_SESSION['Tuesday'][$var1]['user_name']){
					$count++;
				}
			}
		}
		if(@$_SESSION['Wednesday']){
			foreach(@$_SESSION['Wednesday'] as $var1 => $var2){
				if(@$_SESSION['Wednesday'][$var1]['user_name'] && $sign == @$_SESSION['Wednesday'][$var1]['user_name']){
					$count++;
				}
			}
		}
		if(@$_SESSION['Thursday']){
			foreach(@$_SESSION['Thursday'] as $var1 => $var2){
				if(@$_SESSION['Thursday'][$var1]['user_name'] && $sign == @$_SESSION['Thursday'][$var1]['user_name']){
					$count++;
				}
			}
		}
		if(@$_SESSION['Friday']){
			foreach(@$_SESSION['Friday'] as $var1 => $var2){
				if(@$_SESSION['Friday'][$var1]['user_name'] && $sign == @$_SESSION['Friday'][$var1]['user_name']){
					$count++;
				}
			}
		}
		return $count;
	}
?>