<?php
  class Carro{
    public $modelo;
    public $velocidadeMaxima;
    public $cor;

    function setVelocidadeMaxima($vel){
      $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
      echo "A velocidade maxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
  }

  $carro = new Carro;

  $carro->cor= "Branca";
  $carro->modelo = "BMW";

  $carro->setVelocidadeMaxima(200);

  $carro->getVelocidadeMaxima();

  $ferrari = new Carro;

  $ferrari -> setVelocidadeMaxima(300);

  $ferrari -> getVelocidadeMaxima();

  
?>