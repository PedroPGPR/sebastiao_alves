<?php

    //Importacoes
    require_once("required.php");

    //Rotas
    $rotas = $_SERVER["REQUEST_URI"];
    $rotas = str_replace("/sebastiao_alves/", "", $rotas);
    $rotas = explode("/", $rotas);

    if(str_contains($rotas[count($rotas)-1], "?")){
        $parametros = str_replace("?", "", $rotas[count($rotas)-1]);
        $parametros = explode("&", $parametros);
        $_GET = [];
        foreach($parametros as $p){
            $p = explode("=", $p);
            $_GET[$p[0]] = $p[1];
        }
        //var_dump($_GET);
        $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0];
    }

    switch($rotas[0]){
        
        case "":
            require_once("models/home_model.php");
            break;
        case "home":
            require_once("models/home_model.php");
            break;
        case "contactos":
            require_once("models/contactos_model.php");
            break;
        case "autor":
            require_once("models/autor_model.php");
            break;
        case "imprensa":
            require_once("models/imprensa_model.php");
            break;
        case "livro":
            require_once("models/livro_model.php");
            break;
        case "backoffice":
            require_once("backoffice/index.php");
            break;
        default:
            require_once("models/404_model.php");
            break;
    }
    
?>