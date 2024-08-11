<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJET</title>
    <link rel="stylesheet" href="./css/styles.css">
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


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.row {
  margin-left: 20%;
}

.column {
  float: center;
  width: 30.5%;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.row img {
  width: 100%;
  height: 250px;
  font-size: 25%;
  margin: 0 auto;
}

.about-section {
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 700px) {
  .column {
    width: 100%;
    display: block;
  }
}

   </style>
</head>
<body class='background'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clients.php"><i class="fas fa-user"></i>Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commandes.php"><i class="fas fa-cart-shopping"></i>Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produits.php"><i class="fas fa-user"></i>Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listes des commandes.php"><i class="fas fa-shopping-bag"></i>Listes des Commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./www.w3schools.com/browsers/browsers_chrome.html"><i><img src="./images/w3c.jpg" style="width:30px;"></i>SITEGRATUIT</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="authentification.php"><i class="fas fa-door-open"></i>Quitter</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" id="mySearch" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>Search</button>
      </form>
    </div>
  </div>
</nav>
        <div class="sidebar">
          <a class="active" href="index.php"><i class="fas fa-home"></i>Accueil</a>
          <a href="clients.php"><i class="fas fa-user"></i>Clients</a>
          <a href="commandes.php"><i class="fas fa-cart-shopping"></i>Commandes</a>
          <a href="produits.php"><i class="fas fa-user"></i>Produits</a>
          <a href="listes des commandes.php"><i class="fas fa-shopping-bag"></i>Listes des Commandes</a>
          <a href="./www.w3schools.com/browsers/browsers_chrome.html"><i><img src="./images/w3c.jpg" style="width:30px;">SITEGRATUIT</i></a>
          <a href="authentification.php"><i class="fas fa-door-open"></i>Quitter</a>
        </div>

        <div class="about-section">
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="./images/client.png">
      <div class="container">
        <p><button class="button"><a href="commandes.php"><i class="fas fa-cart-shopping"></i>Shop Now</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/client.png">
      <div class="container">
      <p><button class="button"><a href="commandes.php"><i class="fas fa-cart-shopping"></i>Shop Now</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/client.png">
      <div class="container">
      <p><button class="button"><a href="commandes.php"><i class="fas fa-cart-shopping"></i>Shop Now</a></button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>