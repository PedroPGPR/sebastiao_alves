<?php

    estaLogado();

    $colaborador = selectSQLUnico("SELECT * FROM colaboradores");

    $dblock = 1;
    $mensagem = false;

    $form = isset($_POST['id']) && isset($_POST['senha_antiga']) && isset($_POST['nova_senha']) && isset($_POST['conf_nova_senha']);

    if($form){
        $id = $_POST['id'];
        $senha_antiga = $_POST['senha_antiga'];
        $nova_senha = $_POST['nova_senha'];
        $conf_nova_senha = $_POST['conf_nova_senha'];
        if($nova_senha==$conf_nova_senha){
            if(password_verify($senha_antiga, $colaborador["senha"])){
                $senha_cif = password_hash($nova_senha, PASSWORD_DEFAULT);
                updateSQL("UPDATE colaboradores SET senha='$senha_cif' WHERE id_colaborador='$id'");
                $dblock = 2;
            }else{
                $mensagem = true;
            }    
        }else{
            $mensagem = true;
        }   
    }

    require_once("templates/header.php");
    require_once("views/configuracoes_view.php");
    require_once("templates/footer.php"); 

?>