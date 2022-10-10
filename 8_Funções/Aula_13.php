<?php
  function teste($a = "teste"){
    echo "O valor A: $a <br>";

  }
  teste();
  teste("asd");

  function testando($b, $a = "x"){
    echo "O valor de a é $a e de b é: $b";
  }

  testando("1");
  testando("1", "2");
?>