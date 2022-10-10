<?php
  $arr = [1, "matheus", 2, "João", 2.986, "Sorvete", true, false, "Chuva"];

  $x= count($arr);
  $y=0;

  while($y < $x){
    if(is_string($arr[$y])){
      echo $arr[$y] . "<br>";
    }
    $y++;
  }
?>