<?
  class Humano{
    public $idade= 21;

      public function falar(){
        echo "Ola mundo!";
      }

      private function gritar(){
        echo "PHP É MUITO BOM! <br>";
      }

      public function acessarGritar(){
        $this->gritar();
      }

      protected function falarBaixinho(){
        echo "Alo <br>";
      }

      public function acessarFalarBaixinho(){
        $this->falarBaixinho();
      }
  }

  class Programador extends Humano{

  }

  $ze = new Humano;

  $ze->falar();
  $ze->acessarGritar();
  $ze->acessarFalarBaixinho();

  $matheus = new Programador;

  echo $matheus->idade . "<br>";

  $matheus->falar();
  $matheus->acessarGritar();
  $matheus->acessarFalarBaixinho(0);
?>