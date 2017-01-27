<?php
require_once ('../model/Client.php');
$name = isset($_POST["name"])? $_POST["name"] : "";
$age = isset($_POST["age"])? $_POST["age"]: "";

if($name != "" && $age != "")
{
  $client = new Client($name,$age);
  $client->addInBDD();
}
else 
{
  echo "Veuillez remplir tous les champs </br>";
}
?>
