<?php
declare(strict_types=1);
function countingSort(string $str){
	$array = array_fill(0, 26 , 0);
	for($i =0 ; $i<strlen($str) ; $i++){
		 $rank = ord($str[$i]) - ord('a');
         $array[$rank]++;
	}
	 $indx = 0;
   for($i=0 ; $i<26 ; $i++){
    $currentCount = $array[$i];
    while ($currentCount --) {
      $str[$indx] = chr(97+$i)   ;
      $indx ++ ;
    }
  }
	echo $str;
}
 $str = 'ddrrotaaa';
 countingSort($str);