<?php
  require("../include/menu.inc.php");

if(isset($_SESSION['auth']))
{
?>
    <div class="container">
      <form action="../controller/addClientController.php" method="post">
      <div class="form-group">
        <label for="name">Nom du client:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" name="age">
      </div>
      <button type="submit" class="btn btn-default">Ajouter</button>
    </form>
  </div>

<?php
}
else
{
    echo "<p style='color: red;'>Vous devez être connecté pour accéder à cette page</p>";
}