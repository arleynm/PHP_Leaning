<?php
  $arr =[
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço',
  ];

  extract($arr);

  echo"$cor <br>";
  echo"$forma <br>";
  echo"$material <br>";

  $nome = "matheus";

  $pessoa =[
    'nome' => 'Joao',
    'idade' => 29,
  ];

  echo "$nome <br>";
  echo "$idade <br>";
?>