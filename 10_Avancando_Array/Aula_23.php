<?php

  $arr = ["banana","maça","batata", "pera", "mamão"];

  if(in_array("batata", $arr)){
    echo "Há um item batata no array <br>";
  }else{
    echo "Não ha batata nesse array <br>";
  }
  
  $b = "banana";


  if(in_array($b, $arr)){
    echo "Há um item batata no array <br>";
  }else{
    echo "Não ha batata nesse array <br>";
  }


  if(in_array("teste", $arr)){
    echo "Há um item batata no array <br>";
  }else{
    echo "Não ha batata nesse array <br>";
  }

?>