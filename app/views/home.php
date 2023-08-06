<!-- Coloque esse elemento no lugar onde deseja usar a variável em JavaScript -->
<div id="usuario-logado" data-valor="<?php echo $usuario_logado ? 'true' : 'false'; ?>"></div>


<!-- Seção principal -->


<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6" style="padding-top: 40px">
                <h1 class="text-muted text-center text-md-start pt-5 mt-5">
                    Registre <span class="text-primary">PRs</span> do treino.
                </h1>

                <!-- Caso o usuário esteja logado -->
                <p class="lead text-muted text-center text-md-start mt-3">
                    Para poder progredir no treino, é preciso se manter firme com seu progresso, para isso, mantenha atualizado seus novos recordes pessoais e compare com os antigos!
                </p>

                <div class="mt-5">
                    <!-- Botões para usuários logados -->
                    <div class="botaoExibirQuandoLogado">
                        <a href="logout.php" class="btn btn-primary btn-lg" role="button">Desconectar</a>

                        <a href="?i=exercicios" class="btn btn-primary btn-lg" role="button">Registrar novos recordes</a>
                    </div>

                    <!-- Botões para usuários não logados -->
                    <div class="botaoOcultarQuandoLogado">
                        <button id="btn-login" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#login">
                            Entrar
                        </button>
                        
                        <button id="btn-registrar" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registrar">Registre agora</button>
                    </div>

                    <!-- Botão "Saiba Mais" -->
                    <a href="?i=informacoes" class="btn btn-outline-primary btn-lg" role="button" style="margin-top: 4px;">Saiba mais</a>
                </div>
            
            </div>

            <!-- Carrossel -->
            <div class="col-12 col-lg-6 p-5 carousel-container" style="margin-top: 50px;">


                <div id="meu_carrossel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="app/imgs/ray.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Ray Williams</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="app/imgs/jamal.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Jamal Browner</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="app/imgs/larry.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Larry Wheels</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="app/imgs/russ.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h5>Russel Orhii</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Controles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#meu_carrossel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#meu_carrossel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Seção secundária -->

<div id="exercicios">
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="app/imgs/agachamento.png" class="card-img-top" alt="...">
                    <div class="caption">
                        <h2><a href="?i=agachamento">Agachamento</a></h2>
                        <p>
                            Eleve seu desempenho no powerlifting com o poderoso agachamento. Como um dos exercícios fundamentais desse esporte, o agachamento é essencial para o desenvolvimento da força nas pernas, glúteos e core. Domine a técnica correta, enfrente o desafio com confiança e alcance novos patamares de excelência. Se você busca maximizar seu potencial e superar seus limites, o agachamento é a chave. Concentre-se na execução perfeita, fortaleça seus músculos e supere barreiras, tornando-se um verdadeiro campeão no powerlifting. Encare o agachamento de frente e conquiste grandeza em sua jornada de treinamento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="app/imgs/supino.png" class="card-img-top" alt="...">
                    <div class="caption">
                        <h2><a href="?i=supino">Supino</a></h2>
                        <p>
                            Maximize sua performance no powerlifting com o essencial exercício de força: o supino. Como o pilar central desse esporte, o supino é uma abordagem desafiadora para fortalecer o peitoral, ombros e tríceps. Se você busca superar limites e atingir novos patamares em sua jornada de treinamento, o supino é indispensável. Aperfeiçoe sua técnica, concentre-se na execução correta e alcance a grandeza nesse movimento fundamental. Torne-se um verdadeiro campeão do powerlifting e vença os desafios com confiança e maestria no supino.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="app/imgs/terra.png" class="card-img-top" alt="...">
                    <div class="caption">
                        <h2><a href="?i=terra">Levantamento Terra</a></h2>
                        <p>
                            Alcance o auge de sua força no powerlifting com o desafiador levantamento terra. Como um dos pilares fundamentais desse esporte, o levantamento terra é um movimento que trabalha intensamente os músculos das costas, glúteos, pernas e o núcleo. Domine a técnica correta, enfrente o peso com determinação e conquiste novos patamares de desempenho. Se você busca superar limites e desenvolver sua potência, o levantamento terra é o caminho certo. Aperfeiçoe sua forma, construa sua força e vença qualquer obstáculo, tornando-se um verdadeiro campeão no powerlifting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Area de login -->
<div id="login" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Botão de fechar -->
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                <!-- Espaço para inputs -->
                <div class="myform bg-dark">

                    <!-- Exibir a mensagem de erro somente se $is_invalid for verdadeiro -->

                    
                    <h1 class="text-center">Login</h1>
                    <form method="post" action="login.php" id="login" novalidate>
                        <div class="mb-3 mt-3">
                            <label for="email">Endereço de e-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <div>                                    
                            <button class="btn btn-light mt-3">Login</button>
                            <p>Não tem conta ainda? <a href="#" data-bs-toggle="modal" data-bs-target="#registrar">Registre-se</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Area de Registro -->
<div id="registrar" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Botão de fechar -->
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>

                <!-- Espaço para inputs -->
                <div class="myform bg-dark">
                    <h1 class="text-center">Registre-se</h1>
                    <form method="post" action="processar-registro.php" id="signup" novalidate>
                        <div class="mb-3 mt-3">
                            <label for="Nome">Nome de usuário</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                    
                        <div class="mb-3 mt-3">
                            <label for="email">Endereço de e-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password_confirmacao">Repita a senha</label>
                            <input type="password" class="form-control" name="senha_confirmacao">
                        </div>

                        <div>
                            <button class="btn btn-light mt-3">Registrar</button>
                            <p>Já tem uma conta? <a href="#" data-bs-toggle="modal" data-bs-target="#login">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
