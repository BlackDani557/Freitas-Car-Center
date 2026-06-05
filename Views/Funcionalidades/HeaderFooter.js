fetch('./Views/Componentes/Header.html')
.then((resposta) => resposta.text())
.then((dados) => {
    document.getElementById('header').innerHTML = dados;
})