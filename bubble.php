<?php
//Bubble
	function bubble($arr){
		for($i=0;$i<count($arr)-1;$i++){
			for($j=$i+1;$j<count($arr);$j++){
				if($arr[$j]<$arr[$i]){
					$temp=$arr[$i];
					$arr[$i]=$arr[$j];
					$arr[$j]=$temp;
				}
			}
		}
		return $arr;
	}
	$arrs=array(8502,85,850004,851,8500005,85003,100000008,85000006);
	print_r(bubble($arrs));