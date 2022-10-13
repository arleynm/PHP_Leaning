<?php

  class Humano{
    public $nome = "Arley <br>";
    public $idade= 21 . "<br>";

    public function falar(){
      echo "Ele esta falando!";
    }
  }

  class Professor extends Humano{
    public $curso = "Administração <br>";
    private $ano = 4 . "<br>";

    public function darAula(){
      echo "Ele da muita aula durante a tarde!";
    }

    public function experiencia(){
      return $this->ano;
    }
  }


  $pessoa = new Humano;

  echo $pessoa->nome;
  
  
  $professor = new Professor;

  echo $professor->idade;
  echo $professor->curso;
  echo $professor->experiencia();

?>