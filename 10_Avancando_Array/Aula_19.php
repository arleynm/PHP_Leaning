<?php

  $porte = "grande";
  $idade = 4;
  $peso = 12;
  $especie = "cachorro";
  $raca = "vira lata";


  $animal =compact("porte", "idade", "peso", "especie", "raca");

  print_r($animal);
  echo "<br>";

  foreach($animal as $caracteristicas => $value){
    echo "$caracteristicas: $value <br>";
  }

?>