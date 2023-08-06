<?php

/* Verificador de inputs */
if (empty($_POST["nome"])) {
    die("É preciso colocar o nome.");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Coloque um e-mail válido.");
}

if (strlen($_POST["senha"]) < 8) {
    die("Senha tem que ser pelo menos 8 caracteres.");
}

if ( !preg_match("/[a-z]/i", $_POST["senha"])) {
    die("Senha precisa ter pelo menos uma letra.");
}

if ( !preg_match("/[0-9]/i", $_POST["senha"])) {
    die("Senha precisa ter pelo menos um número.");
}

if ($_POST["senha"] !== $_POST["senha_confirmacao"]) {
    die("Senhas precisam ser iguais.");
}


/* Criar hash */
$senha_hash = password_hash($_POST["senha"], PASSWORD_DEFAULT);


/* Base de dados */
$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO usuarios (nome, email, senha_hash)
        Values (?, ?, ?)";

$stmt = $mysqli -> stmt_init();

/* Qualquer erro de sintax no SQL será pego
   Se o methodo prepare retornar falso, tem algum problema com o SQL  */

if (!$stmt -> prepare($sql)){
    die("SQL error: " . $mysqli->error);
}

$stmt -> bind_param("sss",
                    $_POST["nome"],
                    $_POST['email'],
                    $senha_hash);

/* Executar a inserção */
try {
    if ($stmt->execute()) {
        header("Location: index.php?i=exercicios");
        exit; // É importante sair do script após o redirecionamento para evitar que o código continue sendo executado.

    }
} catch (Exception $ex) {
    if ($stmt->errno == 1062) {
        die("Erro: E-mail já cadastrado.");
    } else {
        die("Erro ao registrar o usuário: " . $stmt->errno);
    }
}

?>