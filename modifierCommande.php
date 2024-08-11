<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ventestest";

// Create Connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$nom = "";
$des = "";
$qte = "";
$pri = "";
$mon = "";

$errorMessage = "";
$successMessage = "";

// Handling form submission
if(isset($_POST["btn"])) {
    // Retrieve form data
    $id = $_POST['numcom']; // assuming id is passed from the form
    $nom = $_POST['nameeee'];
    $des = $_POST['design'];
    $qte = $_POST['quant'];
    $pri = $_POST['prix'];
    $mon = $_POST['mont'];

    // Update client information in the database
$sql = "UPDATE commande SET nom_cli='$nom', designation='$des', quantite_com='$qte', prix_com='$pri', montant_com='$mon' WHERE num_room=$id";

if ($connection->query($sql) === TRUE) {
    $successMessage = "Commande updated successfully";
} else {
    $errorMessage = "Error updating commande: " . $connection->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Commande</title>
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
            <label for="exampleFormControlInput1" class="form-label">Numero Commande</label>      
            <input type="int" class="form-control" name="numcom" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom du Client</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom du client" name="nameeee" value="<?php echo $nom; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Designation</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="designation" name="design" value="<?php echo $des; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantite</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="quantite du produit" name="quant" value="<?php echo $qte; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adresse du client" name="prix" value="<?php echo $pri; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Montant</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Adresse du client" name="mont" value="<?php echo $mon; ?>">
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
