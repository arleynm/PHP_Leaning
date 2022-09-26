<?php

  $a = "teste";
  $b = 12.8;

  if(is_float($a)){
    echo "é um inteiro 1! <br>";
  }

  if(is_float($b)){
    echo "é um inteiro 2! <br>";
  }

  if(is_float(7463.74)){
    echo "é um inteiro 3! <br>";
  }

  if(is_float("teste")){
    echo "é um inteiro 4! <br>";
  }

?>