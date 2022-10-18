<?php
  include_once("db.php");
  include_once("dao/CarDao.php");

  $carDao = new CarDao($conn);

  $brand= $_POST["brand"];
  $km= $_POST["km"];
  $color= $_POST["color"];

  $newCar = new Car();

  $newCar->setBrand($brand);
  $newCar->setKm($km);
  $newCar->setColor($brand);

  $carDao->create($newCar);

  header("Location index.php")

?>