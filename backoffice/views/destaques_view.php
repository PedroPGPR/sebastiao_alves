<main>
    <div class="p-5">
        <section class="d-<?= ($dblock==1) ? "block" : "none" ?>">
            <table>
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Observação</th>
                    <th>Acções</th>
                </tr>
                <?php foreach($destaques as $d): ?>
                    <?php $livro_destaque = getLivroID($d['id_livro']); ?>
                    <tr>
                        <td><img src="<?= $livro_destaque['imagem'] ?>" alt="Imagem Livro"></td>
                        <td><?= $livro_destaque['titulo'] ?></td>
                        <td><?= $d['observacao'] ?></td>
                        <td>
                            <a href="destaques/<?= $d["id_destaque"]; ?>"><button class="m-2">Editar</button></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
        <section class="d-<?= ($dblock==2) ? "block" : "none" ?>">
            <form action="" method="POST">
                <select name="livro">
                    <?php foreach($livros as $l): ?>
                        <option value="<?= $l['id_livro']; ?>" <?= ($destaque['id_livro']==$l['id_livro']) ? "selected" : ""; ?>><?= $l['titulo']; ?></option>
                    <?php endforeach; ?>
                </select><br><br>
                <input type="text" name="observacao" value="<?= $destaque['observacao']; ?>"> <br><br>
                <input type="submit" value="Editar">
            </form>
        </section>
        <section class="d-<?= ($dblock==3) ? "block" : "none" ?>">
            <h1>Destaque Editado com sucesso</h1>
            <a href="<?= $url_base ?>destaques">
                <button>Voltar</button>
            </a>
        </section>
    </div>
</main>
