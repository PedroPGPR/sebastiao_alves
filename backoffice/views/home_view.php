<main>
    <div class="p-5">
    <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <h3>Imagem Página "HOME"</h3>
            <img src="<?= $home[0]['imagem']; ?>" alt="ImagemAutor" id="autor">
            <hr>
            <h3>Texto "Ultimos Livros"</h3>
            <p>
                <?= $home[0]['ultimos_livros']; ?>
            </p>
            <hr>
            <a href="home/editar"><button class="m-2">Editar</button></a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Home</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $home[0]['id_home']; ?>">       
                <input type="text" name="imagem" placeholder="Imagem" value="<?= $home[0]['imagem']; ?>" required> <br><br>
                <textarea name="texto" cols="80" rows="10" id="editor"><?= $home[0]["ultimos_livros"]; ?></textarea><br><br>
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
            <h1>Home Editada com sucesso</h1>
            <a href="<?= $url_base ?>home">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>