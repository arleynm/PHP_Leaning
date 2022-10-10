<?php
  //variavel local

  $x=10;

  echo "$x global <br>";

  function teste(){
    $x=5;

    echo "$x local <br>";
  }

  echo "$x global <br>";
  teste();
  echo "<br>";

  function testando(){
    $x=15;

    echo "$x local 2 <br>";
  }

  echo "$x global <br>";
  teste();
  testando();
  echo "<br>"


?>