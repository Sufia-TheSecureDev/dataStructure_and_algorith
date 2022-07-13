<?php 
function solve_hanoi( $src ,  $intr ,  $dest , int $disc){
  if ($disc == 0 )return ;
  solve_hanoi($src , $dest , $intr, $disc-1);
  echo $src ."->" . $dest . "\n";
  solve_hanoi($intr , $src , $dest , $disc-1);
}

solve_hanoi('A', 'B' ,'C' ,2);