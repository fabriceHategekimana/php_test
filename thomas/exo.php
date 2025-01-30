function periodIsLate(DateTime $last, DateTime $today, int $cycleLength): bool 
{
    return $last->diff($today)->days > $cycleLength;
}

function shortenToDate($longDate) {
  return substr($longDate, 0, strpos($longDate, ','));
}

function remove(string $s): string {
  return preg_replace('/!$/', "", $s);
}

function square_area($A): float {
return round(pow((2 * $A) / M_PI, 2), 2);
}

function oddCount($n) {
  return intdiv($n, 2);
}

