<?php

/*
Site: RPR (Registrador de Personal Record)
Autor: Ivon Luiz C M Garcia
Data: 05/08/2023
*/

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
            
    case 'registros':
        include 'app/views/registros.php';
        break;
        
    default:
        include 'app/views/home.php';
        break;
}

/* Carrega o rodapé */
include 'app/views/footer.php';