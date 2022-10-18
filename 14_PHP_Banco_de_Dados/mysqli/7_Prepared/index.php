<?php
  
  $host ="localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);


  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao ) VALUES (?,?)");

  $stmt->bind_param("ss", $nome , $descricao);

  $stmt->execute();

?>