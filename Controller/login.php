<?php
require_once './Model/SqlRequest.php';
require_once './Model/User.php';

function connect($login, $password) {
    $request = new SqlRequest();
    
    if ($request->checkInfo($login, $password)) {
        // Crée l'objet utilisateur
        $user = new User($login, $password);
    
        $id = $request->getId($login);
    
        // Ajoute l'id à l'objet utilisateur
        if ($id !== false) {
            $user->setId($id)->logIn();
        }
    
        $_SESSION["user"] = $user;

        return true;
    } else {
        $error = "Login ou mot de passe incorrect.";
        return $error;
    }
}
