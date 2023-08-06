<?php

/*
Site: RPR (Registrador de Personal Record)
Autor: Ivon Luiz C M Garcia
Data: 05/08/2023
*/

session_start();

// Verifique se o usuário está logado
$usuario_logado = isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true;

// Exiba a mensagem de boas-vindas se o usuário estiver logado
if ($usuario_logado) {
    $nome_usuario = $_SESSION['nome'];
    echo "<p>Olá, $nome_usuario! Bem-vindo de volta ao nosso site.</p>";
}


$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
}

/* Header de todas a páginas */
include 'app/views/header.php';

/* Carrega página escolhida pelo usuário */
switch($pagina){
    case 'home':
        include 'app/views/home.php';
        break;

    case 'informacoes':
        include 'app/views/informacoes.php';
        break;

    case 'progressao':
        include 'app/views/progressao.php';
        break;
     
    case 'powerlifting':
        include 'app/views/powerlifting.php';
        break;

    case 'bodybuilding':
        include 'app/views/bodybuilding.php';
        break;
    
    case 'agachamento':
        include 'app/views/agachamento.php';
        break;
        
    case 'supino':
        include 'app/views/supino.php';
        break;

    case 'terra':
        include 'app/views/terra.php';
        break;
            
    case 'exercicios':
        include 'app/views/exercicios.php';
        break;

/*     case 'registrar':
        include 'app/views/registrar.php';
        break; */
        
    default:
        include 'app/views/home.php';
        break;
}

/* Carrega o rodapé */
include 'app/views/footer.php';
?>