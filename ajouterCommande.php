<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ventestest";

    // Create Connection
    $connection = new mysqli($servername, $username, $password, $database);

    if($connection){
      echo "connect";
    }else{
      echo "No Connect";
    }

// $nom = "";
// $prenom = "";
// $age = "";
// $adresse = "";
// $sexe = "";


if(isset($_POST["btnajout"])) {
  if($_POST["nomclient"]!="" && $_POST["designation"]!="" 
      && $_POST["quantite"]!="" && $_POST["prix"]!=""){  

    // echo "AO";
    $nom_cli = $_POST["nomclient"];
    $design_com = $_POST["designation"];
    $qte_com =  $_POST["quantite"];
    $prix_com =  $_POST["prix"];
    $montant = $prix_com*$qte_com;

      // echo "Commande added successfully";


      $sql = "INSERT INTO commande (nom_cli,designation,quantite_com,prix_com,montant_com) 
              VALUES ('$nom_cli','$design_com','$qte_com','$prix_com','$montant')";
      $result = mysqli_query($connection, $sql);

      if($result){
        echo "Enregistré";
      }
      else{
        die(mysqli_error($connection));
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter commande</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom du Client</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="Nom du client" name="nomclient">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Designation</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="designation du produit" name="designation">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantite</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" 
          placeholder="quantité du produit" name="quantite">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prix</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" 
          placeholder="Prix du produit" name="prix">
    </div>
    <input type="submit" class="btn btn-primary" name="btnajout">
</form>
  <!-- <form action="#" method="POST" enctype="multipart/form-data">
    <input type="submit" class="btn btn-primary" name="btn" value="Ajouter">
  </form> -->
</body>
</html>