<?php
  $host ="localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  $id = 11;

  $stmt= $conn->prepare("UPDATE itens set nome = ?, descricao =? WHERE id= ?");

  $nome="Sofá";
  $descricao ="Sofa semi novo, com madeira de demolição";

  $stmt->bind_param('ssi', $nome, $descricao, $id);

  $stmt->execute();

  if($stmt->error){
    echo"Erro: " . $stmt->error;
  }
?>