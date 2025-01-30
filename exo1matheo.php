function periodIsLate($last, $today, $cycleLength) {
  $interval = date_diff($today, $last);
  $differance = intval($interval->format('%a'));
    if($differance > $cycleLength){
      return true;
    }
  else{return false;}
    
}