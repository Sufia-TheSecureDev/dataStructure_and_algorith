<?php 
declare(strict_types = 1);
function  fibonacci(int $n)  {
	if ($n < 2) return $n ;
	 return     fibonacci($n-1) +  fibonacci($n-2) ;
}
echo fibonacci(6);