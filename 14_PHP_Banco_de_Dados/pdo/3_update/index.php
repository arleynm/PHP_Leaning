<?php

  $host = "localhost";
  $db= "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host, dbname=$db", $user, $pass);

  $id = 5;
  $nome ="Teclado Microsoft";
  $descricao ="Este teclado esta novo e na caixa ainda.";

  $stmt= $conn->prepare("UPDATE itens SET nome = :nome, descricao=:descricao, WHERE id=:id");

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);
  $stmt->bindParam(":id", $id);

  $stmt->execute();
?>