<?php
//Quciksort & $Recursion & I found a bug but correct ! Can you ?
	function qsort($arr){
		if(count($arr)<2){
			return $arr;
		}	
		$key=$arr[0];
		$leftArr=array();
		$rightArr=array();
		for($i=1;$i<count($arr);$i++){
			if($arr[$i]>$key){
				$rightArr=$arr[$i];
			}else{
				$leftArr=$arr[$i];
			}
		}
		$left2=qsort($leftArr);
		$right2=qsort($rightArr);
		return array_merge($left2,array($key),$right2);
	}
	$arrs=array(8502,85,8500005,85003,85000006,100000008,850004,851);
	print_r(qsort($arrs));