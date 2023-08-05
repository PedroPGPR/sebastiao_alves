<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <table>
                <tr>
                    <th>Imagem Desktop</th>
                    <th>Imagem Mobile</th>
                    <th>Titulo</th>
                    <th>Subtitulo</th>
                    <th>Acções</th>
                </tr>
                <?php foreach($carousel as $c): ?>
                    <tr>
                        <td><img src="<?= $c['imagem_desktop'] ?>" alt="desktop"></td>
                        <td><img src="<?= $c['imagem_mobile'] ?>" alt="mobile"></td>
                        <td><?= $c['titulo'] ?></td>
                        <td><?= $c['subtitulo'] ?></td>
                        <td>
                            <a href="carousel/editar/<?= $c["id_carousel"]; ?>"><button class="m-2">Editar</button></a>
                            <a href="carousel/apagar/<?= $c["id_carousel"]; ?>"><button class="m-2">Apagar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="carousel/adicionar">
                <button class="m-2">Adicionar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <h3>Editar Banner (<?= $carousel_editar['id_carousel']; ?>)</h3>
            <br>
            <form action="" method="POST"> 
                <input type="hidden" name="id" value="<?= $carousel_editar['id_carousel']; ?>">    
                <input type="text" name="titulo" placeholder="Nome" value="<?= $carousel_editar["titulo"]; ?>" required><br><br> 
                <input type="text" name="imagem_desktop" placeholder="Imagem Desktop" value="<?= $carousel_editar['imagem_desktop']; ?>" required>
                <input type="text" name="imagem_mobile" placeholder="Imagem Mobile" value="<?= $carousel_editar['imagem_mobile']; ?>"  required> <br><br>
                <textarea name="subtitulo" cols="80" rows="10"><?= $carousel_editar["subtitulo"]; ?></textarea><br><br>
                <input type="text" name="link" placeholder="Link" value="<?= $carousel_editar['link']; ?>"  required><br><br> 
                <input type="submit" value="Editar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Banner Editado com sucesso</h1>
            <a href="<?= $url_base ?>carousel">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==4) ? "block" : "none" ?>">
            <h1>Banner apagado com Sucesso</h1>
            <a href="<?= $url_base ?>carousel">
                <button>Voltar</button>
            </a>
        </section>
        <section class="d-<?= ($dblock==5) ? "block" : "none" ?>">
            <h3>Adicionar Banner</h3>
            <br>
            <form action="" method="POST">    
                <input type="text" name="titulo" placeholder="Nome" required><br><br> 
                <input type="imagem" name="imagem_desktop" placeholder="Imagem Desktop">
                <input type="imagem" name="imagem_mobile" placeholder="Imagem Mobile"> <br><br>
                <textarea name="subtitulo" cols="80" rows="10"></textarea><br><br>
                <input type="text" name="link" placeholder="Link" required><br><br> 
                <input type="submit" value="Adicionar"><br><br>
            </form>
            <a target="_blank" href="https://localhost//sebastiao_alves/filemanager/tinyfilemanager.php">
                <button>Gestor de Ficheiros</button>
            </a><br><br>
        </section>
        <section class="d-<?= ($dblock==6) ? "block" : "none" ?>">
            <h1>Banner Adicionado com Sucesso</h1>
            <a href="<?= $url_base ?>carousel">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>