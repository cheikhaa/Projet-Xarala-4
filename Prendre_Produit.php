<?php
include('connexion.php');

$nom_produit = $_POST['nom_produit'];
$quantite = $_POST['quantite'];

// Vérifier si le produit est disponible en quantité suffisante
$sql = "SELECT quantite 
        FROM produits 
        WHERE nom_produit = '$nom_produit'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $available_quantity = $row['quantite'];

    if ($available_quantity >= $quantite) {
        // Mettre à jour la quantité disponible dans la table des produits
        $new_quantity = $available_quantity - $quantite;
        $update_sql = "UPDATE produits 
                       SET quantite = '$new_quantity' 
                       WHERE nom_produit = '$nom_produit'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Le produit a été pris du stock avec succès.";
        } else {
            echo "Erreur lors de la mise à jour du stock : " . $conn->error;
        }
    } else {
        echo "Quantité insuffisante en stock pour ce produit.";
    }
} else {
    echo "Le produit n'existe pas en stock.";
}

$conn->close();
?>
