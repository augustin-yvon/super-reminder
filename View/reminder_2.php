<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="../assets/js/main.js"></script>
        <script defer src="../assets/js/reminder_2.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
        <link rel="stylesheet" href="../assets/css/font-awesome.css">
        <link rel="stylesheet" href="../assets/css/reminder_2.css">

        <title>JavaScript - To Do List</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <main class="main-container">
            <section class="container">
                <h1>Tâches</h1>

                <div class="content">
                    <ul class="task-list">
                    </ul>
                </div>
    
                <div class="add-to-do">
                    <svg class="svg_add-to-do" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    <input type="text" class="input_add-to-do" name="input_add-to-do" placeholder="Ajouter une tâche">
                </div>
            </section>
        </main>

        <?php include '../html-element/footer.php' ?>
    </body>
</html>