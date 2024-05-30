<?php
include_once 'DatabaseConnection.php';

        if (empty($_POST["username"]) || empty($_POST["password"]))
        {
            $_SESSION["error"] = "Uživatelské jméno nebo heslo je prázdné";
            header('Location: /register');
            exit();
        }
    
        if(insertUser($_POST["username"], $_POST["password"])){
            echo "Jste úspěšně zaregistrováni!";
            header('Location: /witcherinie');
        }else{
            $_SESSION["error"] = "Stala se nějaká chyba!";
            header('Location:/register');
        }

        /**
        * @param string $username
        * @param string $password
        * @return bool
        */

function insertUser(string $username, string $password): bool
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $connection = DatabaseConnection::getConnection();
    $statement = $connection->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
    $statement->bindParam(":username", $username);
    $statement->bindParam(":password", $hashedPassword);
    return $statement->execute();
}