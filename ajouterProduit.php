<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ventestest";

    // Create Connection
    $connection = new mysqli($servername, $username, $password, $database);

    if($connection){
      echo "connect";
    }

  //$ref = "";
  //$des = "";
  //$qte = "";
  //$pri = "";

$ref = $_POST["refprod"];
$des = $_POST["design"];
$qte =  $_POST["quant"];
$pri =  $_POST["priprod"]; 

if(isset($_POST["btn_ajout"])) {
  if($ref!="" && $des!="" && $qte!="" 
      && $pri!=""){

      // echo "Produit added successfully";d

      $sql = "INSERT INTO produits(referenceprod,designation,quantite,prix) 
              VALUES ('$ref','$des','$qte','$pri')";
      $result = mysqli_query($connection, $sql);

      if($result){
        echo "TAFIDITRA";
      }
      else{
        echo "Mis erreur";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Reference du Produit</label>
        <input type="int" class="form-control" id="exampleFormControlInput1" 
          placeholder="Reference du produit" name="refprod">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Designation</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="Désignation" name="design">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantite</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" 
          placeholder="Quantite du produit " name="quant">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prix</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" 
          placeholder="Prix du produit" name="priprod">
    </div>
    <input type="submit" class="btn btn-primary" name="btn_ajout">
</form>
  <!-- <form action="#" method="POST" enctype="multipart/form-data">
    <input type="submit" class="btn btn-primary" name="btn" value="Ajouter">
  </form> -->



</body>
</html>