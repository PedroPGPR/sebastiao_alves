<?php

function fazerLogin($usuario, $senha){

    $perfil = selectSQLUnico("SELECT * FROM colaboradores WHERE usuario='$usuario'");

    if(!empty($perfil)){
        if(password_verify($senha, $perfil["senha"])){
            session_start();
            $_SESSION["colaborador"] = $perfil;      
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }

}

function estaLogado(){
    session_start();
    if(!isset($_SESSION["colaborador"])){
        header("Location: index");
        exit();
    }
}

function logout(){
    session_start();
    session_destroy();
}

function getLivroID($id){
    return selectSQLUnico("SELECT * FROM livros WHERE id_livro='$id'");
}

?>