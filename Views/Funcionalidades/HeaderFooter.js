fetch('./Views/Componentes/Header.html')
.then((resposta) => resposta.text())
.then((dados) => {
    document.getElementById('header').innerHTML = dados;
})


fetch('./Views/Componentes/Footer.html')

.then((respostaR) => respostaR.text())

.then((dadosR) => 
{
    document.getElementById('footer').innerHTML = dadosR;
})