<?php

  $arr=[];
  for($i=10; $i=20; $i++){
    array_push($arr, $i);
  }

  print_r($arr); 

  $arr=[];
  for($i=10; $i=20; $i++){
    if($arr[$i] %2 ==0){
      echo("Numero impar: $arr[$i] <br>");
    }
  }
?>