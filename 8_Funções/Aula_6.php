<?php

  function velocidadeMaxima($vel){

    if(is_int($vel)){
      echo "O carro atinge a velocidade mazima de $vel km/h <br>";
    }else{
      echo "Por favor passe um numero inteiro";
    }

  }

  velocidadeMaxima(200);
  velocidadeMaxima(400);
  velocidadeMaxima(500);

  $velocidade = 125;

  velocidadeMaxima($velocidade);

  velocidadeMaxima(250, "teste");

  velocidadeMaxima("teste");

  function descreverAnimal($nome, $raca){
    echo "O $nome é da $raca";
  }

  descreverAnimal("Bob", "ViraLata");
  descreverAnimal("Shark", "PastorAlemão");
  descreverAnimal("Poodle", "Tita");

  
?>