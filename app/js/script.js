$(function() {

    function botaoExibirQuandoLogado(usuarioLogado, botao) {
        
        if (usuarioLogado) {
            botao.style.display = "block";
        }
    }

    function botoesExibirQuandoLogado(usuarioLogado, classBotoes) {
        var botoes = document.getElementsByClassName(classBotoes);
        
        for (var i = 0; i < botoes.length; i++) {
            var botao = botoes[i];
            botaoExibirQuandoLogado(usuarioLogado, botao);
        }
    }


    function botaoOcultarQuandoLogado(usuarioLogado, botao) {

        if (usuarioLogado) {
            botao.style.display = "none";
        }
    }

    function botoesOcultarQuandoLogado(usuarioLogado, classBotoes) {
        var botoes = document.getElementsByClassName(classBotoes);
        
        for (var i = 0; i < botoes.length; i++) {
            var botao = botoes[i];
            botaoOcultarQuandoLogado(usuarioLogado, botao);
        }
    }



    /* Lógica para receber os registros de PRs do usuário */
    let prs = [];

    const addPr = (ev) => {
        ev.preventDefault();    // impedir que o browser de submit


        let pr = {
            id: Date.now(),
            agachamento: {
                exerc: document.getElementById('exercAgachamento').value,
                rep: document.getElementById('repsAgachamento').value
            },
            supino: {
                exerc: document.getElementById('exercSupino').value,
                rep: document.getElementById('repsSupino').value
            },
            levantamento: {
                exerc: document.getElementById('exercLevantamento').value,
                rep: document.getElementById('repsLevantamento').value
            }
        };

        prs.push(pr);
        document.forms[0].reset();

        console.warn('added', { prs });
        let pre = document.querySelector('#msg pre');
        pre.textContent = '\n' + JSON.stringify(prs, '\t', 2);
    };


    
    // Acessar o valor do atributo 'data-valor' do elemento HTML para ver se o usuario esta logado
    var usuarioLogado = document.getElementById("usuario-logado").getAttribute("data-valor") === 'true';
    // Chama função assim que o documento estiver pronto
    botoesExibirQuandoLogado(usuarioLogado, "botaoExibirQuandoLogado");
    botoesOcultarQuandoLogado(usuarioLogado, "botaoOcultarQuandoLogado");


    // Chamar função quando clicar no botao
    document.getElementById('btn').addEventListener('click', addPr);

});