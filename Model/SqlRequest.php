<?php
require_once './Model/Database.php';

// session_start();

/**
 * Étend la classe Database et gère les requêtes SQL pour la gestion des utilisateurs dans la base de données.
 */

class SqlRequest extends Database {
    /**
     * Enregistre un nouvel utilisateur dans la base de données.
     *
     * @param string $login Le nom d'utilisateur
     * @param string $firstname Le prénom
     * @param string $lastname Le nom de famille
     * @param string $password Le mot de passe
     * @return bool True si l'enregistrement réussit, sinon false.
     */
    public function register(string $login, string $firstname, string $lastname, string $password) : bool {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $registerQuery = "INSERT INTO user (login, firstname, lastname, password) VALUES (:login, :firstname, :lastname, :password)";

        $stmt = $this->pdo->prepare($registerQuery);

        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedPassword, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Vérifie si un nom d'utilisateur existe déjà dans la base de données.
     *
     * @param string $login Le nom d'utilisateur à vérifier.
     * @return bool True si le nom d'utilisateur existe déjà, sinon false.
     */
    public function validateLogin(string $login) : bool {
        $checkLoginQuery = "SELECT id FROM user WHERE login = :login";
        $stmt = $this->pdo->prepare($checkLoginQuery);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Vérifie si un nom d'utilisateur et un mot de passe correspondent dans la base de données.
     *
     * @param string $login Le nom d'utilisateur à vérifier.
     * @param string $password Le mot de passe à vérifier.
     * @return bool True si les identifiants correspondent, sinon false.
     */
    public function checkInfo(string $login, string $password) : bool {
        $checkPasswdQuery = "SELECT password FROM user WHERE login = :login";

        $stmt = $this->pdo->prepare($checkPasswdQuery);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $hashedPassword = $result['password'];
            return password_verify($password, $hashedPassword);
        } else {
            return false;
        }
    }

    /**
     * Obtient l'identifiant d'un utilisateur par son login.
     *
     * @param string $login Le nom d'utilisateur
     * @return int|false L'identifiant de l'utilisateur s'il existe, sinon false.
     */
    public function getId(string $login) : int|false {
        $selectIdQuery = "SELECT `id` FROM `user` WHERE `login` = :login";

        $stmt = $this->pdo->prepare($selectIdQuery);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchColumn();

        return $result;
    }
}