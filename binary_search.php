<?php
declare(strict_types=1);
function binarySearch(array $arr , int $value): bool{
	$left = 0 ;
    $right = count($arr)-1 ;
   while($left <= $right){
   	$middle = floor(($left + $right) / 2 );
   	if ($arr[$middle] == $value) {
   	 	echo "position of search value at   ". ++$middle  ;
   	 	return true;
   	 } 
   	 elseif($arr[$middle] < $value){
   	 	$left = $middle + 1;
   	 }
   	 else{
   	 	$right = $middle - 1;
   	 }
   }
   return false;
}

$arr = [2,3,4,6,8,9,15,19];
if (binarySearch($arr , 19) == true) { 
	 echo " Ok ";
}else{
	echo "No";
}