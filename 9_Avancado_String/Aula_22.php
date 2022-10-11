<?php

  $str = "Estamos testando o método stpos, com o strpos podemos encontrar strings";

  $testeEncontrar = strpos($str, "strpos");

  echo "$testeEncontrar <br>";

  $testeEncontrar2 = strpos($str ,"Java");

  echo "$testeEncontrar2 <br>";

  if($testeEncontrar === false ){
    echo "palavra não encontrada";
  }

  $palavra = "com";

  $testeEncontrar3 = strpos($str, $palavra);

  echo "$testeEncontrar3 <br>";

  $palvra2 = "to";

  $testeEncontrar4 = strpos($str, $palvra2);

  echo "$testeEncontrar4 <br>";

?>