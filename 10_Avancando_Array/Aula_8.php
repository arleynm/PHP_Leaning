<?php
  $arr =[
    [2,3,4,5],
    [7,8,9,3],
    [12,17,5,7]
  ];

  for($i=0; $i < count($arr);$i++){
    echo "Imprimindo array externo:" . ($i+1);

    for($j=0; $j< count($arr[$i]); $j++){
      echo $arr[$i][$j] . "<br>";
    }
  }
?>