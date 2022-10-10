<?php 
  $produtos = [
    'carro' => 37.980,
    'sofa' => 820,
    'cafeteira' => 120,
    'retrovisor' => 8,
  ];

  function caracteristicas($produtos){

    $itenCarros =[];

    foreach($produtos as $itens => $preco){
      if($preco > 10){
        array_push($itenCarros, $itens);
      }
    }
    $resultado = caracteristicas($produtos);
    print_r($resultado);
  }
?>