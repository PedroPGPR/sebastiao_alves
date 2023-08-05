<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Acções</th>
                </tr>
                <?php foreach($livros as $l): ?>
                    <tr>
                        <td><img src="<?= $l['imagem'] ?>" alt="desktop"></td>
                        <td><?= mb_strimwidth($l['titulo'], 0, 300, "..."); ?></td>
                        <td><?= mb_strimwidth($l['texto'], 0, 300, "..."); ?></td>
                        <td>
                            <a href="livros/editar/<?= $l["id_livro"]; ?>"><button class="m-2">Editar</button></a>
                            <a href="livros/apagar/<?= $l["id_livro"]; ?>"><button class="m-2">Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="livros/adicionar">
                <button class="m-2">Adicionar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Livro (<?= $livro_editar['id_livro']; ?>)</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $livro_editar['id_livro']; ?>">    
                <input type="text" name="titulo" placeholder="Nome" value="<?= $livro_editar["titulo"]; ?>" required><br><br> 
                <input type="text" name="imagem" placeholder="Imagem" value="<?= $livro_editar["imagem"]; ?>"  required> <br><br>
                <textarea name="texto" cols="100" rows="100" id="editor"><?= $livro_editar["texto"]; ?></textarea><br><br>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script> 
                <input type="submit" value="Editar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Livro Editado com sucesso</h1>
            <a href="<?= $url_base ?>livros">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==4) ? "block" : "none" ?>">
            <h1>Livro Apagado com Sucesso</h1>
            <a href="<?= $url_base ?>livros">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==5) ? "block" : "none" ?>">
            <h3>Adicionar Livro</h3>
            <br>
            <form action="" method="POST">      
                <input type="text" name="titulo" placeholder="Nome" required><br><br> 
                <input type="text" name="imagem" placeholder="Imagem" required> <br><br>
                <textarea name="texto" cols="80" rows="30" placeholder="Texto para Livro" id="add_livro"></textarea><br><br>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#add_livro' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script> 
                <input type="submit" value="Adicionar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==6) ? "block" : "none" ?>">
            <h1>Livro Adicionado com Sucesso</h1>
            <a href="<?= $url_base ?>livros">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>