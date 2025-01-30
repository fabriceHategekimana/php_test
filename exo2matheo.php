<?php
function lovefunc(int $flower1, int $flower2) : bool {
  return ($flower1 % 2 == 0 and $flower2 % 2 != 0) or ($flower1 % 2 != 0 and $flower2 % 2 == 0);
  
}
