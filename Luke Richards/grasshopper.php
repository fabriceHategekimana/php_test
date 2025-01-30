<?php
function checkForFactor($base, $factor) {
  if ($base % $factor == 0){
    return true;
  }
  return false;
}
// https://www.codewars.com/kata/55cbc3586671f6aa070000fb/train/php
?>
