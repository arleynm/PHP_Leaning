<?php
    function verificacao($numero){
      if($numero % 2==0){
      echo "$numero é par <br>";
    }else{
      echo "$numero é impar <br>";
    }
  }
  $valor = 16;
  $valor2 = 17;

  verificacao(12);
  verificacao(15);
  verificacao($valor);
  verificacao($valor2);

?>