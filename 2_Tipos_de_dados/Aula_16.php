<?php
  //objetos

  class Pessoa{
    function falar(){
      echo 'Ola pessoal!';
    }
  }

  $matheus = new Pessoa();

  $matheus->nome = "Matheus";

  echo $matheus->nome;

  echo"<br>";

  $matheus->falar();

?>