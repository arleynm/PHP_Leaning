<?php
  $x= 0;

  while($x < 10){
    echo "0 é $x <br>";

    if($x == 0){
      echo "Terminando o loop <br>";
      break;
    }
    $x++;
  }

  echo "Saiu do loop <br>";
?>