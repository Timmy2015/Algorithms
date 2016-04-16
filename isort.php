<?php
//Insertsort
	function isort($arr){
		for($i=1;$i<count($arr);$i++){
			$temp=$arr[$i];
			$j=$i-1;
			while($arr[$j]>$temp){
				$arr[$j+1]=$arr[$j];
				$arr[$j]=$temp;
//That's no matter --$j or $j-- ,because it finally assign to variable ! If add = ,that will be different !
				--$j;
				if($j<0)
				break;
			}
		}
		return $arr;
	}
	$arrs=array(85003,8502,8500005,851,85000006,850004,100000008,5);
	print_r(isort($arrs));