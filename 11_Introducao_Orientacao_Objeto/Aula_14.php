<?php

use Animal as GlobalAnimal;

  class Humano{

  }

  class Animal{

  }

  class Professor extends Humano{

  }

  $marcos = new Humano;

  $truca = new Animal;

  if($marcos instanceof Humano){
    echo "Marcos é humano <br>";
  }else{
    echo "Marcos não é um humano <br>";
  }

  if($turca instanceof Humano){
    echo "turca é humano <br>";
  }else{
    echo "turnca não é um humano <br>";
  }

  $pedro = new Professor;

  if($pedro instanceof Professor){
    echo "Pedro é humano <br>";
  }else{
    echo "Pedro não é um humano <br>";
  }

  if($pedro instanceof Humano){
    echo "Pedro é humano <br>";
  }else{
    echo "Pedro não é um humano <br>";
  }

?>