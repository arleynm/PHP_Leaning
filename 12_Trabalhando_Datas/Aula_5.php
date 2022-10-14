<?php


  $data = new DateTime();

  echo $data-> format('d/m/y'). "<br>";

  echo $data-> format('D - M - Y'). "<br>";

  echo $data-> format('l . F . Y'). "<br>";

  $data->modify("+ 5days");

  echo $data-> format('d/m/y'). "<br>";

  $data->modify("+ 2moths");

  echo $data-> format('d/m/y'). "<br>";

  $data->modify("- 3 year");

  echo $data-> format('d/m/y'). "<br>";
?>