<main class="container-fluid">
    <div class="m-3 mb-0 row d-flex justify-content-center">
        <div class="col-11">
            <h5 id="tbv">Últimos Livros</h5>
            <p id="descr">
                <?= $home[0]['ultimos_livros'] ?>
            </p>
        </div>
        <div class="col-11 d-flex flex-wrap flex-row justify-content-between m-4 mb-0">
            <?php foreach($destaque as $d): ?>
                <?php $livro_destaque = getLivroID($d['id_livro']); ?>
                <pre><?php $d; ?></pre>
                <div class="card p-0 shadow mb-5" style="width: 20rem;" id="cartao">
                    <img src="<?= $livro_destaque['imagem']; ?>" class="card-img-top" alt="Livro 1">
                    <div class="card-body p-4"> 
                        <h3 class="card-title m-0" id="tbv"><?= $livro_destaque['titulo']; ?></h3>
                        <h5 class="card-title mt-2 mb-2 me-2"><?= $d['observacao']; ?></h5>
                        <div id="descr">
                            <?= mb_strimwidth($livro_destaque['texto'], 0, 200, "..."); ?>
                        </div> 
                        <a href="livro/<?= $d['id_livro']; ?>" class="btn d-flex align-items-center flex-row justify-content-center float-end p-0" id="saber_mais">Saber Mais</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>