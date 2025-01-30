<?php
function problem($x){
    if (is_string($x)){
      return "Error";
    }
    return ($x * 50) + 6;
  }
//https://www.codewars.com/kata/55a5bfaa756cfede78000026
?>