<?php
function setAlarm(bool $employed, bool $vacation): bool {
    if ($employed === $vacation){
      return false;
    }
    return $employed and !$vacation;
  }

//https://www.codewars.com/kata/568dcc3c7f12767a62000038/train/php
?>