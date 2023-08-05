<?php

    estaLogado();

    $imprensa = selectSQL("SELECT * FROM imprensa");
    $dblock = 1;

    if(isset($rotas[1]) && isset($rotas[2])){
        if($rotas[1] == "editar"){
            $dblock = 2;
            $imprensa_editar = selectSQLUnico("SELECT * FROM imprensa WHERE id_noticia='$rotas[2]'");
            $form = isset($_POST["id"]) && isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data"]);
            if($form){
                $id = $_POST['id'];
                $imagem = $_POST['imagem'];
                $titulo = $_POST['titulo'];
                $texto = $_POST['texto'];
                $data = $_POST['data'];
                updateSQL("UPDATE imprensa SET titulo='$titulo', texto='$texto', dat='$data' WHERE id_noticia='$id'");
                $dblock = 3;
            }
        }else{
            deleteSQL("DELETE FROM imprensa WHERE id_noticia='$rotas[2]'");
            $dblock = 4;
        }
    }elseif(isset($rotas[1])){
        $dblock=5;
        $form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data"]);
        if($form){
            $imagem = $_POST["imagem"];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $data = $_POST['data'];
            insertSQL("INSERT INTO imprensa (imagem, titulo, texto, dat) VALUES ('$imagem', '$titulo', '$texto', '$data')");
            $dblock = 6;
        }
    }

    require_once("templates/header.php");
    require_once("views/imprensa_view.php");
    require_once("templates/footer.php");
?>