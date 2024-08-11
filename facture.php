<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <title>Facture de chaque client</title>
  <style>
    .fac{
      margin-left: 1090px;
    }
    hr{
      width: 150px;
    }
    .devoir{
      display:flex;
      gap: 670px;
    }
    .obli{
      display: flex;
      justify-content: space-between;
    }
    h3{
      font-style: oblique;
      font-size: 50px;
      text-align: center;
    }
    th{
      border: 1px solid black;
    }
    td{
      border: 1px solid black;
      
    }
    table{
      border-collapse: collapse;
      margin-left: 425px;
    }
    .input{
      display: grid;
      margin-left: 750px;
    }
  </style>
</head>
<body>
  <p>Adresse</p>
  <p>Ville, Etat Province, Code Postal</p>
  <p>Téléphone 0343701660/0337363467</p>
  <div class="fac">
    <p><b>Date: <label for="exp">19/04/24</label></b></p>
    <p><b>Numero Facture N°: <label for="exp">1</label></b></p>
    <p><b>Numero client: <label for="exp">6</label></b></p>
  </div>
  <div class="devoir">
    <p><u>Doit:</u></p>
    <p><u>Livré à:</u></p>
  </div>
  <div class="obli">
    <p>Nom: Lolo</p>
    <p>Entreprise: KM</p>
    <p>Adresse: Igaga</p>
    <p>Ville Etat province Code postale: Fianarantsoa Centre 301</p>
    <p>Téléphone: 0343701660</p>  
    <p >Nom: Lolo</p>
    <p>Entreprise: KM</p>
    <p>Adresse: Igaga</p>
    <p>Ville Etat province Code postale: Fianarantsoa Centre 301</p>
    <p>Téléphone: 0345555865</p>
  </div>
  <h3>Facture</h3>
  <table>
    <tr>
      <th>VENDEUR</th>
      <th>NUMERO à C</th>
      <th>DATE EXP</th>
      <th>TRANSIT</th>
      <th>POINT FOR</th>
      <th>MODALITES</th>
    </tr>
    <tr>
      <td>Rasoa</td>
      <td>6</td>
      <td>19/04/24</td>
      <td>PRODUITS</td>
      <td>VENTES</td>
      <td>100</td>
    </tr>
  </table>
  <br>
  <br>
  <table>
      <th>QUANTITE</th>
      <th>DESCRIPTION</th>
      <th>PRIX UNITAIRE</th>
      <th>MONTANT</th>
    </tr>
    <tr>
      <td>10</td>
      <td>Colliers</td>
      <td>5000</td>
      <td>50000</td>
    </tr>
  </table>
  <div class="input">
  <label for="TOTAL">TOTAL <label for="exp">2000000</label></label>
  <label for="TOTAL">MONTANT DEDUIT <label for="exp">1500000</label></label>
  <label for="TOTAL">AUTRES <label for="exp">3500000</label></label>
  <label for="TOTAL"><b>TOTAL</b> <label for="exp">7000000</label></label>
  </div>   
</body>
</html>