<?php
  if(5 < 10 && 10 > 5){
    echo "Entrou no if 1 <br>";
  }

  if(50 > 10 && 10 > 5){
    echo "Entrou no if 2 <br>";
  }

  if(50 > 10 && 10 > 500){
    echo "Entrou no if 3 <br>";
  }

  $a = 10;
  $b = 5;
  $c = 15;
  $d = 15;

  if($a > $b && $c == $d){
    echo "Entrou no if 4 <br>";
  }

  if($b <= $a && $c >= $d){
    echo "Entrou no if 5 <br>";
  }

  if($b === $a && $c > $d){
    echo "Entrou no if 6 <br>";
  }

  if(($b <= $a && $c >= $d) && $a > $b){
    echo "Entrou no if 7 <br>";
  }


?>