<div id="main">
    <div class="container">
        <form>
            <div class="formBox">
                <label for="Agachamento">Agachamento</label>
                <input type="number" id="exercAgachamento" placeholder="Peso em Kg"/>

                <label for="Número de reps">Repetições</label>
                <input type="number" id="repsAgachamento" placeholder="reps"/>
            </div>

            <div class="formBox">
                <label for="Supino">Supino</label>
                <input type="number" id="exercSupino" placeholder="Peso em Kg"/>

                <label for="Número de reps">Repetições</label>
                <input type="number" id="repsSupino" placeholder="reps"/>
            </div>

            <div class="formBox">
                <label for="Levantamento Terra">Levantamento Terra</label>
                <input type="number" id="exercLevantamento" placeholder="Peso em Kg"/>

                <label for="Número de reps">Repetições</label>
                <input type="number" id="repsLevantamento" placeholder="reps"/>
            </div>

            <div  class="formBox">
                <button id="btn">Salvar</button>
            </div>
            <div id="msg">
                <pre></pre>
            </div>
        </form>
    </div>
    
    
    <script>
    let prs = [];

    const addPr = (ev) => {
        ev.preventDefault();    // impedir que o browser de submit

        const agachamentoExerc = document.getElementById('exercAgachamento').value;
        const agachamentoRep = document.getElementById('repsAgachamento').value;

        const supinoExerc = document.getElementById('exercSupino').value;
        const supinoRep = document.getElementById('repsSupino').value;

        const levantamentoExerc = document.getElementById('exercLevantamento').value;
        const levantamentoRep = document.getElementById('repsLevantamento').value;

        let pr = {
            id: Date.now(),
            agachamento: {},
            supino: {},
            levantamento: {}
        };

        if (agachamentoExerc && agachamentoRep) {
            pr.agachamento.exerc = agachamentoExerc;
            pr.agachamento.rep = agachamentoRep;
        }

        if (supinoExerc && supinoRep) {
            pr.supino.exerc = supinoExerc;
            pr.supino.rep = supinoRep;
        }

        if (levantamentoExerc && levantamentoRep) {
            pr.levantamento.exerc = levantamentoExerc;
            pr.levantamento.rep = levantamentoRep;
        }

        if (Object.keys(pr.agachamento).length === 0 && Object.keys(pr.supino).length === 0 && Object.keys(pr.levantamento).length === 0) {
            // Se nenhum exercício foi preenchido, não adiciona ao array
            return;
        }

        prs.push(pr);
        document.forms[0].reset();

        console.warn('added', { prs });
        let pre = document.querySelector('#msg pre');
        pre.textContent = '\n' + JSON.stringify(prs, '\t', 2);
    };

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('btn').addEventListener('click', addPr);
    });
</script>
</div>
