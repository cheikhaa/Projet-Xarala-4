<?php
session_start();
include('../connexion.php');
include('../Login.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logins = $_POST['logins'];
    $mdp = $_POST['mdp'];

    $sql = "SELECT * FROM inscris 
            WHERE logins = '$logins' AND mdp = '$mdp'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['logins'] = $logins; // Enregistre le nom d'utilisateur dans la session
        header("Location: ../Accueil.php");
        exit();
    } else {
        $error_message = "Identifiants incorrects. Veuillez réessayer.";
    }
}


?>