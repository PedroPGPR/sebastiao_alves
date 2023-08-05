<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Data</th>
                    <th>Acções</th>
                </tr>
                <?php foreach($imprensa as $i): ?>
                    <tr>
                        <td><img src="<?= $i['imagem'] ?>" alt="Imagem Desktop"></td>
                        <td><?= $i['titulo'] ?></td>
                        <td><?= mb_strimwidth($i['texto'], 0, 200, "..."); ?></td>
                        <td><?= $i['dat'] ?></td>
                        <td>
                            <a href="imprensa/editar/<?= $i["id_noticia"]; ?>"><button class="m-2">Editar</button></a>
                            <a href="imprensa/apagar/<?= $i["id_noticia"]; ?>"><button class="m-2">Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="imprensa/adicionar">
                <button class="m-2">Adicionar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Noticia (<?= $imprensa_editar['id_noticia']; ?>)</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $imprensa_editar['id_noticia']; ?>">    
                <input type="text" name="titulo" placeholder="Titulo" value="<?= $imprensa_editar["titulo"]; ?>" required><br><br> 
                <input type="text" name="imagem" placeholder="Imagem" value="<?= $imprensa_editar['imagem']; ?>" required><br><br>
                <textarea name="texto" cols="80" rows="10" id="editor"><?= $imprensa_editar["texto"]; ?></textarea><br><br>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script> 
                <input type="text" name="data" placeholder="Data da Publicação" value="<?= $imprensa_editar['dat']; ?>"  required><br><br> 
                <input type="submit" value="Editar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Noticia Editada com sucesso</h1>
            <a href="<?= $url_base ?>imprensa">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==4) ? "block" : "none" ?>">
            <h1>Noticia apagada com Sucesso</h1>
            <a href="<?= $url_base ?>imprensa">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==5) ? "block" : "none" ?>">
            <h3>Adicionar Noticia</h3>
            <br>
            <form action="" method="POST">    
                <input type="text" name="titulo" placeholder="Titulo" required><br><br> 
                <input type="text" name="imagem" placeholder="Imagem" required><br><br>
                <textarea name="texto" cols="80" rows="10" id="add_noticia" placeholder="Texto da Noticia"></textarea><br><br>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#add_noticia' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script> 
                <input type="text" name="data" placeholder="Data Publicação" required><br><br> 
                <input type="submit" value="Adicionar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==6) ? "block" : "none" ?>">
            <h1>Noticia Adicionada com Sucesso</h1>
            <a href="<?= $url_base ?>imprensa">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>