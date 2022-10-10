<?php

  $a= 10;

  function testeEscopo(){

    $a = 5;

    global $b;

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "Escopo local de A: $a <br>";

    echo "Escopo Global de B: $b <br>";
  }

  echo "Escopo Global de A: $a <br>";
  echo "Escopo Global de B: $b <br>";

  testeEscopo();

  echo "Escopo Global de B 2: $b <br>";
?>