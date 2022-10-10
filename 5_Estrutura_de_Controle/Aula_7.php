<?php

  if(10 > 2){

    echo "Entrou no if <br>";

    if("teste" == "teste"){

      echo "Entrou no segundo if <br>";

    }
  }

  if(10 < 2){

    echo "Entrou no if <br>";

    if("teste" != "teste"){

      echo "Entrou no segundo if <br>";

    }else{
      echo "entrou no segundo else";
    }

  }else{

    echo "Entrou no else";

  }


  $escopo = 10;
  if(10 < 2){

    $escodo2 = 20;
    echo "Entrou no if <br>";

    if("teste" != "teste"){

      echo "Entrou no segundo if <br>";

      echo $escopo;
      echo " " . $escodo2;

    }else{
      echo "entrou no segundo else";
    }

  }else{

    echo "Entrou no else";
    
  }





?>