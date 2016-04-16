<?php
/*Quicksort 快速排序使用分治法（Divide and conquer）策略来把一个序列（list）分为
两个子序列（sub-lists）
1,从数列中挑出一个元素，称为"基准"（pivot）
重新排序数列，所有元素比基准值小的摆放在基准前面，所有元素比基准值大的摆在基准的后面
（相同的数可以到任一边）。在这个分区结束之后，该基准就处于数列的中间位置。这个称为
分区（partition）操作。
3,递归地（recursive）把小于基准值元素的子数列和大于基准值元素的子数列排序。
When implemented well, it can be about two or three times faster than its main 
competitors, merge sort and heapsort
*/
	function qsort($arr){
		if(count($arr)<2){
			return $arr;
		}
		$l=array();
		$r=array();
		$key=$arr[0];
		for($i=1;$i<count($arr);$i++){
			if($arr[$i]>$key){
				$r[]=$arr[$i];
			}else{
				$l[]=$arr[$i];
			}
		}
		$l2=qsort($l);
		$r2=qsort($r);
		return array_merge($l2,array($key),$r2);
	}
	$arrs=range(5,10000,5);
	shuffle($arrs); 
	$arr2=array_slice($arrs,0,10);
	var_dump(qsort($arr2));