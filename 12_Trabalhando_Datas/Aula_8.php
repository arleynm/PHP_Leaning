<?php
  $dataA =new DateTime();
  $dataB =new DateTime();

  $dataC = new DateTime();

  $dataB->setDate(2001,10,15);
  $dataB->setDate(2001,10,15);

  if($dataB> $dataA){
    echo "A data B é maior que a data A <br>";
  }

  if($dataA > $dataB){
    echo "A data A é maior que a data B <br>";
  }

  if($dataB == $dataC){
    echo "A data C é igual a data B <br>";
  }
?>