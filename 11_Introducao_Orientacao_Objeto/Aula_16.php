<?php

  trait Objeto {
    public function teste(){
      echo "Tetsando trait de objeto <br>";
    }
  }

  trait Testando{

    public $y=10;

    public function traitTeste() {
      echo "Este metodo é da trait testando <br>";
    }
  }

  class Central{
    use Objeto;
    use Testando;
  }

  $x = new Central;

  $x->teste();
  $x->traitTeste();




?>