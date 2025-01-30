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

