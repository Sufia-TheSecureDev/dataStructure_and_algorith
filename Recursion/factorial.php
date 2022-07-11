<?php 
declare(strict_types = 1);
function get_factorial(int $n)  {
	if ($n < 2) return $n ;
	 return  $n * get_factorial($n-1) ;
}
echo get_factorial(6);