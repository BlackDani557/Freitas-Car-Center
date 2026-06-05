<?php

    $paginas = isset($_GET['paginas']) ? $_GET['paginas']: 1;

    switch($paginas)
    {
        default:
            include './Views/Geral/TelaInicial.html';
        break;
    }

?>