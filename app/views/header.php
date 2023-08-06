<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Projeto site Registrador de PRs</title>


        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <!-- Css  -->
        <link rel="stylesheet" href="app/css/style.css">
        <!-- jQuery -->
        <script src="app/js/jquery.js"></script>
        <!-- script -->
        <script src="app/js/script.js"></script>
        <!-- Just Validate para JavaScript -->
        <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
        <script src="app/js/validacao.js" defer></script>
    </head>



    <body>
        <!-- Cabeçalho -->
        <header>
            <!-- Navegador -->
            <nav class="navbar navbar-expand-lg " style="height: 80px">
                <div class="container">

                    <!-- Menu Principal -->
                    <div class="navbar-header">
                        <!-- Logo -->
                        <a href="?i=home" alt="RPR - home" title="Home">
                            <img id="logo" src="app/imgs/logo.png">
                        </a>
                    </div>
                    
                    <!-- Smartphone -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?i=home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="?i=informacoes">Sobre</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="?i=progressao">Como progredir carga</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="?i=powerlifting">Powerlifting</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="?i=bodybuilding">Bodybuilding</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>