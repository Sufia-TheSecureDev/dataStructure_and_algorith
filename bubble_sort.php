<?php
declare(strict_types=1);
function bubbleSort(array $arr): array{
	for ($i=0; $i < count($arr); $i++) { 
		for ($j=$i+1; $j < count($arr); $j++) { 
			if($arr[$i] > $arr[$j]){
				$tmp     = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tmp ;
 			}
		}
	}
	return  $arr;
}

$values = [ 1,2,9,5,8,6,4];
$sorted = bubbleSort($values); // 1 2 4 5 6 8 9
print_r($sorted);