<?php
  class Pessoa{
    public $nome = "Arley";
    public $idade = 21;

    function andar($m){
      echo "Ele esta andando a $$m";
    }
  }

  $pessoas = new Pessoa;

  $pessoas -> $nome;
  $pessoas -> $idade;

  echo "O nome dele é $pessoas->$nome e tem $pessoas->$idade anos";

  $matheus-> andar(30);

?>