<?php
  $arr =[
    'nome' => 'Matheus',
    'idade' => 29,
  ];

  if(array_key_exists("nome", $arr)){
    echo "A chave ja existe! <br>";
  }else{
    echo "A chave não ja existe! <br>";
  }

  if(array_key_exists("profissao", $arr)){
    echo "A chave ja existe! <br>";
  }else{
    echo "A chave não existe! <br>";
  }

  if(isset($arr['nome'])){
    echo "A chave ja existe! Isset <br>";
  }else{
    echo "A chave não existe! Isset <br>";
  }

  $x= 10;

  if(isset($x)){
    echo "A chave ja existe! Isset <br>";
  }else{
    echo "A chave não existe! Isset <br>";
  }

?>