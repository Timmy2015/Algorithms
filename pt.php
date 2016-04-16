<?php
//Pascal's Triangle & Iteration Unskilled
	function pt($n){
	//The original'$previous=array(1)',What's effect ?That's no different !
		$previous=array();
		$next=array();
		for($i=1;$i<=$n;$i++){
			$next[0]=1;
			for($j=1;$j<$i;$j++){
				$next[$j]=$previous[$j]+$previous[$j-1];
			}
			echo implode(' ',$next)."\n";
			$previous=$next;
/*			This above one code is useless as I see currently!
t will reset the '$next' or null !But what's the effect in fact ?
*/
// 			$next=array();
// var_dump($next);
//This is important for compatibility in low php version!The high version will ok!
			$previous[]=0;
		}
		//point! It's useful to use
		return false;
	}
$n=6;
//It works call function without echo and so on !
pt($n);
?>