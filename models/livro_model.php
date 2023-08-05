<?php

    $livro_especifico = getLivroID($rotas[1]);

    require_once("templates/header.php");
    require_once("templates/livro_cabecalho.php");

    require_once("views/livro_view.php");

    require_once("templates/footer.php");


?>