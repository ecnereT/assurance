<?php include("../include/menu.inc.php");
require("../assets/helper.php");
?>
<div class="container">
  <h4>Liste des assurances: </h4>
  <table class="table">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Nom</th>
           <th>Prix à l'année</th>
           <th>Type</th>
           <?php
            if(isset($_SESSION['auth']))
            {?>
           <th>Actions</th>
           <?php
            }?>
       </tr>
   </thead>

   <tbody> <!-- Corps du tableau -->
      <?php
        $db = connect();
        if($db){
          $sql = "SELECT * FROM assurance";
          $result = mysqli_query($db,$sql);
          if($result)
          {
          while($row = mysqli_fetch_array($result))
          {
            $res = '<tr>';
            $res .= ('<td>'.$row['name'].'</td>');
            $res .= ('<td>'.$row['price'].'</td>');
            $res .= ('<td>');
            $res .= findTypeInsurance($row['idType']);
            $res.= ('</td>');
            if(isset($_SESSION['auth']))
            {
                $res .= ('<td><a class="btn-primary btn-sm" href="../view/updateInsurance.php?id='.$row['id'].'">Modifier </a></td>');
            }
            $res .= ('</tr>');
            echo $res;
          }
          }
          else
          {
            echo "Erreur result";
          }
        }
        else
        {
          echo "Erreur db";
        }

      ?>
   </tbody>
</table>
</div>
</body>
</html>
