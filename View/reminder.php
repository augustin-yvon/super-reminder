<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="../assets/js/main.js"></script>
        <script defer src="../assets/js/reminder.js"></script>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
        <link rel="stylesheet" href="../assets/css/font-awesome.css">
        <link rel="stylesheet" href="../assets/css/reminder.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/reminder.css">

        <title>JavaScript - To Do List</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <main class="container">
            <div class="header">
                <div class="clear">
                    <i class="fa fa-refresh"></i>
                </div>
                <div id="date"></div>
            </div>
            <div class="content">
                <ul id="list">
                    <!-- <li class="item">
                        <i class="fa fa-circle-thin co" job="complete" id="0"></i>
                        <p class="text">Drink Coffee</p>
                        <i class="fa fa-trash-o de" job="delete" id="0"></i>
                    </li> -->
                </ul>
            </div>
            <div class="add-to-do">
                <i class="fa fa-plus-circle"></i>
                <input type="text" id="input" placeholder="Add a to-do">
            </div>
        </main>

        <!-- <main class="main-container">
            <section class="container">
                <div class="head">
                    <h1>Tâches</h1>
                    <div id="date"></div>
                    <i class="clear fa fa-refresh"></i>
                </div>

                <div class="content">
                    <ul class="task-list">
                    </ul>
                </div>
    
                <div class="add-to-do">
                    <svg class="svg_add-to-do" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
                    <input type="text" class="input_add-to-do" name="input_add-to-do" placeholder="Ajouter une tâche">
                </div>
            </section>
        </main> -->

        <?php include '../html-element/footer.php' ?>
    </body>
</html>