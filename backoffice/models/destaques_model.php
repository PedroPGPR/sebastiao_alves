<?php

    estaLogado();

    $destaques = selectSQL("SELECT * FROM destaques");
    $livros = selectSQL("SELECT * FROM livros");
    $dblock = 1;

    if(isset($rotas[1])){     
        $dblock = 2;
        $form = isset($_POST['livro']) && isset($_POST['observacao']);
        $destaque = selectSQLUnico("SELECT * FROM destaques WHERE id_destaque='$rotas[1]'");
        if($form){
            $id = $_POST['livro'];
            $observacao = $_POST['observacao'];
            updateSQL("UPDATE destaques SET id_livro='$id', observacao='$observacao' WHERE id_destaque='$rotas[1]'");
            $dblock = 3;
        }
    }

    require_once("templates/header.php");
    require_once("views/destaques_view.php");
    require_once("templates/footer.php");

?>