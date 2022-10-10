<?php
  //Exercicio de Array

  $carro = [
    'marca' => 'BMW',
    'cor' => 'preto',
    'motor' => 'disel',
    'portas' => 4,
    'velocidade_max' => 300,
    'blidado' => false
  ];

  print_r($carro);

  $marca =$carro['marca'];

  $velocidade_max = $carro['velocidade_max'];

  echo "<br>";

  echo "O carro da marca $marca ultrapassou a velocidade maxima permitida na br 50 de $velocidade_max km/h";

?>