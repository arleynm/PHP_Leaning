<?php

  function defioneCorCarro($cor = "vermelha"){
    return "A cor de carro é: $cor";
  }

  $carroCor = defioneCorCarro();
  echo $carroCor. "<br>";
  
  $carroAzul =defioneCorCarro("Azul");
  echo $carroAzul . "<br>";
  
?>