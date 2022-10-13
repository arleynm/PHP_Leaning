<?php
  class Carro{
    function latir(){
      echo "Cachorro latiu <br>";
    }
    function andar(){
      echo "Cachorro andou <br>";
    }
  }

  $nando = new Carro;

  $nando -> latir();
  $nando -> andar();
?>