<?php
// if (isset($_GET["numeroclient"])) {
    $numeroclient = $_GET["numeroclient"];

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
    $sql = "DELETE FROM clients WHERE numeroclient = $numeroclient";

    // Execute SQL statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    // Close Connection
    $connection->close();
// }

header("Location: clients.php");
exit;
?>