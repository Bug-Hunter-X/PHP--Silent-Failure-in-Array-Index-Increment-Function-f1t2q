function incrementValue(array &$arr, int $index): void {
  if ($index < 0 || $index >= count($arr)) {
    return; // Handle out-of-bounds index
  }
  $arr[$index]++;
}