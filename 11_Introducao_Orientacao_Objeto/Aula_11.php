<?php
  class Carro{
    public $rodas = 4;
    private $vidro = "Sem pelicula";
    protected $portas =4;

    public function getVidro(){
      return $this->vidro;
    }

    public function getPortas(){
      return $this->portas;
    }
  }

  class Mecanico {

    public function alterarRodas($carro){
      $carro->rodas =10;
    }

    public function colocarPelicula($carro, $pelicula){
      $carro->vidro =$pelicula;
    }
  }

  $carro = new Carro;

  echo $carro-> rodas. "<br>";

  $matheus = new Mecanico;

  $matheus ->alterarRodas($carro);

  echo $carro->rodas . "<br>";

  echo $carro->getVidro() . "<br>";

  echo $carro->getPortas() ."<br>";

?>