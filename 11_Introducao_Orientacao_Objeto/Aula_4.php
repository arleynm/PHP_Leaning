<?php

  class Pessoa{
  function falar(){
    echo "Ola, eu sou um objeto! <br>";
  } 

  function somar($x, $y){
    echo $x + $y . "<br>";
  }
  }

  $arley = new Pessoa;

  $arley-> falar();
  $arley-> falar();

  $joao = new Pessoa;

  $joao -> falar();

  $arley -> somar(2,2);

  $arley -> somar(10,12);
?>