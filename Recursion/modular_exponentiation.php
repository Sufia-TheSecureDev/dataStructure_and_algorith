<?php 
function getExpo(  $a ,   $b){
	$MOD = 1000000007 ;
  if($b == 0 ) return 1;
  if ($b % 2 == 0) {
  	$value = getExpo($a , $b/2) % $MOD ;
  	return $value * $value;
  }
   return $a * getExpo($a , $b-1) % $MOD;
}

echo getExpo(2, 3);