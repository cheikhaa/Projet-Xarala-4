<?php
    include('connexion.php');   

    // Récupérer les données du formulaire
    $nom_produit = $_POST['nom_produit'];

    // Vérifier la quantité disponible pour le produit spécifié
    $sql = "SELECT quantite 
            FROM produits 
            WHERE nom_produit = '$nom_produit'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $available_quantity = $row['quantite'];
        echo "Quantité disponible pour le produit '$nom_produit' : $available_quantity";    
    } else {
        echo "Le produit n'existe pas en stock.";    
    }

    $conn->close();
?>
