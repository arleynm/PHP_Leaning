<?php
  $dataNascimento = mktime(01, 12, 33, 02, 05, 2001);

  echo $dataNascimento . "<br>";

  $dataNascimentoFormatada  = date('d/m/Y', $dataNascimento);

  echo $dataNascimentoFormatada . "<br>";

  $dataEspecifica= mktime(10,20,11,04,28,2041);

  $dataEspecificaFormatada  = date('d/m/Y', $dataEspecifica);

  echo $dataEspecificaFormatada . "<br>";
?>