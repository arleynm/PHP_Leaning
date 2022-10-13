<?php
  class  Cachorro{
    public $raca;
    public $cor;
    public $nome;
    public $idade;


    function __construct($raca, $cor, $nome, $idade){ 
      $this->raca = $raca;
      $this->cor = $cor;
      $this->nome = $nome;
      $this->idade = $idade;
    }
    public function exibirAnimal(){
      echo"O animal da raça $this->raca, com a cor $this->cor ,m com o nome de $this->nome e idade de $this->idade";
    }
  }

  $nando = new Cachorro("Vira_lata","Marrom" ,"Nando",3);

  $nando->exibirAnimal();

?>