<?php
function remove(string $s): string {
    return preg_replace('/!+$/', '', $s); 
    // reg qui enleve tout les ! avant le string (c mega cool je savais pas que php avais du reg)
  }
//https://www.codewars.com/kata/57faece99610ced690000165/train/php
?>