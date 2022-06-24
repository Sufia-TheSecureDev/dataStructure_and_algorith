<?php
declare(strict_types=1);
function insertionSort(array $arr):array{
	for ($i=1; $i <count($arr) ; $i++) { 
		$key = $arr[$i];
		$j = $i-1;
		while ($j >= 0 && $arr[$j] > $key) {
			$arr[$j+1] = $arr[$j];
			$j-- ;
		}
		$arr[$j+1] = $key ;
	}
	return $arr;
}
$values = [1,8,9,3,6,7];
$sortedArray = insertionSort($values);
print_r($sortedArray);