<?php

    estaLogado();

    $autor = selectSQL("SELECT * FROM autor");

    $dblock = 1;

    if(isset($rotas[1])){
        $dblock = 2;
        $form = isset($_POST['id']) && isset($_POST['imagem']) && isset($_POST['texto']);
        if($form){
            $id = $_POST['id'];
            $imagem = $_POST['imagem'];
            $texto = $_POST['texto'];
            updateSQL("UPDATE autor SET imagem='$imagem', descricao='$texto' WHERE id_autor='$id'");
            $dblock = 3;
        }
    }

    require_once("templates/header.php");
    require_once("views/autor_view.php");
    require_once("templates/footer.php"); 

?>