<?php

    $paginas = isset($_GET['paginas']) ? $_GET['paginas']: 1;

    switch($paginas)
    {
        case 'Compra':
            include './Views/Geral/Compra.html';
        break;

        case 'Venda':
            include './Views/Geral/Vender.html';
        break;

        case 'Financiamento':
            include './Views/Geral/Financiamento.html';
        break;

        case 'TabelaFIPE':
            include './Views/Geral/TabelaFIPE.html';
        break;

        case 'Catalogo0KM':
            include './Views/Geral/Catalogo0km.html';
        break;

        default:
            include './Views/Geral/TelaInicial.html';
        break;
    }

?>