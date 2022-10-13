<?php

  class Humano {
    public function falar(){
      echo "Ola";
    }
  }

  $arley= new Humano;

  $teste=10;

  if(is_object($arley)){
    echo "é um objeto <br>";
  }else{
    echo "Não é um objeto <br>";
  }

  if(is_object($teste)){
    echo "é um objeto <br>";
  }else{
    echo "Não é um objeto <br>";
  }

  echo get_class($arley). "<br>";

  if(method_exists($arley, "falar")){
    echo "metodo existe <br>";
  }else{
    echo "metodo não existe <br>";
  }

  if(method_exists($teste, "asd")){
    echo "metodo existe <br>";
  }else{
    echo "metodo não existe <br>";
  }  


?>