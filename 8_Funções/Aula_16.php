<?php

  $arr =["banana", "requeijão", "salame", "cerveja"];
  function supermercado($arr){

    $str = "Voce levou estes itens do mercado: ";

    for($i= 0; $i < count($arr); $i++){
      $str .= "$arr[$i],";
      return $arr;

    }
  }

  supermercado($arr);
?>