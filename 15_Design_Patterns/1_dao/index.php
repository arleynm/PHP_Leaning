<?php
  include_once("db.php");
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
  <div>
    <label for="brand">Marca do carro:</label>
    <input type="text" name="brand" placeholder="Insira a marcar">
  </div>
  <div>
    <label for="km">Kilometragem:</label>
    <input type="text" name="km" placeholder="Insira a kilometragem">
  </div>
  <div>
    <label for="color">Cor do carro:</label>
    <input type="text" name="color" placeholder="Insira a cor">
  </div>
  <input type="submit" value="salvar">
</form>
<ul>
  <?php foreach ($car as $car):?>
    <li><?= $car->getBrand()?> - <?= $car->getKm()?> - <?= $car->getColor()?></li>
  <?php endforeach;?>
</ul>