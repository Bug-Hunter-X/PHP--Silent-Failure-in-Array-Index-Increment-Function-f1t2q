function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    throw new InvalidArgumentException("Index out of bounds");
  }
  $arr[$index]++;
} 