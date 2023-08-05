<?php

    estaLogado();

    $carousel = selectSQL("SELECT * FROM carousel");
    $dblock = 1;

    if(isset($rotas[1]) && isset($rotas[2])){
        if($rotas[1] == "editar"){
            $dblock = 2;
            $carousel_editar = selectSQLUnico("SELECT * FROM carousel WHERE id_carousel='$rotas[2]'");
            $form = isset($_POST["id"]) && isset($_POST["titulo"]) && isset($_POST["imagem_desktop"]) && isset($_POST["imagem_mobile"]) && isset($_POST["subtitulo"]) && isset($_POST["link"]);
            if($form){
                $id = $_POST['id'];
                $titulo = $_POST['titulo'];
                $imagem_desktop = $_POST['imagem_desktop'];
                $imagem_mobile = $_POST['imagem_mobile'];
                $subtitulo = $_POST['subtitulo'];
                $link = $_POST['link'];
                updateSQL("UPDATE carousel SET titulo='$titulo', subtitulo='$subtitulo', link='$link', imagem_desktop='$imagem_desktop', imagem_mobile='$imagem_mobile' WHERE id_carousel='$id'");
                $dblock = 3;
            }
        }else{
            deleteSQL("DELETE FROM carousel WHERE id_carousel='$rotas[2]'");
            $dblock = 4;
        }
    }elseif(isset($rotas[1])){
        $dblock=5;
        $form = isset($_POST["titulo"]) && isset($_POST["imagem_desktop"]) && isset($_POST["imagem_mobile"]) && isset($_POST["subtitulo"]) && isset($_POST["link"]);
        if($form){
            $titulo = $_POST['titulo'];
            $imagem_desktop = $_POST['imagem_desktop'];
            $imagem_mobile = $_POST['imagem_mobile'];
            $subtitulo = $_POST['subtitulo'];
            $link = $_POST['link'];
            insertSQL("INSERT INTO carousel (imagem_desktop, imagem_mobile, titulo, subtitulo, link) VALUES ('$imagem_desktop', '$imagem_mobile', '$titulo', '$subtitulo', '$link')");
            $dblock = 6;
        }
    }

    require_once("templates/header.php");
    require_once("views/carousel_view.php");
    require_once("templates/footer.php");
?>

