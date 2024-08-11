<?php
    if(isset($_GET["num_room"]) ) {
        $num = $_GET["num_room"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ventestest";

        //Create Connection
        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM commande WHERE num_room = $num";
        $connection->query($sql);
    }
    header("location: commandes.php");
    exit;
?>