<?php
//Selectsort like bubble
	function ssort($arr){
		for($i=0;$i<count($arr);$i++){
			$k=$i;
			for($j=$i+1;$j<count($arr);$j++){
				if($arr[$j]<$arr[$k]){
					$k=$j;
				}
			}
			if($k!=$i){
				$temp=$arr[$i];
				$arr[$i]=$arr[$k];
				$arr[$k]=$temp;
			}
		}		
		return $arr;
	}
	$arrs=array(5,3,10,8,4,7,6,2,9,1);
	print_r(ssort($arrs));