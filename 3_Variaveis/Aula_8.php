<?php
  
  function teste(){
    $a=0;
    $a++;

    echo "$a <br>";
  }
  teste();
  teste();
  teste();

  function static testeStatic(){
    static $a=0;
    $a++;

    echo "$a <br>";
  }
  testeStatic();
  testeStatic();
  testeStatic();
?>