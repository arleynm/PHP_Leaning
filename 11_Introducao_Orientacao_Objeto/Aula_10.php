<?php
   class Humano{
    public const OLHOS = 2;
    public const BRACOS =2;
    public const PERNAS =2;

    function mostraConstante(){
      echo self::BRACOS. "<br>";
    }
   }

  $arley = new Humano;

  echo $arley::OLHOS. "<br>";

  $arley->mostraConstante();

?>