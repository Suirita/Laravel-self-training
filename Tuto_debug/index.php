<?php
function quickSort($arr)
{
  if (count($arr) <= 1) {
    return $arr;
  }

  $pivot = $arr[0];
  $left = [];
  $right = [];

  foreach ($arr as $key => $value) {
    if ($value < $pivot) {
      $left[] = $value;
    } elseif ($value > $pivot) {
      $right[] = $value;
    } else {
      $equal[] = $value;
    }
  }

  return array_merge(quickSort($left), $equal, quickSort($right));
}

$array = [5, 3, 7, 2, 8, 5];
$sorted = quickSort($array);

echo "Tableau trié : " . implode(", ", $sorted);
