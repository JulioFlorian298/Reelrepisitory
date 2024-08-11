<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ventestest";

// Create Connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$nom = "";
$prenom = "";
$age = "";
$adresse = "";
$sexe = "";

$errorMessage = "";
$successMessage = "";

// Handling form submission
if(isset($_POST["btn"])) {
    // Retrieve form data
    $id = $_POST['numeroclient']; // assuming id is passed from the form
    $nom = $_POST['nameeee'];
    $prenom = $_POST['lasteee'];
    $age = $_POST['ageee'];
    $adresse = $_POST['adresseee'];
    $sexe = $_POST['sexeee'];

    // Update client information in the database
$sql = "UPDATE clients SET nomclient='$nom', prenomclient='$prenom', age='$age', adresse='$adresse', sexe='$sexe' WHERE numeroclient=$id";

if ($connection->query($sql) === TRUE) {
    $successMessage = "Client updated successfully";
} else {
    $errorMessage = "Error updating client: " . $connection->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Client</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>
<body>
    <?php
    if (!empty($errorMessage)) {
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";  
    }
    ?>
    
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numero du client</label>      
            <input type="int" class="form-control" name="numeroclient" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom du Client</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom du client" name="nameeee" value="<?php echo $nom; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prénom du Client</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom du client" name="lasteee" value="<?php echo $prenom; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Age" name="ageee" value="<?php echo $age; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adresse du client" name="adresseee" value="<?php echo $adresse; ?>">
        </div>
        <div class="mb-3">
            <input type="radio" id="homme" name="sexeee" value="homme" <?php if($sexe == "homme") echo "checked"; ?>>
            <label for="homme">Un homme</label> <br>
            <input type="radio" id="femme" name="sexeee" value="femme" <?php if($sexe == "femme") echo "checked"; ?>>
            <label for="femme">Une femme</label> <br>
        </div>
        <input type="submit" class="btn btn-primary" name="btn" value="Modifier">
    </form>

    <?php
    if (!empty($successMessage)) {
        echo "
        <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>
        </div>";
    } 
    ?>
</body>
</html>
