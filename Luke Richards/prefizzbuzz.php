<?php
function pre_fizz($n) {
    
    $result = [];
    for ($i = $n; $i > 1; $i--) {
       $result[$i] = $i;
    }
    return $result;
}
echo var_dump(pre_fizz(6));
?>