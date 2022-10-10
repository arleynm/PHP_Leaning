<?php
  $velocidade = 80;
  
  if($velocidade < 40 ){
    echo "Esta na velocidade permitida"; 
  }else if($velocidade == 40){
    echo "Esta no limite da velocidade";
  }else{
    echo "Esta com a velocidade acima do permitido";
  }


?>