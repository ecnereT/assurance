<?php
require_once("../include/menu.inc.php");
 ?>


  <div class="posts">
    <?php
     if(isset($_SESSION['auth']))
     {?>
        <div class="motion post"><a href="../view/addClient.php">Ajouter Client</a></div>
        <div class="ux post"><a href="../view/addInsurance.php">Ajouter assurances</a></div>
    <?php
     }
   ?>
    <div class="web post"><a href="../view/showClients.php">Liste des clients</a></div>
    <div class="web post"><a href="../view/showInsurances.php">Liste assurances</a></div>
  </div>
 </div>
