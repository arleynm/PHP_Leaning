<?php
  $a = 12;
  $b = 89;
  $c = "teste";

  if(is_int($a) || is_float($a)){
    $mult = $a * 2;

    if($a > 100){
      echo "é numero maio que 100. Numero: $mult <br>";
    }else{
      echo "Numero menor que 100. Numero: $mult <br>";
    }
  }else{
    
    echo " Não é um numero <br>";

  }



?>