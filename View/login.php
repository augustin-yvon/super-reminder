<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="../assets/js/login.js"></script>

        <title>Gestionnaire de fichier</title>
    </head>

    <body>

        <section class="main-container">

            <div class="container">
                <form id="login-form" method="POST" action="">

                    <input id="login" type="text" name="login" placeholder="Login" required>

                    <input id="password" type="password" name="password" placeholder="Password" required>

                    <div id="error-container"></div>

                    <input type="submit" name="submit" value="Log In">

                    <p>Pas encore inscrit ? <a href="./register.php">Inscrivez-vous</a></p>
                </form>
            </div>
        </section>
    </body>
</html>