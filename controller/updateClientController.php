<?php
require("../model/client.php");

$id = isset($_POST["idClient"])? $_POST["idClient"] : "";
$name = isset($_POST["name"])? $_POST["name"] : "";
$age = isset($_POST["age"])? $_POST["age"]: "";

if($name != "" && $age != "" && $id != "")
{
  $client = new Client($name,$age);
  $client->setId($id);
  $client->updateInBDD();
}
else {
  echo "Veuillez remplir tous les champs </br>";
}


 ?>
