<?php 
declare(strict_types=1);
 function isPalindrome(string $str , int $L ,int  $R)  :bool{
  if ($L > $R) return true;
  return ($str[$L] === $str[$R]) && isPalindrome($str , $L+1 , $R-1);
}
$str = "abcba";  
 if(isPalindrome( $str , 0 , strlen($str)-1 ) == true){
    echo "palindrome" ;
 } else{
  echo "not palindrome  " ;
 }