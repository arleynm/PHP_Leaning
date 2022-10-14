<?php
  if(count($_POST)> 0){
    $validacos = [];

    if($_POST['name'] === ""){
      $validacoes[] = "Por favor , preeencha o nome do usuario";
    }

    if(!isset($_POST['email'])){
      $validacoes[] = "Por favor , preeencha o e-mail do usuário";
    }

    if($_POST['senha'] != $_POST['confirmacao']){
      $validacoes[] = "As senhas devem ser iguais";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=form, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if(count ($validacoes)):?>
    <ul>
      <?php foreach($validacoes as $validacao): ?>
        <li> <?= $validacao?></li>
        <?php endforeach?>
    </ul>
  <?php endif;?>
  <form action="aula_8.php" method="POST">
    <div>
      <input type="text" name="nome" placeholder="Digite o seu nome">
    </div>

    <div>
      <input type="text" name="email" placeholder="Digite o seu e-mail">
    </div>

    <div>
      <input type="password" name="senha" placeholder="Digite a sua senha">
    </div>

    <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
    </div>

    <div>
      <input type="submit" value="Enviar">
    </div>

  </form>
</body>
</html>