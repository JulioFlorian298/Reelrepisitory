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

// $nom = "";
// $prenom = "";
// $age = "";
// $adresse = "";
// $sexe = "";

$nom = $_POST["namecli"];
$prenom = $_POST["lastnamecli"];
$age =  $_POST["agecli"];
$adresse =  $_POST["adressecli"];
$sexe =  $_POST["sexecli"]; 

if(isset($_POST["btn_ajout"])) {
  if($nom!="" && $prenom!="" && $age!="" 
      && $adresse!="" && $sexe!=""){

      // echo "Client added successfully";d

      $sql = "INSERT INTO clients(nomclient,prenomclient,age,adresse,sexe) 
              VALUES ('$nom','$prenom','$age','$adresse','$sexe')";
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
    <title>Ajouter Client</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom du Client</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="Nom du client" name="namecli">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prénom du Client</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="Prénom du client" name="lastnamecli">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Age</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" 
          placeholder="Age" name="agecli">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Adresse</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" 
          placeholder="Adresse du client" name="adressecli">
    </div>
    <div class="mb-3">
        <!-- <input type="radio" id="homme" name="sexecli"> -->
        <label for="homme">Genre</label> <br>
        <select name="sexecli" id="">
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
        </select>
        <!-- <input type="radio" id="femme" name="sexeee">
        <label for="femme">Une femme</label> <br> -->
    </div>
    <input type="submit" class="btn btn-primary" name="btn_ajout">
</form>
  <!-- <form action="#" method="POST" enctype="multipart/form-data">
    <input type="submit" class="btn btn-primary" name="btn" value="Ajouter">
  </form> -->
</body>
</html>