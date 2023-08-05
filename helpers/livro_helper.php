<?php

    function getLivroID($id){
        return selectSQLUnico("SELECT * FROM livros WHERE id_livro='$id'");
    }

    function getLivrosSubmenu(){
        return selectSQL("SELECT id, titulo FROM livros ORDER BY titulo ASC");
    }

?>