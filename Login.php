<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <style>
        body {
            position : absolute;
            background-color: #eeeeee;
        }  
        form {
            text-align : center;
            width: 500px;
            height: 700px;
            position: absolute;
            margin-left: 500px; 
            margin-top: 150px;
        }
        fieldset {
            background-color: #eeeeee;
        }
        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }
        input {
            margin: 10px;
        }
        input[type=text]:focus {
            border: 3px solid #555;
        }

        input[type=submit] {
            background-color: gray;
            border: none;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>    
</head>
<body>
    <form action="./Controller/Login_controller.php" method="post">
        <fieldset>
            <legend> CONNEXION </legend>
            <label for="logins">Nom d'utilisateur :</label>
            <input type="text" name="logins" required>
            <br>
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" required>
            <br>
            <input type="submit" value="Se connecter">
        </fieldset>
    </form>
    <?php if(isset($error_message)) echo "<p>$error_message</p>"; ?>
</body>
</html>
