<?php
  $pessoa =["Arley", 21, "Programador", "preto"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissão, $cordosOlhos) = $pessoa;

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corDosOlhos <br>";


?>