<?php
  $valor1 = 4;

  while($valor1 < 30){
    echo $valor1 . "<br>";
    if($valor1 == 24){
      echo"Numero 24";
      break;
    }
    $valor1 =$valor1 +2;
  }
?>