<?php
    include('connexion.php');
    // On récupére les données du formulaire
    $nom_produit = $_POST['nom_produit'];
    $quantite = $_POST['quantite'];

    // On insére le produit dans la table des produits
    $sql = "INSERT INTO produits (nom_produit, quantite) VALUES ('$nom_produit', '$quantite')";
    if ($conn->query($sql) === TRUE) {
        echo "Le produit a été ajouté avec succès !!!";
        
    } else {
        echo "Erreur lors de l'ajout du produit : " . $conn->error;
        
    }

    $conn->close();
    //header("Location: Accueil.php");
?>
