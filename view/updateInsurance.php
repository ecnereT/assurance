<?php include("../include/menu.inc.php");
require("../assets/helper.php");

$id = $_GET["id"];
$insurance = findInsurance($id);

if(isset($_SESSION['auth']))
{
?>
    <div class="container">
      <form action="../controller/updateInsuranceController.php" method="post">
      <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $insurance->getName(); ?>">
      </div>
      <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $insurance->getPrice(); ?>">
      </div>
      <div class="form-group">
        <label for="idType">Type d'assurance:</label>
        <?php echo InsuranceTypeSelect(); ?>
      </div>
      <input type="hidden" name="idInsurance" id="idInsurance" value="<?php echo $insurance->getId(); ?>">
      <button type="submit" class="btn btn-default">Mettre à jour</button>
    </form>
  </div>
<?php
}
else
{
    echo "<p style='color: red;'>Vous devez être connecté pour accéder à cette page</p>";
}
