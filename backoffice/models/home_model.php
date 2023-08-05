<?php

    estaLogado();

    $home = selectSQL("SELECT * FROM home");

    $dblock = 1;

    if(isset($rotas[1])){
        $dblock = 2;
        $form = isset($_POST['id']) && isset($_POST['imagem']) && isset($_POST['texto']);
        if($form){
            $id = $_POST['id'];
            $imagem = $_POST['imagem'];
            $texto = $_POST['texto'];
            updateSQL("UPDATE home SET imagem='$imagem', ultimos_livros='$texto' WHERE id_home='$id'");
            $dblock = 3;
        }
    }


    require_once("templates/header.php");
    require_once("views/home_view.php");
    require_once("templates/footer.php");    
?>