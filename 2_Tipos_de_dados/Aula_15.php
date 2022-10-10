<?php
  $pessoa = [
    'nome' => 'Felipe',
    'altura'=> 1.87,
    'idade'=> 25,
    'peso'=> 98,
  ];

  print_r($pessoa);

  echo "<br>";
  $nome = $pessoa['nome'];
  $idade = $pessoa['idade'];

  if($idade > 18){
    echo "$nome é maio de idade";
  }
?>