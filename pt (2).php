<?php
//Pascal's Triangle
	function ps($n){
		$previous=array();
		$next=array();
		for($i=1;$i<=$n;$i++){
			$next[0]=1;
			for($j=1;$j<$i;$j++){
				$next[$j]=$previous[$j]+$previous[$j-1];
			}
			echo implode(' ',$next)."\n";
			$previous=$next;
			$previous[]=0;
		}
		return false;
	}
	$v=7;
	print_r(ps($v));