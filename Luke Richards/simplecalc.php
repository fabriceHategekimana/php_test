<?php
function calculator($a, $b, $sign) {
    if (is_string ($a) || is_string ($b)) {  return 'unknown value'; }
    switch ($sign) {
      case "+" : return $a + $b ;
      case "-" : return $a - $b ;
      case "*" : return $a * $b ;
      case "/" : return $a / $b ;
      default : return 'unknown value';
    }
  }
//https://www.codewars.com/kata/5810085c533d69f4980001cf/train/php
?>