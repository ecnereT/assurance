<?php include_once("../include/menu.inc.php");
require_once("../include/config.inc.php");
?>
<div class="container">
  <h4>Liste des clients: </h4>
  <table class="table">
   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Nom</th>
           <th>Age</th>
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
          $sql = "SELECT * FROM client";
          $result = mysqli_query($db,$sql);
          if($result)
          {
          while($row = mysqli_fetch_array($result))
          {
            $res = '<tr>';
            $res .= ('<td>'.$row['name'].'</td>');
            $res .= ('<td>'.$row['age'].'</td>');
            $res .= ('<td>');
            if(isset($_SESSION['auth']))
            {
                $res .= '<a class="btn-info btn-sm" href="../view/detailsClient.php?id='.$row['id'].'"> Details </a>';
                $res .= '<a class="btn-success btn-sm" href="../view/updateClient.php?id='.$row['id'].'">Modifier  </a>';
            }
            $res .= '</td>';
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
