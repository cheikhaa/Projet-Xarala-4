<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .buttons {
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            background-color: gray;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="buttons">
        <h2>WELCOME</h2>
        <button class="button" onclick="window.location.href='./Inscription.php'">Inscription</button>
        <button class="button" onclick="window.location.href='./Login.php'">Connexion</button>
    </div>
</body>
</html>
