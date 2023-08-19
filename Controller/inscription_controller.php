<?php 

include('../connexion.php');
include('../Inscription.php');

 if(isset($_POST["ok"])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $logins = $_POST['logins'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
 
    // verification du mot de passe
    if ($_POST['mdp2'] != $_POST['mdp']) {
        echo "Les 2 mot de passe ne sont pas identiques !!!";
    }

     // Vérifier si le login de l'utilisateur existe déjà
    $verif_login = "SELECT * FROM inscris WHERE logins = '$logins'";
    $resultat = $conn->query($verif_login);
    if ($resultat->num_rows > 0) {
        echo "Ce Login existe déjà. Veuillez changer !!!";
    } else {
        $sql = "INSERT INTO inscris (nom, prenom, logins, mdp, mdp2) VALUES ('$nom', '$prenom', '$logins', '$mdp', '$mdp2')";
        if ($conn->query($sql) === TRUE) {
            echo "Inscris avec succés !!!";
            header("Location: ../Login.php");
            exit();
        } else {
                echo "Erreur lors de l'inscription : " . $conn->error;
        }
        
        $conn->close();
    }
}

?>