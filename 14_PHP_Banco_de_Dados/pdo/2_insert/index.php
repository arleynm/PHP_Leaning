<?php

  $host = "localhost";
  $db= "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host, dbname=$db", $user, $pass);

  $stmt= $conn->prepare("INSERT FROM itens (nome, descricao) VALUES (:nome, :descricao)");

  $nome ="Suporte monitor";
  $descricao ="O suporte esta novo e na caixa ainda.";

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();
?>