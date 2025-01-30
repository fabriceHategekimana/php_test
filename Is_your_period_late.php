function periodIsLate($last, $today, $cycleLength) {
    echo "cycle: $cycleLength \n";
    $days = date_diff($today , $last)->format('%a');
    echo "days: $days\n";
    if ( $days > $cycleLength) {
      return true;

    } else {
       return false;
    }
}