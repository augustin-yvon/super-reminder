<?php
require_once './Controller/register.php';
require_once './Controller/login.php';

if (isset($_GET['register'])) {
    $login = htmlspecialchars($_POST['login']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    $register = validateRegister($login, $firstname, $lastname, $password, $confirm_password);
    if ($register === true) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("errors" => $register));
    }
}

if (isset($_GET['login'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $login = connect($login, $password);
    if ($login === true) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("errors" => $login));
    }
}
?>