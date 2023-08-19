<?php
session_start();

if (!isset($_SESSION['logins'])) {
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accés Limité</title>
</head>
<body>
    <h1>Bienvenue, <?php echo $_SESSION['logins']; ?>!</h1>
    <p>Si vous etes sur cette page c'est que vous etes un utilisateur vérifié !!! </p>
    <p><a href="deconnexion.php">Déconnexion</a></p>
</body>
</html>
