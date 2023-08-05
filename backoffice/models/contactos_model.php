<?php

    estaLogado();

    $contactos = selectSQL("SELECT * FROM contactos");

    $dblock = 1;

    if(isset($rotas[1])){
        $dblock = 2;
        $form = isset($_POST['id']) && isset($_POST['telefone']) && isset($_POST['morada']) && isset($_POST['email']) && isset($_POST['horario']);
        if($form){
            $id = $_POST['id'];
            $telefone = $_POST['telefone'];
            $morada = $_POST['morada'];
            $email = $_POST['email'];
            $horario = $_POST['horario'];
            updateSQL("UPDATE contactos SET telefone='$telefone', morada='$morada', email='$email', horario='$horario' WHERE id_contacto='$id'");
            $dblock = 3;
        }
    }

    require_once("templates/header.php");
    require_once("views/contactos_view.php");
    require_once("templates/footer.php"); 

?>