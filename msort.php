<?php
//Mergesort & Recursion
	function msort($arr){
		$len=count($arr);
		if($len<2){
			return $arr;
		}
		$mid=round($len/2);
		$frontArr=array_slice($arr,0,$mid);
		$behindArr=array_slice($arr,$mid);
		$front2=msort($frontArr);
		$behind2=msort($behindArr);
		$newArr=array();
		while($front2 && $behind2){
			 $newArr[]=$front2[0]>$behind2[0] ? array_shift($behind2)
											  : array_shift($front2);
		}
		return array_merge($newArr,$front2,$behind2);
	}
	$arrs=array(85,850004,5,100000008,8500005,85003,8502,851,85000006);
	print_r(msort($arrs));