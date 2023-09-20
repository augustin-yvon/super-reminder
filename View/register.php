<?php
session_start();

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    var_dump($_SESSION['user']);
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="../assets/js/register.js"></script>

        <title>Gestionnaire de fichier</title>
    </head>

    <body>

        <section class="main-container">

            <div class="container">
                <form id="register-form" method="POST" action="">

                    <input id="login" type="text" name="login" placeholder="Login" required>

                    <input id="firstname" type="text" name="firstname" placeholder="Firstname" required>

                    <input id="lastname" type="text" name="lastname" placeholder="Lastname" required>

                    <input id="password" type="password" name="password" placeholder="Password" required>

                    <input id="confirm_password" type="password"name="confirm_password" placeholder="Confirm Password" required>

                    <input type="submit" value="Sign up">

                    <?php if (!empty($errors)) : ?>
                        <div class="error">
                            <?php foreach ($errors as $error) : ?>
                                <p><?php echo $error; ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <p>Déjà inscrit ? <a href="login.php">Connectez-vous</a></p>
                    
                </form>
            </div>
        </section>
    </body>
</html>