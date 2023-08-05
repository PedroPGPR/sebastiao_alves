<?php

    estaLogado();

    $redes = selectSQL("SELECT * FROM redes");

    $dblock = 1;

    if(isset($rotas[1])){
        $dblock = 2;
        $form = isset($_POST['id']) && isset($_POST['facebook']) && isset($_POST['instagram']) && isset($_POST['linkedin']);
        if($form){
            $id = $_POST['id'];
            $facebook = $_POST['facebook'];
            $instagram = $_POST['instagram'];
            $linkedin = $_POST['linkedin'];
            updateSQL("UPDATE redes SET facebook='$facebook', instagram='$instagram', linkedin='$linkedin' WHERE id_rede='$id'");
            $dblock = 3;
        }
    }

    require_once("templates/header.php");
    require_once("views/redes_view.php");
    require_once("templates/footer.php"); 

?>