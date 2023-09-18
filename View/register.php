<?php
require_once '../Model/User.php';
require_once '../html-element/header.php';
require_once '../html-element/footer.php';
require_once '../html-element/logState.php';

session_start();

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}
unset($_SESSION['errors']);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="../assets/img/gestionnaire-fichier.png" />
        <link rel="stylesheet" href="../assets/css/register.css">

        <script src="../assets/js/main.js"></script>

        <title>Gestionnaire de fichier</title>
    </head>

    <body>
        <?php echo generateHeader(); ?>

        <section class="main-container">

            <?php echo generateLogState(); ?>

            <div class="container">
                <form id="register-form" method="post" action="">
                    <div class="input-box">
                        <img src="../assets/img/login.png" alt="login icon" title="login">
                        <input id="login" type="text" name="login" placeholder="Login" required>
                    </div>

                    <div class="input-box">
                        <img src="../assets/img/login.png" alt="firstname icon" title="firstname">
                        <input id="firstname" type="text" name="firstname" placeholder="Firstname" required>
                    </div>

                    <div class="input-box">
                        <img src="../assets/img/login.png" alt="lastname icon" title="lastname">
                        <input id="lastname" type="text" name="lastname" placeholder="Lastname" required>
                    </div>

                    <div class="input-box">
                        <img src="../assets/img/password.png" alt="password icon" title="password">
                        <input id="password" type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="input-box">
                        <img src="../assets/img/password.png" alt="password icon" title="confirm password">
                        <input id="confirm_password" type="password"name="confirm_password" placeholder="Confirm Password" required>
                    </div>
                    
                    <?php if (!empty($errors)) : ?>
                        <div class="error">
                            <?php foreach ($errors as $error) : ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <input type="submit" value="Sign up">


                    <p>Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
                </form>
            </div>
        </section>

        <?php echo generateFooter(); ?>
    </body>
</html>