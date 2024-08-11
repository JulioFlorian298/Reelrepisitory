<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Commandes</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom du Client</th>
      <th scope="col">Désignation</th>
      <th scope="col">Quantité du Produit</th>
      <th scope="col">Prix Unitaire</th>
      <th scope="col">Montant</th>
      <th scope="col">Date de Commande</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ventestest";

          // Create connection
          $connection = new mysqli($servername, $username, $password, $database);

          // Check connection
          if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
          }

          // read all row from database table
          $sql = "SELECT * FROM commande";
          $result = $connection->query($sql);

          if (!$result) {
            die("Invalid query: " . $connection_error);
          }

          //read data of each row
          while($row = $result->fetch_assoc()) { ?>
            echo
            "<tr>
            <td><?=$row["nom_cli"]?></td>
            <td><?=$row["designation"]?></td>
            <td><?=$row["quantite_com"]?></td>
            <td><?=$row["prix_com"]?></td>
            <td><?=$row["montant_com"]?></td>
            <td><?=$row["date_com"]?></td>
            <td>
              <a href="/EssaiPHP/facture.php?<?=$row["num_room"]?>">Imprimer</a>
            </td>
          </tr>
          ";
          <?php }?>
  </tbody>
</table>

<script type="text/javascript">
//                                function imprimer(){
    document.querySelector('#btnprint').addEventListener('click', function(){
        var body = document.querySelector("body").innerHTML;
        var data = document.querySelector(".data").innerHTML;
        document.querySelector("body").innerHTML=data;
        window.print();
        document.querySelector('body').innerHTML=body;
        })
//                                }
</script>
</body>
</html>