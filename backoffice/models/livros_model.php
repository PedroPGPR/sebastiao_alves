<?php

    estaLogado();

    $livros = selectSQL("SELECT * FROM livros");
    $dblock = 1;

    if(isset($rotas[1]) && isset($rotas[2])){
        if($rotas[1] == "editar"){
            $dblock = 2;
            $livro_editar = selectSQLUnico("SELECT * FROM livros WHERE id_livro='$rotas[2]'");
            $form = isset($_POST["id"]) && isset($_POST["titulo"]) && isset($_POST["imagem"]) && isset($_POST["texto"]);
            if($form){
                $id = $_POST['id'];
                $titulo = $_POST['titulo'];
                $imagem = $_POST['imagem'];
                $texto = $_POST['texto'];
                updateSQL("UPDATE livros SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE id_livro='$id'");
                $dblock = 3;
            }
        }else{
            deleteSQL("DELETE FROM livros WHERE id_livro='$rotas[2]'");
            $dblock = 4;
        }
    }elseif(isset($rotas[1])){
        $dblock=5;
        $form = isset($_POST["titulo"]) && isset($_POST["imagem"]) && isset($_POST["texto"]);
        if($form){
            $titulo = $_POST['titulo'];
            $imagem = $_POST['imagem'];
            $texto = $_POST['texto'];
            insertSQL("INSERT INTO livros (imagem, titulo, texto) VALUES ('$imagem', '$titulo', '$texto')");
            $dblock = 6;
        }
    }

    require_once("templates/header.php");
    require_once("views/livros_view.php");
    require_once("templates/footer.php");
?>