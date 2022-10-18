<?php


  $host ="localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);


  $table = "itens";
  $nome = "xicara";
  $descricao = "É uma xicara usada de cor rosa";

  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  $conn->close();

  $itens= $result->fetch_assoc();

  $itens= $result->fetch_all();

  print_r($itens);

?>  
