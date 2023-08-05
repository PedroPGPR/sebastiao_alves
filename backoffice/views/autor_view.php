<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <h3>Imagem Página "Autor"</h3>
            <img src="<?= $autor[0]['imagem']; ?>" alt="ImagemAutor" id="autor">
            <hr>
            <h3>Texto Página "Autor"</h3>
            <p>
                <?= $autor[0]['descricao']; ?>
            </p>
            <hr>
            <a href="autor/editar"><button class="m-2">Editar</button></a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Autor</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $autor[0]['id_autor']; ?>">       
                <input type="text" name="imagem" placeholder="Imagem" value="<?= $autor[0]['imagem']; ?>" required> <br><br>
                <textarea name="texto" id="editor" cols="30" rows="10"><?= $autor[0]['descricao']; ?></textarea><br><br>
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
            <h1>Autor Editado com sucesso</h1>
            <a href="<?= $url_base ?>autor">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>