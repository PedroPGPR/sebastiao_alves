<main class="container-fluid">
    <div class="row pt-5">
        <div class="col-12 d-flex justify-content-center">
            <div class="col-10" id="descricao">
                <img src="<?= $livro_especifico['imagem']; ?>" alt="Livro" id="capa_livro">
                <?= $livro_especifico['texto']; ?>
                <a href="javascript:history.back()" class="float-end mt-5 d-none d-lg-block">
                    <button id="saber_mais">Voltar Atrás</button>
                </a>     
            </div>
        </div>
    </div>
</main>