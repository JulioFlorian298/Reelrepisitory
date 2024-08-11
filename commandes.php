<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Commandes</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <style>
    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: wheat;
  color: black;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

.table {
    width: 80%;
    margin-left: 200px;   
}
    </style>
</head>
<body>
<body class='background'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clients.php"><i class="fas fa-user"></i>Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commandes.php"><i class="fas fa-cart-shopping"></i>Commande</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produits.php"><i class="fa-solid fa-camera"></i>Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listes des commandes.php"><i class="fas fa-user"></i>Listes des Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajouterCommande.php"><i class="fas fa-bag-shopping"></i>Ajouter une Commande</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./www.w3schools.com/browsers/browsers_chrome.html"><i><img src="./images/w3c.jpg" style="width:30px;"></i>SITEGRATUIT</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="authentification.php"><i class="fas fa-door-open"></i>Quitter</a>
      </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" id="mysearch" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>Search</button>
      </form>
    </div>
  </div>
</nav>
        <div class="sidebar">
          <a class="active" href="index.php"><i class="fas fa-home"></i>Accueil</a>
          <a href="clients.php"><i class="fas fa-user"></i>Client</a>
          <a href="commandes.php"><i class="fas fa-cart-shopping"></i>Commande</a>
          <a href="produits.php"><i class="fa-solid fa-camera"></i>Produit</a>
          <a href="listes des commandes.php"><i class="fas fa-bag-shopping"></i>Listes des Commandes</a>
          <p><a href="./www.w3schools.com/browsers/browsers_chrome.html"><i><img src="./images/w3c.jpg" style="width:30px;">SITEGRATUIT</i></a></p>
          <a href="authentification.php"><i class="fas fa-door-open"></i>Quitter</a>
          
        </div>

        <div class="about-section">
</div>

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
                <a href='modifierCommande.php'><div class='btn btn-info'>Modifier</div></a>
                <a href='supprimerCommande.php?num_room=<?=$row["num_room"]?>'>
                  <div class='btn btn-danger'>Supprimer</div></a>
            </td>
          </tr>
          ";
          <?php }

        ?>
  </tbody>
</table>

</body>
</html>