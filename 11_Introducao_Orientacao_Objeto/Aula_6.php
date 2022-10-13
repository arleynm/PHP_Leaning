<?php

  class Car{
    public $car =4;
    public $aro =20;
    public $cor = "Vermelha";

    function ligar(){
      echo "Vrummm <br>";
    }
  }

  $ferrari = new Car;

  $ferrari->rodas=4;

  echo $ferrari ->aro. "<br>";
  echo $ferrari ->rodas. "<br>";

  $ferrari-> cor ="Azul";

  echo $ferrari-> cor;

  $ferrari-> ligar();
?>