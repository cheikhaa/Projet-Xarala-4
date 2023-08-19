<!doctype html>
<html lang="fr">
  <head>
    <title>Inscription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
            /* left: 50%;
            top: 50%; */
            margin-left: 500px; /* -largeur/2 */
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
    <div class="form">
        <form action="./Controller/inscription_controller.php" method="post">
            <fieldset>
                <legend> INSCRIPTION </legend>
                <label for="nom">Votre Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Votre Nom..." required> <br>
                <label for="prenom">Votre Prenom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre Prenom..." required><br>
                <label for="logins">Entrer un login :</label>
                <input type="text" id="logins" name="logins" placeholder="Exemple: cheikh@gmail.com" required><br>
                <label for="mdp">Entrer un mot de passe :</label>
                <input type="password" name="mdp" id="mdp" required><br>
                <label for="mdp2">Repeter le mot de passe :</label>
                <input type="password" name="mdp2" id="mdp2" required><br>
                <input type="submit" value="S'inscrire" name="ok">
            </fieldset>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
