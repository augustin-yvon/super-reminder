<?php
session_start();

require_once './Model/SqlRequest.php';

function validateRegister(string $login, string $firstname, string $lastname, string $password, string $confirm_password) {
    $request = new SqlRequest();
    
    $errors = array();
    // Vérifie si le login est déjà utilisé
    if ($request->validateLogin($login)) {
        $errors[] = "Ce login est déjà utilisé. Veuillez en choisir un autre.";
    }

    // Vérifie si le mot de passe respecte les critères
    $passwordPattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    if (!preg_match($passwordPattern, $password)) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.";
    }

    // Vérifie si les mots de passe correspondent
    if ($password !== $confirm_password) {
        $errors[] = "Les mots de passe ne correspondent pas.";
    }

    // Insére les données dans la base de données si aucune erreur n'est survenue
    if (empty($errors)) {
        if ($request->register($login, $firstname, $lastname, $password)) {
            return true;
        }
    }else {
        return $errors;
    }
}