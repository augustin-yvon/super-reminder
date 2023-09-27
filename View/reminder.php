<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>JavaScript - To Do List</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/reminder.css">

    <script defer src="../assets/js/reminder.js"></script>
    <!-- <script defer src="../assets/js/app.js"></script> -->
    <script defer src="../assets/js/main.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/reminder.css">
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
               <!-- 
                <li class="item">
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

    <?php include '../html-element/footer.php' ?>
</body>
</html>