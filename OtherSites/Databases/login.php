<?php
include_once 'DatabaseConnection.php';

        if (empty($_POST["username"]) || empty($_POST["password"])){
            $_SESSION["error"] = "Username or Password is empty";
            header('Location: /othersites/loginf');
        }
        Overeni($_POST["username"],$_POST["password"] );

/**
 * @param string $username
 * @param string $password
 * @return void
 */
function Overeni(string $username, string $password): void
{
    $connection = DatabaseConnection::getConnection();
    $statement = $connection->prepare("SELECT id, username, password FROM user WHERE username = :username LIMIT 1");
    $statement->execute([":username" => $username]);

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if ($result && password_verify($password, $result["password"])) {
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_name"] = $result["username"];
        $_SESSION["isLoggedIn"] = true;
        header("Location: /othersites/onas"); 
        die();
    } else {
        $_SESSION["error"] = "Neplatné přihlášení.";
        header("Location: /login");
    }

}
