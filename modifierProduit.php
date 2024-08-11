<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ventestest";

// Create Connection
$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$des = "";
$qte = "";
$pri = "";

$errorMessage = "";
$successMessage = "";

// Handling form submission
if(isset($_POST["btn"])) {
    // Retrieve form data
    $id = $_POST['numeroproduit']; // assuming id is passed from the form
    $des = $_POST['design'];
    $qte = $_POST['quant'];
    $pri = $_POST['prixprod'];

    // Update client information in the database
$sql = "UPDATE produits SET designation='$des', quantite='$qte', prix='$pri' WHERE referenceprod=$id";

if ($connection->query($sql) === TRUE) {
    $successMessage = "Produit modifié avec succès";
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
    <title>Modifier Produit</title>
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
            <label for="exampleFormControlInput1" class="form-label">Reference du produit</label>      
            <input type="int" class="form-control" placeholder="Reference du produit" name="numeroproduit" value="<?php echo $id; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Designation</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Désignation" name="design" value="<?php echo $des; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantite</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantité du produit" name="quant" value="<?php echo $qte; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prix</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Prix du produit" name="prixprod" value="<?php echo $pri; ?>">
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
