<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM usuarios
                        WHERE email = '%s'",
                        $mysqli -> real_escape_string($_POST["email"]));


    $result = $mysqli -> query($sql);

    $usuario = $result -> fetch_assoc();

    if ($usuario) {
        if(password_verify($_POST["senha"], $usuario["senha_hash"])){
            
            session_start();

            $_SESSION["user_id"] = $usuario["id"];
            $_SESSION["nome"] = $usuario["nome"];
            $_SESSION['usuario_logado'] = true;

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
    $_SESSION['message'] = 'Login falhou';
   
    header("Location: index.php");
}
?>