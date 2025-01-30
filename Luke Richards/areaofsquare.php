<?php 
function square_area($arcLength) {

    $radius = $arcLength / (M_PI / 2); // chercher le radus
    
    $area = pow($radius, 2); // get the area
    
    return round($area, 2);
}
// https://www.codewars.com/kata/5748838ce2fab90b86001b1a/train/php
?>