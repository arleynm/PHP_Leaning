<?php
  $pessoa = new class(){
    public $nome = "Matheus";

    public function dizerNome(){
      echo "Ola meu nome é $this->nome <br>";
    }
  };

  echo $pessoa->nome;

  $pessoa->dizerNome();
?>