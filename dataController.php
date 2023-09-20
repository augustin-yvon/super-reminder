<?php
require_once './Controller/register.php';
    $login = htmlspecialchars($_POST['login']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
validateRegister($login, $firstname, $lastname, $password, $confirm_password);
// echo 'eee';
// if(isset($_GET['register'])){
    // echo 'get';
    // var_dump($_POST);
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    //     if(validateRegister($login, $firstname, $lastname, $password, $confirm_password)) {
    //         echo validateRegister($login, $firstname, $lastname, $password, $confirm_password);
    //     }else{
    //         echo 'marche pa';
    //     };
    // }
// }
?>