<?php
function shortenToDate($longDate) {
  
  $parts = explode(',', $longDate); // separer avec , aka split

  return trim($parts[0]); // on vas chercher le premier elem
}
// https://www.codewars.com/kata/56b0ff16d4aa33e5bb00008e/train/php
?>