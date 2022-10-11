<?php
  $pessoas = [
    'Arley' => 21,
    'Joao' => 23,
    'Ana' => 34,
    'Pedro' => 43,
  ];

?>

<table>
    <tr>
    <th>Nome</th>
    <th>Idade</th>
    <?php foreach($pessoas as $nome => $idade):?>
      <tr>
        <td><?=$nome?></td>
        <td><?=$idade?></td>
      </tr>
    </tr>
    <?php endforeach?>
  </table>