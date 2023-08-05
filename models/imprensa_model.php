<?php

    $pagina_atual = (isset($rotas[1])) ? $rotas[1] : 1;

    //Segurança
    if($pagina_atual <= 0){
        $pagina_atual = 1;
    }


    $total_dados = selectSQLUnico("SELECT Count(*) AS total FROM imprensa")["total"];
    $numero_dados = 2;
    $total_paginas = ceil($total_dados / $numero_dados);
    $total_saltos = ($pagina_atual - 1) * $numero_dados;

    $noticias = selectSQL("SELECT * FROM imprensa ORDER BY id_noticia DESC LIMIT $numero_dados OFFSET $total_saltos");

    require_once("templates/header.php");
    require_once("templates/imprensa_cabecalho.php");

    require_once("views/imprensa_view.php");

    require_once("templates/footer.php");

?>