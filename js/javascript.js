function ativarBotao(botao) {
    var botoes = document.getElementsByClassName('botao');
    for (var i = 0; i < botoes.length; i++) {
        botoes[i].classList.remove('ativo');
    }
    botao.classList.add('ativo');
}
function exibirTela(telaId) {
    var telas = document.getElementsByClassName("tela");
    for (var i = 0; i < telas.length; i++) {
        telas[i].style.display = "none";
    }
    var tela = document.getElementById(telaId);
    if (tela) {
        tela.style.display = "block";
    }
}
