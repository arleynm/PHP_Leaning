<?php

  $x=10;

  $y = & $x;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $y= 15;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $x = 20;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome= "matheus";

  $nome2 = & $nome;

  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";

?>