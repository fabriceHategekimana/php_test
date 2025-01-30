<?php
function periodIsLate($last, $today, $cycleLength) {
  
    $diff = $today->diff($last)->days;

    if ($diff > $cycleLength) {
        return true;
    } else {
        return false;
    }
}
// https://www.codewars.com/kata/578a8a01e9fd1549e50001f1/train/php
?>