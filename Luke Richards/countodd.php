<?php
function oddCount($n): int {
    $total = 0;
    for ($i = $n; 1 < $i; $i--){
      if ($i % 2 != 0){
        $total ++;
      }
    }
    return $total;
  }
//https://www.codewars.com/kata/59342039eb450e39970000a6
?>