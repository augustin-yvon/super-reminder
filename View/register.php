<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="../assets/js/register.js"></script>
        <script defer src="../assets/js/main.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/register.css">

        <title>Gestionnaire de fichier</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <section class="main-container">
            <div class="container">
                <h1>Inscription</h1>
                
                <form id="register-form" method="POST" action="">

                    <input id="login" type="text" name="login" placeholder="Login" required>

                    <input id="firstname" type="text" name="firstname" placeholder="Firstname" required>

                    <input id="lastname" type="text" name="lastname" placeholder="Lastname" required>

                    <input id="password" type="password" name="password" placeholder="Password" required>

                    <input id="confirm_password" type="password"name="confirm_password" placeholder="Confirm Password" required>

                    <div id="error-container"></div>

                    <input type="submit" name="submit" value="Sign up">

                    <p class="refer">Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
                </form>
            </div>
        </section>

        <?php include '../html-element/footer.php' ?>
    </body>
</html>