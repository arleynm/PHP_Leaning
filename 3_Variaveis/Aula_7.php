<?php
  $teste = "asd";

  if(5>2){
    $teste ="dsa";

    echo "$teste if <br>";

  }

  echo "$teste global 2 <br>";

  function testandoGlobal(){
    global $teste;

    $teste =2;

    echo "$teste global função <br>";
  }

  testandoGlobal();

  echo "$teste global 3 <br>"


?>