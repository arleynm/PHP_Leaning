<?php
  $carro = ['Jaguar', 3.0, 'azul', 18, 'Teto Solar', 'automatico'];

  print_r($carro);
  echo "<br>";

  list($modelo, $motor, $cor, $versão, $capoo, $tipo) = $carro;

  echo $modelo . "<br>";
  echo $motor . "<br>";
  echo $cor . "<br>";
  echo $versão . "<br>";
  echo $capoo . "<br>";
  echo $tipo . "<br>";

?>