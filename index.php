<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/index.css">

        <script defer src="./assets/js/main.js"></script>

        <title>Super Reminder</title>
    </head>

    <body>
        <header>
            <nav class="topNav">
                <a href="./index.php" class="button">HOME</a>
                <a href="./View/reminder.php" class="button">REMINDER</a>
                <a href="./View/register.php" class="button">INSCRIPTION</a>
                <a href="./View/login.php" class="button">CONNEXION</a>

                <i class="fa fa-bars icon"></i>
            </nav>

            <nav class="mobile-menu">
                <a href="./index.php" class="button">HOME</a>
                <a href="./View/reminder.php">REMINDER</a>
                <a href="./View/register.php">INSCRIPTION</a>
                <a href="./View/login.php">CONNEXION</a>
            </nav>
        </header>

        <main class="main-container">
            <section class="container">
                <h1>Bienvenue sur le Super Reminder</h1>
    
                <div class="buttons" id="ff">
                    <a href="./View/register.php" class="button">Inscription</a>
                    
                    <a href="./View/reminder.php" class="button">Reminder</a>
    
                    <a href="./View/login.php" class="button">Connexion</a>
                </div>
            </section>
        </main>

        <?php include './html-element/footer.php' ?>
    </body>
</html>