<?php
  
  $nomes=[
    "Arley" => 12,
    "Joao" => 16,
    "Pedro" => 54,
    "Maria" => 34,
  ];

  asort($nomes);

?>

<h1>Raking;</h1>

<ol>
  <?php foreach($nomes as $pessoas => $pontuacao):?>
      <li><?= $pessoas ?> -> <?= $pontuacao?> pontos</li>
  <?php endforeach;?>
</ol>
