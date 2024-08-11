<?php
// if (isset($_GET["numeroclient"])) {
    $referenceprod = $_GET["referenceprod"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ventestest";

    // Create Connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check Connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare SQL statement
    $sql = "DELETE FROM produits WHERE referenceprod = $referenceprod";

    // Execute SQL statement
    if ($connection->query($sql) === TRUE) {
        echo "Produit supprimé avec succes";
    } else {
        echo "Erreur de suppression de produit: " . $connection->error;
    }

    // Close Connection
    $connection->close();
// }

header("Location: produits.php");
exit;
?>