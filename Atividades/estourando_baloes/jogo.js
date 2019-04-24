var timerId = null; //variavel que armazena a chamada da dunção timeout

function iniciaJogo() {
//    alert('Jogo iniciado');
    var url = window.location.search;
    var nivelJogo = url.replace("?", "")
    var tempoSegundos = 0;

    if (nivelJogo == 1) {    //1 facil = 120 segundos
        tempoSegundos = 120;
    }
    if (nivelJogo == 2) {    //2 normal = 60 segundos
        tempoSegundos = 60;
    }
    if (nivelJogo == 3) {    //3 dificil = 30 segundos
        tempoSegundos = 30;
    }

    //inserir o segundo no span
    document.getElementById('cronometro').innerHTML = tempoSegundos;

    //quantidade de balões
    var qtdBaloes = 20;
    criaBaloes(qtdBaloes)

    //imprimir qtd baloes inteiros
    document.getElementById('baloesInteiros').innerHTML = qtdBaloes;

    //imprimir qtd baloes Estourados
    document.getElementById('baloesEstourados').innerHTML = qtdBaloes = 0;

    contagemTempo(tempoSegundos + 1)

}

function contagemTempo(segundos) {
    console.log(segundos)
    segundos = segundos - 1;

    if (segundos == -1) {
        clearTimeout(timerId); // para a execução da função do setTimeout
        gameOver()
        return false
    }


    document.getElementById('cronometro').innerHTML = segundos;
    timerId = setTimeout("contagemTempo(" + segundos + ")", 1000);

}

function gameOver() {
    swal(" Tempo esgotado! ", " Você não conseguio estourar todos os balões !! ");


}


function criaBaloes(qtdBaloes) {

    for (var i = 1; i <= qtdBaloes; i++) {
        var baloes = document.createElement("img");
        baloes.src = 'imagens/balao_azul_pequeno.png';
        baloes.style.margin = '10px'
        baloes.id = "b" + i;
        baloes.onclick = function () {
            estourar(this);
        }

        document.getElementById('cenario').appendChild(baloes);
    }

}

function estourar(e) {
    var idBalao = e.id;

    document.getElementById(idBalao).src = "imagens/balao_azul_pequeno_estourado.png";
    pontuacao(-1);
}

function pontuacao(acao) {
    var baloesInteiros = document.getElementById('baloesInteiros').innerHTML;
    var baloesEstourados = document.getElementById('baloesEstourados').innerHTML;

    baloesInteiros = parseInt(baloesInteiros);
    baloesEstourados = parseInt(baloesEstourados);

    baloesInteiros = baloesInteiros + acao;
    baloesEstourados = baloesEstourados - acao;

    document.getElementById('baloesInteiros').innerHTML = baloesInteiros;
    document.getElementById('baloesEstourados').innerHTML = baloesEstourados;
    situacaoJogo(baloesInteiros);
}

function situacaoJogo(baloesInteiros) {
    if (baloesInteiros == 0){
        swal('Parabéns, você venceu !!')
        pararJogo()
    }
}

function pararJogo(){
    clearTimeout(timerId);
}