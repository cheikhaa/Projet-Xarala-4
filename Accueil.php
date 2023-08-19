<?php
include('connexion.php'); 

// On prend tous les produits de la base de données
$sql = "SELECT * FROM produits";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="fr">
  <head>
    <title>Magasin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    
      table{
        border-collapse : collapse;
      }
      th,td {
        border : 1px solid black;
        padding : 10px;
      }

    </style>
  
  </head>
  <body>
    <div class="container">

        <h1>Ajouter un produit dans le magasin (CREATE)</h1>
        <form action="Ajout_Produit.php" method="post">
          <label for="nom_produit">Nom du produit :</label>
          <input type="text" name="nom_produit" required>
          <label for="quantite">Quantité :</label>
          <input type="number" name="quantite" required>
          <input type="submit" value="Ajouter au stock">
        </form>  

        <h1>Prendre un produit dans le stock dans le stock (DELETE)</h1>
        <form action="Prendre_Produit.php" method="post">
          <label for="nom_produit">Nom du produit :</label>
          <input type="text" name="nom_produit" required>
          <label for="quantite">Quantité :</label>
          <input type="number" name="quantite" required>
          <input type="submit" value="Prendre du stock">
        </form>

        <h1>Vérifier la quantité des produits disponibles en stock (READ)</h1>
        <form action="Verifier_Produit.php" method="post">
            <label for="nom_produit">Nom du produit :</label>
            <input type="text" name="nom_produit" required>
            <input type="submit" value="Vérifier">
        </form>
        <br> <br>
    </div>

    <div class="container">
      
      <h1>Liste des produits</h1>
      <table>
          <tr>
            <th>Nom du produit</th>
            <th>Quantité</th>
          </tr>
          <?php
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['nom_produit'] . "</td>";
                  echo "<td>" . $row['quantite'] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='3'>Aucun produit trouvé.</td></tr>";
          }
          ?>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>