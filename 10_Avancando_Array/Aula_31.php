<?php

  $arr = [1,2,4];
  $arr2 = [2,4,6];

  $diff = array_diff($arr, $arr2);

  print_r($diif);
  echo "<br>";

  $diff2 = array_diff($arr, $arr2);

  print_r($diif2);
  echo "<br>";

  $arr3 = [3,6];

  $diff3 = array_diff($arr2, $arr, $arr3);

  print_r($diff3);
  echo "<br>";
?>