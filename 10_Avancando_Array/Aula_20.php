<?php
  $arley=[
    'nome' => "Arley",
    'idade' => "21",
    'profissao' =>"Programador",
  ];

  $alexia=[
    'nome' => "Alexia",
    'idade' => "24",
    'profissao' =>"Administracao",
  ];

  foreach($arley as $caracteristicas => $value){
    echo "$caracteristicas => $value <br>";
  }

  foreach($alexia as $value){
    echo "$value <br>";

  }
?>