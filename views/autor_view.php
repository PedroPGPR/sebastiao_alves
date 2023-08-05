<main class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-9">
            <img src="<?= $autor[0]['imagem']; ?>" alt="Foto" class="mx-auto d-block" id="imagem_autor">
            <p id="descricao">
                <?= $autor[0]['descricao']; ?>
            </p>
            <br><br>
            <a href="javascript:history.back()" class="btn d-flex align-items-center flex-row justify-content-center float-center float-md-end mx-auto p-0" id="saber_mais">Voltar Atrás</a> 
        </div>
    </div>
</main>