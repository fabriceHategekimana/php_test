<?php
function remove(string $s): string {
    $length = strlen($s);
    
    if ($length > 0 && $s[$length - 1] === '!') { // on vas voir si le dernier est egale a !
        $s = substr($s, 0, -1); // on l'enleve
    }
    
    return $s;
}
// https://www.codewars.com/kata/57fae964d80daa229d000126/train/php
?>