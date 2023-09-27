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
        <script defer src="../assets/js/main.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/login.css">

        <title>Gestionnaire de fichier</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <section class="main-container">
            <div class="container">
                <h1>Connexion</h1>

                <form id="login-form" method="POST" action="">

                    <input id="login" type="text" name="login" placeholder="Login" required>

                    <input id="password" type="password" name="password" placeholder="Password" required>

                    <div id="error-container"></div>

                    <input type="submit" name="submit" value="Log In">

                    <p>Pas encore inscrit ? <a href="./register.php">Inscrivez-vous</a></p>
                </form>
            </div>
        </section>

        <?php include '../html-element/footer.php' ?>
    </body>
</html>