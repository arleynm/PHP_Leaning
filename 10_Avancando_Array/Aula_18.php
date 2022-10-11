<?php
  $marca = 'BMW';
  $motor = '3.0';
  $teleSolar = true;
  $portas =4;

  $carro= compact("marcar", "motor", "teleSolar", "portas");

  print_r($carro);
?>